$(document).ready((function(){
    $("#datatable").DataTable(),
    $("#datatable-buttons").DataTable({
        lengthChange:!1,
        pageLength:-1,
        paging:false,
        buttons:["excel","pdf"]
    }).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),
    $(".dataTables_length select").addClass("form-select form-select-sm")
}));