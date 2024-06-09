var tenant_list = $("#tenant-table").DataTable({
  processing: true,

  serverSide: true,

  responsive: true,

  destroy: true,

  order: [[0, "ASC"]],

  //table columns
  columns: [
    { data: "last_name", width: "16%", orderable: false },
    { data: "first_name", width: "16%", orderable: false },
    { data: "middle_name", width: "16%", orderable: false },
    { data: "room_number", width: "11%", orderable: false },
    { data: "starting_date", width: "11%", orderable: false },
    {
      data: "tenant_id",
      width: "30%",
      orderable: false,
      render: function (data, type, row, meta) {
        var btn = "";

        btn += `<a href='javascript:void(0);' class='btn btn-sm btn-warning rounded-pill mx-1 editTenantbtn' data-id="${data}" data-user="${row.user_id}"><i class="bi bi-pencil"></i></a>`;
        btn += `<a href='javascript:void(0);' class='btn btn-sm btn-danger rounded-pill mx-1 deleteTenantbtn' data-id="${data}"><i class="bi bi-trash"></i></a>`;

        return btn;
      },
    },
  ],

  language: {
    search: "",

    lengthMenu: "Showing _MENU_ records",

    zeroRecords: "Record not found",

    info: "Showing page _PAGE_ of _PAGES_",

    searchPlaceholder: "Search records...",

    infoFiltered: "",
  },

  ajax: {
    url: base_url + "tenant/getTenantList",

    type: "POST",

    datatype: "json",
  },
});

$(document).ready(function () {
  $(document).on("click", ".deleteTenantbtn", function (e) {
    e.preventDefault();
    $(".delTenantModal").modal("show").hide().fadeIn(500);
  });

  $("#addTenantmodalbtn").on("click", function (e) {
    e.preventDefault();
    $(".tenant_user_info").modal("show").hide().fadeIn(500);
  });

  $(document).on("click", ".editTenantbtn", function (e) {
    e.preventDefault();

    $('#editTenantform input[name="tenant_id"]').val($(this).data("id"));
    $('#editTenantform input[name="user_id"]').val($(this).data("user"));

    let id = $(this).data("id");
    let url = `${base_url}tenant/getTenant/${id}`;
    let res = getAjax(url);

    if (res) {
      let fields = [
        "first_name",
        "middle_name",
        "last_name",
        "room_number",
        "starting_date",
      ];
      $.each(fields, function (index, fieldName) {
        $('#editTenantform input[name="' + fieldName + '"]').val(
          res[fieldName]
        );
      });

      $(".editTenant").modal("show").hide().fadeIn(500);
    }
  });

  $("#editTenantform").on("submit", function (e) {
    e.preventDefault();

    let url = `${base_url}tenant/updateTenant`;
    let formdata = new FormData($(this)[0]);

    let res = ajax(url, formdata);
    if (res) {
      swalThen(res.message, res.icon, function () {
        $(".editTenant").modal("hide").fadeOut(700);
        tenant_list.ajax.reload();
      });
    }
  });

  $("#addTenantinfoform").on("submit", function (e) {
    e.preventDefault();

    // Validate the form using Bootstrap 5 validation
    if (!validateForm($(this))) {
      return; // Stop the submission if the form is not valid
    }

    let url = `${base_url}tenant/addTenantInfo`;
    let formdata = new FormData($(this)[0]);
    let res = ajax(url, formdata);

    if (res) {
      swalThen(res.message, res.icon, () => {
        $(".tenant_user_info").modal("hide").fadeOut(500);
        $(".tenant_user_creds").modal("show").hide().fadeIn(500);
        $("#addTenantCredentials input[name='user_info_id']").val(res.id);
      });
    }
  });

  $("#addTenantCredentials").on("submit", function (e) {
    e.preventDefault();

    if (!validateForm($(this))) {
      return;
    }

    let url = `${base_url}tenant/addUserCreds`;
    let formdata = new FormData($(this)[0]);
    let res = ajax(url, formdata);

    if (res) {
      swalThen(res.message, res.icon, () => {
        if (res.success) {
          $(".tenant_user_creds").modal("hide").fadeOut(500);
          $(".tenant_room_info").modal("show").hide().fadeIn(500);
          $("#addTenantRoomInfo input[name='user_id']").val(res.user_id);
        }
      });
    }
  });
});
