$(document).ready(function() {
    $(document).on('click', '.createsectionclass', function(e) {
        e.preventDefault();
        var e = document.getElementById("dd_modulelist");
        var modid = e.options[e.selectedIndex].value;
        var modName = e.options[e.selectedIndex].text;
        if (modid == 0) {
            alert(' select a module.. !!!');
        }
        else {
            $(".createsectionclass").colorbox({
                href: base_url + "module/displayModuleSection/",
                type: "post",
                data: {'moduleid': modid, 'modulename': modName}
            });
        }
    });
    $(document).on('click', '.createfieldclass', function(e) {
        e.preventDefault();
        var e = document.getElementById("dd_modulelist");
        var modid = e.options[e.selectedIndex].value;
        var modName = e.options[e.selectedIndex].text;

        //alert('name is ' +mName + ' id is ' +mId );
        if (modid == 0) {
            alert(' select a module.. !!!');
        }
        else {
            $(".createfieldclass").colorbox({
                href: base_url + "module/displayModuleFields/",
                type: "post",
                data: {'moduleid': modid, 'modulename': modName}

            });
        }
    });
    $(document).on('click', '.createLookUpclass', function(e) {
        e.preventDefault();
        var e = document.getElementById("dd_modulelist");
        var modid = e.options[e.selectedIndex].value;
        var modName = e.options[e.selectedIndex].text;

        //alert('name is ' +mName + ' id is ' +mId );
        if (modid == 0) {
            alert(' select a module.. !!!');
        }
        else {
            $(".createLookUpclass").colorbox({
                href: base_url + "module/setLookUpFields/",
                type: "post",
                data: {'moduleid': modid, 'modulename': modName}

            });
        }
    });
    $(document).on('click', '#SaveLookUpFields', function(e) {
        e.preventDefault();
        var formdata = $("#LookUpPanel").serialize();
        $.post(base_url + "module/saveLookUpData", formdata, function() {
            alert("successfuly added");

        });
    });
    $(document).on('click', '#editModule', function(e) {
        e.preventDefault();
        $('#moduleMenu a').removeClass('selected');
        $(this).addClass('selected');
        $.ajax({
            type: "POST",
            url: base_url + "module/editModule",
            data: {},
            success: function(res) {
                if (res) {
                    // success
                    $("#moduleContent").html(res);
                } else {
                    // alert the error
                    alert(res);
                }
            }
        });
    });
    $(document).on('click', '#addModule', function(e) {
        e.preventDefault();
        $('#moduleMenu a').removeClass('selected');
        $(this).addClass('selected');
        $.ajax({
            type: "POST",
            url: base_url + "module/displayModule",
            data: {},
            success: function(res) {
                if (res) {
                    // success
                    $("#moduleContent").html(res);

                } else {
                    // alert the error
                    alert(res);
                }
            }
        });
    });

    $(document).on('click', '#btnsaveSection', function(e) {
        e.preventDefault();
        var formdata = $("#AddModuleSelectionPanel").serialize();
        $.post(base_url + "module/addModuleSection", formdata, function(data) {
            //alert(data);
            if (data == 1) {
                alert("Section Successfully created");
                (document.getElementById('txtSectionName')).value = '';
            }
            else if(data == -1){
                alert("Sorry. Section already exist..!!!");
            }else {
                alert("some error has ocuured..!!!");
            }

        });
    });
    });

     // To get all the sections and fields in given module id
     function showModuleContent(moduleid) {
    var e = document.getElementById("dd_modulelist");
     var modid = e.options[e.selectedIndex].value;
     var modName = e.options[e.selectedIndex].text;
     if (moduleid != 0) {
     $.post(base_url + 'module/getModuleContent', {moduleid: modid}, function(html) {
     $('.divmodulecontainer').html(html);
     document.getElementById("moduleNamePlaceHolder").value = modName;
        });
    }
    else {
     $('.divmodulecontainer').html('Select a Module');
     }
}

     // To get all the sections and fields in given module id
     function showModuleLookUpContent(moduleid) {
var e = document.getElementById("dd_modulefields");
var parentModFieldId = e.options[e.selectedIndex].value;
    //    var m = document.getElementById("dd_modulelist");
    //    var lookUpModuleid = m.options[m.selectedIndex].value;
    var lookUpModuleid = moduleid;
    if (parentModFieldId == 0) {
        // Make module id index set to 0
            alert("Please select a field before proceeding");
    }
    else if (lookUpModuleid != 0) {
var parentModuleId = document.getElementById("moduleid").value;         $.post(base_url + 'module/getModuleLookUpContent', {lookUpModuleid: lookUpModuleid, parentModFieldId: parentModFieldId, parentModuleId: parentModuleId}, function(html) {
    $('.divmoduleLookUpcontainer').html(html);
        });
    }
    else {
    alert("Please select a Module before proceeding");

    }
}



