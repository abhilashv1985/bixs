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

    $(document).on('click', '#btn_AddUser', function(e) {
        e.preventDefault();
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
                txtCompany : txtCompany,
                txtFirstName : txtFirstName,
                txtLastName : txtLastName,
                txtEmail : txtEmail,
                txtRole : txtRole,
                txtProfile : txtProfile
            },
            success: function(res) {
                if(res == 1){
                    alert("successfully upated");
                }
                else if(res == 0){
                    alert("sme error has ocurred. Try again.");
                }
                else {
                    alert(res);
                }
            }
        });
    });