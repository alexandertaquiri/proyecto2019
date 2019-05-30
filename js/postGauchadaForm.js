$(document).ready(function() {

    $('#myModal').modal('show');
    /*Restringe las fechas del timepicker*/
    var now = new Date();
    minDate = now.toISOString().substring(0,10);
    $('#exp').prop('min', minDate);
    $("#myModal").on('hidden.bs.modal', function(){
        reset_form();
        document.location.href = "index.php";
    });
   
});