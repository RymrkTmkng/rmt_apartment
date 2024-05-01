var tenant_list = $("#tenant-table").DataTable({

  processing: true,

  serverSide: true,

  responsive: true,

  destroy: true,

  order: [[0, "ASC"]],

  //table columns
  columns: [
    { data: "last_name", width: "16%", orderable: false},
    { data: "first_name", width: "16%", orderable: false},
    { data: "middle_name", width: "16%", orderable: false},
    { data: "room_number", width: "11%", orderable: false},
    { data: "starting_date", width: "11%", orderable: false},
    { data: "tenant_id", width: "30%", orderable: false,
    render: function(data,type,row,meta){
      var btn = '';

      btn += `<a href='javascript:void(0);' class='btn btn-sm btn-warning rounded-pill mx-1 editTenantbtn' data-id="${data}" data-user="${row.user_id}"><i class="bi bi-pencil"></i></a>`;
      btn += `<a href='javascript:void(0);' class='btn btn-sm btn-danger rounded-pill mx-1 deleteTenantbtn' data-id="${data}"><i class="bi bi-trash"></i></a>`;

      return btn;
    }
  }
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

    datatype: "json"

  },

});

function validateForms(){
  'use strict';

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = $('.needs-validation');

    // Loop over them and prevent submission
    forms.each(function() {
        $(this).on('submit', function(event) {
            if (!this.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }

            $(this).addClass('was-validated');
        });
    });
}

$(document).ready(function(){

  validateForms();

  $(document).on('click', '.deleteTenantbtn', function(e){
      e.preventDefault();
      $('.delTenantModal').modal('show').hide().fadeIn(500);
  });

  $('#addTenantmodalbtn').on('click', function(e){
    e.preventDefault();
    $('.tenant_user_info').modal('show').hide().fadeIn(500);
  });

  $(document).on('click', '.editTenantbtn', function(e) {
    e.preventDefault();
    
    $('#editTenantform input[name="tenant_id"]').val($(this).data('id'));
    $('#editTenantform input[name="user_id"]').val($(this).data('user'));

    let id = $(this).data('id');
    let url = `${base_url}tenant/getTenant/${id}`;
    let res = getAjax(url);

    if (res) {
        let fields = ['first_name', 'middle_name', 'last_name', 'room_number', 'starting_date'];
        $.each(fields, function(index, fieldName) {
            $('#editTenantform input[name="' + fieldName + '"]').val(res[fieldName]);
        });

        $('.editTenant').modal('show').hide().fadeIn(500);
    }
});


  $('#editTenantform').on('submit',function(e){
    e.preventDefault();

    let url = `${base_url}tenant/updateTenant`;
    let formdata = new FormData($(this)[0]);

    let res = ajax(url,formdata);
    if(res){
      swalThen(res.message,res.icon,
        function(){
          $('.editTenant').modal('hide').fadeOut(700);
          tenant_list.ajax.reload();
        });
    }
  });

  $(document).on('click','#nextformTenantInfo',function(e){
    e.preventDefault();

    if ($('.tenantInfo').is(':visible')) {
      $('.tenantInfo').fadeOut(500);
      $('.user_credsAdd').fadeIn(500);
    }else{
      $('.tenantInfo').fadeIn(500);
      $('.user_credsAdd').fadeOut(500);
    }
  });

  $('#addTenantinfoform').on('submit',function(e){
    e.preventDefault();

    let url = `${base_url}tenant/addTenantInfo`;
    let formdata = new FormData($(this)[0]);

    let res = ajax(url,formdata);

    if (res.success) {
      
    }
  });

});
