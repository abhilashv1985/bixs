$(document).ready(function() {
    $(document).on('click', '.date', function(e) {
        alert("date clickedddddddddd");
    });
    $(".date").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "2012:2016",
        altFormat: "yy-mm-dd"
    });
    
});

 $(document).on('click', '.date', function(e) {
        alert("date clickedddddddddd");
    });