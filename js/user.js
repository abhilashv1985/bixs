

$(document).on('click', '#btnAuthenticate', function(e) {
    e.preventDefault();
    var txtlogin = $('#txtlogin').val();
    var txtPass = $('#txtPass').val();

    if (txtlogin.trim() == "") {
        var msg = "Please enter emailid";
        //$(".errorinfotab").html(msg);
        alert(msg);
        return;
    }
    if (txtPass.trim() == "") {
        var msg = "Please enter Password";
        //$(".errorinfotab").html(msg);
        alert(msg);
        return;
    }
    // $.md5(pass);
    $.ajax({
        type: "POST",
        url: base_url + "user/authenticateLogin",
        data: {txtlogin: txtlogin, txtPass: txtPass},
        success: function(res) {
            if (res == 1) {
                // success
                window.location.href= base_url+"admin/index";
            } else {
                // alert the error
                alert("Äuthentication failed");
            }
        }
    });
});

$(document).on('click', '#addUser', function(e) {
    e.preventDefault();
    $('#moduleMenu a').removeClass('selected');
    $(this).addClass('selected');
    $.ajax({
        type: "POST",
        url: base_url + "user/showAddUserPage",
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

$(document).on('click', '#btn_AddUser1', function(e) {
    e.preventDefault();
    txtPassword
    var txtCompany = $('#txtCompany').val();
    var txtFirstName = $('#txtFirstName').val();
    var txtLastName = $('#txtLastName').val();
    var txtEmail = $('#txtEmail').val();
    var txtRole = $('#txtRole').val();
    var txtProfile = $('#txtProfile').val();

    $.ajax({
        type: "POST",
        url: base_url + "user/showAddUserPage",
        data: {
            txtCompany: txtCompany,
            txtFirstName: txtFirstName,
            txtLastName: txtLastName,
            txtEmail: txtEmail,
            txtRole: txtRole,
            txtProfile: txtProfile,
            status: 1
        },
        success: function(res) {
            if (res == 1) {
                alert("successfully upated");

            }
            else if (res == 0) {
                alert("sme error has ocurred. Try again.");
            }
            else {
                alert(res);
            }
        }
    });
});

$(document).on('click', '#btn_editUser', function(e) {
    e.preventDefault();
    var txtuserid = $('#txtuserid').val();
    var txtCompany = $('#txtCompany').val();
    var txtFirstName = $('#txtFirstName').val();
    var txtLastName = $('#txtLastName').val();
    var txtEmail = $('#txtEmail').val();
    var txtRole = $('#txtRole').val();
    var txtProfile = $('#txtProfile').val();

    $.ajax({
        type: "POST",
        url: base_url + "user/showEditUserPage",
        data: {
            userid: txtuserid,
            txtCompany: txtCompany,
            txtFirstName: txtFirstName,
            txtLastName: txtLastName,
            txtEmail: txtEmail,
            txtRole: txtRole,
            txtProfile: txtProfile,
            status: 1,
            formsubmit: 1
        },
        success: function(res) {
            if (res == 1) {
                alert("successfully upated");
            }
            else if (res == 0) {
                alert("sme error has ocurred. Try again.");
            }
            else {
                alert(res);
            }
        }
    });
});

function editUser(userid) {
    $('#moduleMenu a').removeClass('selected');
    $(this).addClass('selected');
    $.ajax({
        type: "POST",
        url: base_url + "user/showEditUserPage",
        data: {userid: userid, formsubmit: 0},
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
}

function deleteUser(userid) {
    if (!confirm('Are you sure you want to Disable this user?')) {
        return;
    }
    $.ajax({
        type: "POST",
        url: base_url + "user/disableUser",
        data: {userid: userid},
        success: function(res) {
            alert("successfully updated");
        }
    });
}

