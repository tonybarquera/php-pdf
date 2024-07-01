$(document).ready(function(){
  $("#example").DataTable({
    pageLength: 25,
    "bLengthCahnge": true,
    "destroy": false,
    "async": true,
    buttons: ['excel'],
    "processing": false,
    "columnDefs": [
      {"className": "dt-center", "targets": "_all"}
    ],
    scrollX: true,
    "ajax": {
      "url": "../pdf/controller/actors.php",
      type: "POST"
    },
    "columns": [
      { "data": "actor_id" },
      { "data": "first_name" },
      { "data": "last_name" },
      { "data": "last_update" }
    ]
  });
});