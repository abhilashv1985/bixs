


<div class="admin-container">
    <?php $this->load->view('template/messageTemplate'); ?>

    <div class="ContentSpace"></div>

    <?php echo form_open('') ?>

    <div class="ContentHead">Edit User </div>
    <input type="hidden" id="txtuserid" name="txtuserid" value="<?php echo @$user->id ?>" required />
    <div class="ContentDiv">
            <div class="contentLabel">Company :</div>
            <div class="contentControl">
                <input type="text" id="txtCompany" name="txtCompany" value="<?php echo @$user->organization ?>" required />
            </div>
            <div class="contentBreak"></div>
            <div class="contentLabel">First Name :</div>
            <div class="contentControl"> 
                <input type="text" id="txtFirstName" name="txtFirstName" value="<?php echo @$user->first_name ?>" required />
            </div>
            <div class="contentBreak"></div>
            <div class="contentLabel">Last Name :</div>
            <div class="contentControl"> 
                <input type="text" id="txtLastName" name="txtLastName" value="<?php echo @$user->last_name ?>" />
            </div>
            <div class="contentBreak"></div>
            <div class="contentLabel">Email :</div>
            <div class="contentControl"> 
                <input type="text" id="txtEmail" name="txtEmail" value="<?php echo @$user->email ?>" required />
            </div>
            <div class="contentBreak"></div>
            <div class="contentLabel">Role :</div>
            <div class="contentControl"> 
                <input type="text" id="txtRole" name="txtRole" value="<?php echo @$user->role ?>" required />
            </div>
            <div class="contentBreak"></div>
            <div class="contentLabel">Profile :</div>
            <div class="contentControl"> 
                <input type="text" id="txtProfile" name="txtProfile" value="<?php echo @$user->profile ?>" />
            </div>
            <div class="contentBreak"></div>

            <div class="contentLabel">&nbsp;</div>
            <div class="contentControl">
                <input type='button' value='Save' id="btn_editUser" name="btn_editUser" /></div>
            <div class="contentBreak"></div>

        <div class="contentBreak"></div>

    </div>

    <div class="ContentSpace"></div>
</form>
</div>