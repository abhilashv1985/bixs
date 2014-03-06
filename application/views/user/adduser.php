
<div class="admin-container">
    <?php $this->load->view('template/messageTemplate'); ?>
    <div class="ContentSpace"></div>
    <?php echo form_open('') ?>

    <div class="ContentHead">Add User </div>
    <div class="ContentDiv">
            <div class="contentLabel">Company :</div>
            <div class="contentControl"> 
                <input type="text" id="txtCompany" name="txtCompany" required />
            </div>
            <div class="contentBreak"></div>
            <div class="contentLabel">First Name :</div>
            <div class="contentControl"> 
                <input type="text" id="txtFirstName" name="txtFirstName" required />
            </div>
            <div class="contentBreak"></div>
            <div class="contentLabel">Last Name :</div>
            <div class="contentControl"> 
                <input type="text" id="txtLastName" name="txtLastName" />
            </div>
            <div class="contentBreak"></div>
            <div class="contentLabel">Email :</div>
            <div class="contentControl"> 
                <input type="text" id="txtEmail" name="txtEmail" required />
            </div>
            <div class="contentBreak"></div>
            <div class="contentLabel">Password :</div>
            <div class="contentControl"> 
                <input type="text" id="txtPassword" name="txtPassword" required />
            </div>
            <div class="contentBreak"></div>
            <div class="contentLabel">Role :</div>
            <div class="contentControl"> 
                <input type="text" id="txtRole" name="txtRole" required />
            </div>
            <div class="contentBreak"></div>
            <div class="contentLabel">Profile :</div>
            <div class="contentControl"> 
                <input type="text" id="txtProfile" name="txtProfile" />
            </div>
            <div class="contentBreak"></div>

            <div class="contentLabel">&nbsp;</div>
            <div class="contentControl">
                <input type='submit' value='Save' id="btn_AddUser" name="btn_AddUser" /></div>
            <div class="contentBreak"></div>

        <div class="contentBreak"></div>

    </div>

    <div class="ContentSpace"></div>
$string = "</div>";
echo form_close($string);