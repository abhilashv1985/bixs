


<div class="admin-container">
    <?php $this->load->view('template/messageTemplate'); ?>

 
    <div class="ContentSpace"></div>

    <?php echo form_open('module/addModule') ?>

    <div class="ContentHead">Add Module </div>
    <div class="ContentDiv">
            <div class="contentLabel">Module Name :</div>
            <div class="contentControl"> 
                <input type="text" id="txtModuleName" name="txtModuleName" />
            </div>
            <div class="contentBreak"></div>

            <div class="contentLabel">Description :</div>
            <div class="contentControl"> 
                <textarea id="txtDescription" name="txtDescription" rows="5" cols="40"></textarea>
            </div>
            <div class="contentBreak"></div>

            <div class="contentLabel">&nbsp;</div>
            <div class="contentControl">
                <input type='submit' value='Save'/></div>
            <div class="contentBreak"></div>

        <div class="contentBreak"></div>

    </div>

    <div class="ContentSpace"></div>
</form>
</div>