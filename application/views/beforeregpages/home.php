<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php if (isset($load_js)): echo load_js($load_js);
        endif;
        ?>
        <?php if (isset($load_css)): echo load_css($load_css);
        endif;
        ?> 
        <script type="text/javascript">
            var base_url = '<?php echo base_url(); ?>';
        </script>   
    </head>
    <body>
        <div class="main" align="center">

            <div class="topBar" align="center">

                <div class="maincontent" align="center">
                    <div id="logo">BIXS CRM</div>

                    <div id="login">
<?php echo form_open('admin/index') ?>
                        <input type="text" name="txtUserName" value="" size="20" placeholder="User Name" /> &nbsp;&nbsp;&nbsp;
                        <input type="password" name="txtPassword" value="" size="20" placeholder="Password" /> &nbsp;&nbsp;&nbsp; <input id="btnAuthenticate" type="submit" value="Login" name="btnAuthenticate" />

                        </form>
                    </div>
                    <div class="clearclass"></div>
                </div>
            </div>
            <div class="spaceclass"></div>

            <div class="maincontent">

                <div class="leftpanel">

                    <h2><img src="<?php echo base_url() ?>images/2do.png" width="24px" height="24px"/>&nbsp;&nbsp; Manage Customers in a better way</h2>
                    <h2><img src="<?php echo base_url() ?>images/2do.png" width="24px" height="24px"/>&nbsp;&nbsp; Track leads, prospects and close more deals</h2>
                    <h2><img src="<?php echo base_url() ?>images/2do.png" width="24px" height="24px"/>&nbsp;&nbsp;  Better integration between Sales & Customer Support </h2>
                    <h2><img src="<?php echo base_url() ?>images/2do.png" width="24px" height="24px"/>&nbsp;&nbsp; Organize and keep track of tasks, events, and calls</h2>
                    <h2><img src="<?php echo base_url() ?>images/2do.png" width="24px" height="24px"/>&nbsp;&nbsp; Set reminders and create recurring activities.</h2>
                    <br/><br/>
                    <div class="fullRow">
                        <a id="takeTour" href="">Take Tour</a>
                    </div>
                </div>

                <div class="rightpanel">
<?php echo form_open('clientmodulemanager/index') ?>
                    <input type="text" name="txtName" value="" size="20" placeholder="Full Name" /> <br/><br/><br/>
                    <input type="text" name="txtNewUserName" value="" size="20" placeholder="User Name" /> <br/><br/><br/>
                    <input type="password" name="txtNewPassword" value="" size="20" placeholder="Password" /><br/><br/><br/>
                    <select name="DDLBusinessType">
                        <option>- Select Business Type -</option>
                        <option>Private Ltd.</option>
                        <option>Proprietorship</option>
                    </select> <br/>
                    <br/><br/>
                    <div class="fullRow">
                        <input id="btnRegister" type="submit" value="Register" name="btnRegister" />
                    </div>
                    </form>               
                </div>    
                <div class="clearclass"></div>

            </div>
            <div class="clearclass"></div>




        </div>
    </body>
</html>
