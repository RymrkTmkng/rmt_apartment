$(document).ready(function(){
    var employeesTable = $('#tenant-table').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "destroy": true,
        "searching": true,
        "columns": [
          {"data": null, "width":"20%",
            render: function (data, type, row){
                return row.first_name + ' ' + row.last_name;
            }
          },
          {"data": "username", "width":"20%"},
          {"data": "phone", "width":"10%"},
          {"data": "gender", "width":"10%"},
          {"data": "email", "width":"20%"},
          {"data": "user_status", "width":"10%",
          "render": function (data, type, row, meta){
              var str = '';
              if(row.user_status == 1){
                str += '<span class="active label label-info" style="width: 84px;">Active</span>';
              } else if(row.user_status == 2){
                str += '<span class="deactivated label label-danger" style="width: 84px;">Deactivated</span>';
              }
              return str;
          }
          },
        ],
        "language": {
          "search": '',
          "searchPlaceholder": "Search ...",
          "infoFiltered": ""
        },
        // Load data for the table's content from an Ajax source
        "ajax": {
          "url": base_url + "tenant/getTenants/",
          "type": "POST",
          "datatype": "json"
        },
      });
  
});