$(document).ready(function() {
    $(document).on('click', '#btnshowtext', function() {
        var moduleid = (document.getElementById('moduleid_fld')).value;
        var moduleName = (document.getElementById('modulename_fld')).value;

        $(this).addClass('request_sent');
        $(this).hasClass('request_sent');
        $.post(base_url + "datatype/showTextPanel", {moduleid: moduleid, showOnlyForm: 1, modulename: moduleName}, function(html) {
            $('.divMajorColumn').html(html);
        });
    });

    $(document).on('click', '#saveText', function(e) {
        e.preventDefault();
        var formdata = $("#textPanel").serialize();
        //validations
        var section = (document.getElementById('ddlSection')).value;
        var fieldname = (document.getElementById('txtFieldName')).value;
        var fieldlength = (document.getElementById('txtFieldLength')).value;
        if (fieldname == "") {
            alert("Please Enter Field Name..!");
            return;
        }
        if ((fieldlength == "") || (fieldlength == 0)) {
            alert("Please Enter Field Length..!");
            return;
        }
        //alert(section);
        if (section == 0) {
            alert("Please Select Section..!");
            return;
        }

        $.post(base_url + "datatype/showTextPanel", formdata, function(data) {
            if (data == 1) {
                alert("successfuly added");
                (document.getElementById('txtFieldName')).value = '';
                (document.getElementById('txtFieldLength')).value = '';
            }
            else if (data == 0) {
                alert("Please fill all the fields")
            } else if (data == -1) {
                alert("Please select Section");
            }
            else {
                alert("Some error has occurred")
            }


        });
    });

    $(document).on('click', '#btnshowcheckbox', function() {
        var moduleid = (document.getElementById('moduleid_fld')).value;
        var moduleName = (document.getElementById('modulename_fld')).value;
        $.post(base_url + "datatype/showCheckboxPanel", {moduleid: moduleid, showOnlyForm: 1, modulename: moduleName}, function(html) {
            $('.divMajorColumn').html(html);
        });
    });

    $(document).on('click', '#saveCheckbox', function(e) {
        e.preventDefault();
        var formdata = $("#checkboxPanel").serialize();
        var section = (document.getElementById('ddlSection')).value;
        var fieldname = (document.getElementById('txtCheckBoxName')).value;
        if (fieldname == "") {
            alert("Please Enter Field Name..!");
            return;
        }
        //alert(section);
        if (section == 0) {
            alert("Please Select Section..!");
            return;
        }

        $.post(base_url + "datatype/showCheckboxPanel", formdata, function(data) {
            if (data == 1) {
                alert("successfuly added");
                (document.getElementById('txtCheckBoxName')).value = '';
                (document.getElementById('ischeckboxactive')).value = '';
            }
            else if (data == 0) {
                alert("Please fill all the fields")
            } else if (data == -1) {
                alert("Please select Section");
            }
            else {
                alert("Some error has occurred")
            }
        });
    });

    $(document).on('click', '#btnshowinteger', function() {
        var moduleid = (document.getElementById('moduleid_fld')).value;
        var moduleName = (document.getElementById('modulename_fld')).value;
        $.post(base_url + "datatype/showIntegerPanel", {moduleid: moduleid, showOnlyForm: 1, modulename: moduleName}, function(html) {
            $('.divMajorColumn').html(html);
        });
    });

    $(document).on('click', '#saveInteger', function(e) {
        e.preventDefault();
        var formdata = $("#integerPanel").serialize();
        var section = (document.getElementById('ddlSection')).value;
        var fieldname = (document.getElementById('txtIntegerName')).value;
        var fieldlength = (document.getElementById('txtIntegerLength')).value;
        if (fieldname == "") {
            alert("Please Enter Field Name..!");
            return;
        }
        if ((fieldlength == "") || (fieldlength == 0)) {
            alert("Please Enter Field Length..!");
            return;
        }
        //alert(section);
        if (section == 0) {
            alert("Please Select Section..!");
            return;
        }

        $.post(base_url + "datatype/showIntegerPanel", formdata, function(data) {
            if (data == 1) {
                alert("successfuly added");
                (document.getElementById('txtIntegerName')).value = '';
                (document.getElementById('txtIntegerLength')).value = '';
            }
            else if (data == 0) {
                alert("Please fill all the fields")
            } else if (data == -1) {
                alert("Please select Section");
            }
            else {
                alert("Some error has occurred")
            }

        });
    });

    $(document).on('click', '#btnshowpercent', function() {
        var moduleid = (document.getElementById('moduleid_fld')).value;
        var moduleName = (document.getElementById('modulename_fld')).value;
        $.post(base_url + "datatype/showPercentPanel", {moduleid: moduleid, showOnlyForm: 1, modulename: moduleName}, function(html) {
            $('.divMajorColumn').html(html);
        });
    });

    $(document).on('click', '#savePercent', function(e) {
        e.preventDefault();
        var formdata = $("#percentPanel").serialize();
        var section = (document.getElementById('ddlSection')).value;
        var fieldname = (document.getElementById('txtPercentName')).value;
        if (fieldname == "") {
            alert("Please Enter Field Name..!");
            return;
        }
        if (section == 0) {
            alert("Please Select Section..!");
            return;
        }

        $.post(base_url + "datatype/showPercentPanel", formdata, function(data) {
            if (data == 1) {
                alert("successfuly added");
                (document.getElementById('txtPercentName')).value = '';
            }
            else if (data == 0) {
                alert("Please fill all the fields")
            } else if (data == -1) {
                alert("Please select Section");
            }
            else {
                alert("Some error has occurred")
            }

        });
    });

    $(document).on('click', '#btnshowdecimal', function() {
        var moduleid = (document.getElementById('moduleid_fld')).value;
        var moduleName = (document.getElementById('modulename_fld')).value;
        $.post(base_url + "datatype/showDecimalPanel", {moduleid: moduleid, showOnlyForm: 1, modulename: moduleName}, function(html) {
            $('.divMajorColumn').html(html);
        });
    });

    $(document).on('click', '#saveDecimal', function(e) {
        e.preventDefault();
        var formdata = $("#decimalPanel").serialize();
        var section = (document.getElementById('ddlSection')).value;
        var fieldname = (document.getElementById('txtDecimalName')).value;
        var fieldlength = (document.getElementById('txtDecimalLength')).value;
        var fieldupto = (document.getElementById('txtDecimalUpto')).value;
        if (fieldname == "") {
            alert("Please Enter Field Name..!");
            return;
        }
        if ((fieldlength == "") || (fieldlength == 0)) {
            alert("Please Enter Field Length..!");
            return;
        }
        if ((fieldupto == "") || (fieldupto == 0)) {
            alert("Please Enter Decimal Upto Field..!");
            return;
        }
        //alert(section);
        if (section == 0) {
            alert("Please Select Section..!");
            return;
        }

        $.post(base_url + "datatype/showDecimalPanel", formdata, function(data) {
            if (data == 1) {
                alert("successfuly added");
                (document.getElementById('txtDecimalName')).value = '';
                (document.getElementById('txtDecimalLength')).value = '';
                (document.getElementById('txtDecimalUpto')).value = '';
            }
            else if (data == 0) {
                alert("Please fill all the fields")
            } else if (data == -1) {
                alert("Please select Section");
            }
            else {
                alert("Some error has occurred")
            }

        });
    });

    $(document).on('click', '#btnshowcurrency', function() {
        var moduleid = (document.getElementById('moduleid_fld')).value;
        var moduleName = (document.getElementById('modulename_fld')).value;
        $.post(base_url + "datatype/showCurrencyPanel", {moduleid: moduleid, showOnlyForm: 1, modulename: moduleName}, function(html) {
            $('.divMajorColumn').html(html);
        });
    });

    $(document).on('click', '#saveCurrency', function(e) {
        e.preventDefault();
        var formdata = $("#currencyPanel").serialize();
        var section = (document.getElementById('ddlSection')).value;
        var fieldname = (document.getElementById('txtCurrencyName')).value;
        var fieldlength = (document.getElementById('txtCurrencyLength')).value;
        var fieldupto = (document.getElementById('txtCurrencyDecimalUpto')).value;
        if (fieldname == "") {
            alert("Please Enter Field Name..!");
            return;
        }
        if ((fieldlength == "") || (fieldlength == 0)) {
            alert("Please Enter Field Length..!");
            return;
        }
        if ((fieldupto == "") || (fieldupto == 0)) {
            alert("Please Enter Field Length..!");
            return;
        }
        //alert(section);
        if (section == 0) {
            alert("Please Select Section..!");
            return;
        }

        $.post(base_url + "datatype/showCurrencyPanel", formdata, function(data) {
            if (data == 1) {
                alert("successfuly added");
                (document.getElementById('txtCurrencyName')).value = '';
                (document.getElementById('txtCurrencyLength')).value = '';
                (document.getElementById('txtCurrencyDecimalUpto')).value = '';
            }
            else if (data == 0) {
                alert("Please fill all the fields")
            } else if (data == -1) {
                alert("Please select Section");
            }
            else {
                alert("Some error has occurred")
            }

        });
    });

    $(document).on('click', '#btnshowdate', function() {
        var moduleid = (document.getElementById('moduleid_fld')).value;
        var moduleName = (document.getElementById('modulename_fld')).value;
        $.post(base_url + "datatype/showDatePanel", {moduleid: moduleid, showOnlyForm: 1, modulename: moduleName}, function(html) {
            $('.divMajorColumn').html(html);
        });
    });

    $(document).on('click', '#saveDate', function(e) {
        e.preventDefault();
        var formdata = $("#datePanel").serialize();
        var section = (document.getElementById('ddlSection')).value;
        var fieldname = (document.getElementById('txtDateName')).value;
        if (fieldname == "") {
            alert("Please Enter Field Name..!");
            return;
        }
        //alert(section);
        if (section == 0) {
            alert("Please Select Section..!");
            return;
        }


        $.post(base_url + "datatype/showDatePanel", formdata, function(data) {
            if (data == 1) {
                alert("successfuly added");
                (document.getElementById('txtDateName')).value = '';
            }
            else if (data == 0) {
                alert("Please fill all the fields")
            } else if (data == -1) {
                alert("Please select Section");
            }
            else {
                alert("Some error has occurred")
            }

        });
    });

    $(document).on('click', '#btnshowdatetime', function() {
        var moduleid = (document.getElementById('moduleid_fld')).value;
        var moduleName = (document.getElementById('modulename_fld')).value;
        $.post(base_url + "datatype/showDatetimePanel", {moduleid: moduleid, showOnlyForm: 1, modulename: moduleName}, function(html) {
            $('.divMajorColumn').html(html);
        });
    });

    $(document).on('click', '#saveDateTime', function(e) {
        e.preventDefault();
        var formdata = $("#datetimePanel").serialize();
        var section = (document.getElementById('ddlSection')).value;
        var fieldname = (document.getElementById('txtDatetimeName')).value;
        if (fieldname == "") {
            alert("Please Enter Field Name..!");
            return;
        }
        if (section == 0) {
            alert("Please Select Section..!");
            return;
        }

        $.post(base_url + "datatype/showDatetimePanel", formdata, function(data) {

            if (data == 1) {
                alert("successfuly added");
                (document.getElementById('txtDatetimeName')).value = '';
            }
            else if (data == 0) {
                alert("Please fill all the fields")
            } else if (data == -1) {
                alert("Please select Section");
            }
            else {
                alert("Some error has occurred")
            }

        });
    });

    $(document).on('click', '#btnshowemail', function() {
        var moduleid = (document.getElementById('moduleid_fld')).value;
        var moduleName = (document.getElementById('modulename_fld')).value;
        $.post(base_url + "datatype/showEmailPanel", {moduleid: moduleid, showOnlyForm: 1, modulename: moduleName}, function(html) {
            $('.divMajorColumn').html(html);
        });
    });

    $(document).on('click', '#saveEmail', function(e) {
        e.preventDefault();
        var formdata = $("#emailPanel").serialize();
         var section = (document.getElementById('ddlSection')).value;
         var fieldname = (document.getElementById('txtEmailName')).value;
         if(fieldname == ""){
         alert("Please Enter Field Name..!");
         return;
         }
         //alert(section);
         if(section == 0){
         alert("Please Select Section..!");
         return;
         }
         
        $.post(base_url + "datatype/showEmailPanel", formdata, function(data) {
            if (data == 1) {
                alert("successfuly added");
                (document.getElementById('txtEmailName')).value = '';
            }
            else if (data == 0) {
                alert("Please fill all the fields")
            } else if (data == -1) {
                alert("Please select Section");
            }
            else {
                alert("Some error has occurred")
            }

        });
    });

    $(document).on('click', '#btnshowphone', function() {
        var moduleid = (document.getElementById('moduleid_fld')).value;
        var moduleName = (document.getElementById('modulename_fld')).value;
        $.post(base_url + "datatype/showPhonePanel", {moduleid: moduleid, showOnlyForm: 1, modulename: moduleName}, function(html) {
            $('.divMajorColumn').html(html);
        });
    });

    $(document).on('click', '#savePhone', function(e) {
        e.preventDefault();
        var formdata = $("#phonePanel").serialize();
         var section = (document.getElementById('ddlSection')).value;
         var fieldname = (document.getElementById('txtPhoneName')).value;
         var fieldlength = (document.getElementById('txtPhonelength')).value;
         if(fieldname == ""){
         alert("Please Enter Field Name..!");
         return;
         }
         if((fieldlength == "")||(fieldlength == 0)){
         alert("Please Enter Field Length..!");
         return;
         }
         //alert(section);
         if(section == 0){
         alert("Please Select Section..!");
         return;
         }
         
        $.post(base_url + "datatype/showPhonePanel", formdata, function(data) {
            if (data == 1) {
                alert("successfuly added");
                (document.getElementById('txtPhoneName')).value = '';
                (document.getElementById('txtPhonelength')).value = '';
            }
            else if (data == 0) {
                alert("Please fill all the fields")
            } else if (data == -1) {
                alert("Please select Section");
            }
            else {
                alert("Some error has occurred")
            }
        });
    });

    $(document).on('click', '#btnshowpicklist', function() {
        var moduleid = (document.getElementById('moduleid_fld')).value;
        var moduleName = (document.getElementById('modulename_fld')).value;
        $.post(base_url + "datatype/showPicklistPanel", {moduleid: moduleid, showOnlyForm: 1, modulename: moduleName}, function(html) {
            $('.divMajorColumn').html(html);
        });
    });

    $(document).on('click', '#savepicklist', function(e) {
        e.preventDefault();
        var formdata = $("#picklistPanel").serialize();
         var section = (document.getElementById('ddlSection')).value;
         var fieldname = (document.getElementById('txtPickListName')).value;
         var fieldcntnt = (document.getElementById('txtPickListContent')).value;
         if(fieldname == ""){
         alert("Please Enter Field Name..!");
         return;
         }
         if(fieldcntnt == ""){
         alert("Please Enter Field Length..!");
         return;
         }
         //alert(section);
         if(section == 0){
         alert("Please Select Section..!");
         return;
         }
         
        $.post(base_url + "datatype/showPicklistPanel", formdata, function(data) {
            if (data == 1) {
                alert("successfuly added");
                (document.getElementById('txtPickListName')).value = '';
                (document.getElementById('txtPickListContent')).value = '';
            }
            else if (data == 0) {
                alert("Please fill all the fields")
            } else if (data == -1) {
                alert("Please select Section");
            }
            else {
                alert("Some error has occurred")
            }
            (document.getElementById('txtPickListName')).value = '';
            (document.getElementById('txtPickListContent')).value = '';
        });
    });

    $(document).on('click', '#btnshowurl', function() {
        var moduleid = (document.getElementById('moduleid_fld')).value;
        var moduleName = (document.getElementById('modulename_fld')).value;
        $.post(base_url + "datatype/showUrlPanel", {moduleid: moduleid, showOnlyForm: 1, modulename: moduleName}, function(html) {
            $('.divMajorColumn').html(html);
        });
    });

    $(document).on('click', '#saveurl', function(e) {
        e.preventDefault();
        var formdata = $("#urlPanel").serialize();
         var section = (document.getElementById('ddlSection')).value;
         var fieldname = (document.getElementById('txtUrlName')).value;
         var fieldlength = (document.getElementById('txtUrlLength')).value;
         if(fieldname == ""){
         alert("Please Enter Field Name..!");
         return;
         }
         if((fieldlength == "")||(fieldlength == 0)){
         alert("Please Enter Field Length..!");
         return;
         }
         //alert(section);
         if(section == 0){
         alert("Please Select Section..!");
         return;
         }
         
        $.post(base_url + "datatype/showUrlPanel", formdata, function(data) {
            if (data == 1) {
                alert("successfuly added");
                (document.getElementById('txtUrlName')).value = '';
                (document.getElementById('txtUrlLength')).value = '';
            }
            else if (data == 0) {
                alert("Please fill all the fields")
            } else if (data == -1) {
                alert("Please select Section");
            }
            else {
                alert("Some error has occurred")
            }
        });
    });

    $(document).on('click', '#btnshowtextarea', function() {
        var moduleid = (document.getElementById('moduleid_fld')).value;
        var moduleName = (document.getElementById('modulename_fld')).value;
        $.post(base_url + "datatype/showTextareaPanel", {moduleid: moduleid, showOnlyForm: 1, modulename: moduleName}, function(html) {
            $('.divMajorColumn').html(html);
        });
    });

    $(document).on('click', '#savetextarea', function(e) {
        e.preventDefault();
        var formdata = $("#textareaPanel").serialize();
         var section = (document.getElementById('ddlSection')).value;
         var fieldname = (document.getElementById('txtTextAreaName')).value;
         if(fieldname == ""){
         alert("Please Enter Field Name..!");
         return;
         }
         if(section == 0){
         alert("Please Select Section..!");
         return;
         }
         
        $.post(base_url + "datatype/showTextareaPanel", formdata, function(data) {
            if (data == 1) {
                alert("successfuly added");
                (document.getElementById('txtTextAreaName')).value = '';
            }
            else if (data == 0) {
                alert("Please fill all the fields")
            } else if (data == -1) {
                alert("Please select Section");
            }
            else {
                alert("Some error has occurred")
            }
            (document.getElementById('txtTextAreaName')).value = '';
        });
    });

    $(document).on('click', '#btnshow_mspicklist', function() {
        var moduleid = (document.getElementById('moduleid_fld')).value;
        var moduleName = (document.getElementById('modulename_fld')).value;
        $.post(base_url + "datatype/showMSPicklistPanel", {moduleid: moduleid, showOnlyForm: 1, modulename: moduleName}, function(html) {
            $('.divMajorColumn').html(html);
        });
    });

    $(document).on('click', '#saveMSPicklist', function(e) {
        e.preventDefault();
        var formdata = $("#mspicklistPanel").serialize();
         var section = (document.getElementById('ddlSection')).value;
         var fieldname = (document.getElementById('txtMSPickListName')).value;
         var fieldcntnt = (document.getElementById('txtMSPickListContent')).value;
         if(fieldname == ""){
         alert("Please Enter Field Name..!");
         return;
         }
         if(fieldcntnt == ""){
         alert("Please Enter Field Length..!");
         return;
         }
         //alert(section);
         if(section == 0){
         alert("Please Select Section..!");
         return;
         }
         
        $.post(base_url + "datatype/showMSPicklistPanel", formdata, function(data) {
            if (data == 1) {
                alert("successfuly added");
                (document.getElementById('txtMSPickListName')).value = '';
                (document.getElementById('txtMSPickListContent')).value = '';
            }
            else if (data == 0) {
                alert("Please fill all the fields")
            } else if (data == -1) {
                alert("Please select Section");
            }
            else {
                alert("Some error has occurred")
            }
        });
    });

});

  