var employee_list = $("#tenant-table").DataTable({

  processing: true,

  serverSide: true,

  responsive: true,

  destroy: true,

  order: [[0, "ASC"]],

  //table columns
  columns: [
    { data: "last_name", width: "20%", orderable: false},
    { data: "first_name", width: "20%", orderable: false},
    { data: "middle_name", width: "20%", orderable: false},
    // { data: "room_number", width: "20%", orderable: false},
    // { data: "start_date", width: "20%", orderable: false},
    // { data: "tenant_id", width: "20%", orderable: false},

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