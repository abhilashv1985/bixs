
<div class="contentBreak"></div>
<div class="contentBreak"></div>
<div class="pageContent">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="pageRow">
            <img src="<?php echo base_url() ?>images/modulelogo.png" height="30" width="30" style="float: left; padding-right: 20px;"/> <span style="float:left">Create <?php echo $modulename->name ?> <input type="hidden" name="modulename" id="modulename" value="<?php echo $modulename->name ?>" readonly="readonly"  /> </span>
            <span style="float: right; font-size: .5em">Help</span>
        </div>
        <div class="pageRow">
            <?php $this->load->view('template/messageTemplate'); ?>
        </div>
        <div class="contentBreak"></div>
        <div class="contentRow">
            <input type='file' name='importfile' />
        </div>
        <div class="contentBreak"></div>
        <div class="pageRow">
            <input type="submit" id="btnNext" value="Next"/>
            <input type="submit" id="btnSave" value="Cancel"/>
        </div>
    </form>    
</div>

</div>
<div class="contentBreak"></div>
<div class="contentBreak"></div>


