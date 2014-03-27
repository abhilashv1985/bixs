$(document).ready(function() {
    if($(".date").length){
        $(".date").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "2012:2016",
            altFormat: "yy-mm-dd"
        });        
    }
});