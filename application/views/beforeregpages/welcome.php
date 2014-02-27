<div class="ContentSpace">&nbsp;</div>
<div class="pageContent">
    <div class="pageHeading">User Details</div>
    <?php echo form_open('','registrationForm') ?>
    
    <?php $this->load->view('common/messageTemplate'); ?>

    <div class="contentBreak"></div>
    <div class="contentRow">
        <div class="contentLabel">Name</div>
        <div class="contentControl"><input type="text" name="txtname" required value="<?php echo ($this->input->post('txtname'))?($this->input->post('txtname')):'';?>"/></div>
        <div class="contentBreak"></div>
    </div>
    
    <div class="contentBreak"></div>
     <div class="contentRow">
        <div class="contentLabel">e-mail</div>
        <div class="contentControl"><input type="email" name="txtemail" required value="<?php echo ($this->input->post('txtemail'))?($this->input->post('txtemail')):'';?>"/></div>
        <div class="contentBreak"></div>
    </div>
    
     <div class="contentBreak"></div>
     <div class="contentRow">
        <div class="contentLabel">Organization</div>
        <div class="contentControl"><input type="text" name="txtorganization" required value="<?php echo ($this->input->post('txtorganization'))?($this->input->post('txtorganization')):'';?>"/></div>
        <div class="contentBreak"></div>
    </div>
     
       <div class="contentBreak"></div>
     <div class="contentRow">
        <div class="contentLabel">Phone</div>
        <div class="contentControl"><input type="text" name="txtphone" required value="<?php echo ($this->input->post('txtphone'))?($this->input->post('txtphone')):'';?>"/></div>
        <div class="contentBreak"></div>
    </div>
       
          <div class="contentBreak"></div>
     <div class="contentRow">
         <div class="contentLabel">&nbsp;</div>
         <div class="contentControl"><input type="submit" id="btnSaveUser" name="btnSaveUser" value="Save"/></div>
        <div class="contentBreak"></div>
    </div>
</form>
</div>
<div class="ContentSpace">&nbsp;</div>