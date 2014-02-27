
<div class="content-container">
    <div class="ContentSpace"></div>
    <?php $this->load->view('template/messageTemplate'); ?>

    <?php //echo form_open('module/addModuleSection') ?>

    <div class="ContentHead">Enter New Section</div>
    <div class="ContentDiv">
        <form id="AddModuleSelectionPanel">
        <div class="divEqualColumn">
            <div class="contentLabel">Module Name</div>
            <div class="contentControl">
                <?php echo $ModuleName ?>
            </div>
            <div class="contentBreak"></div>

            <div class="contentLabel">Section Name</div>
            <div class="contentControl"><input id="txtSectionName" name="txtSectionName" type="text"/></div>
            <div class="contentControl">
                <input id='sectioncountfld' name='sectioncountfld' type='hidden' value="<?php echo $section_count + 1 ?>"
            </div>
            <div class="contentControl">
                <input id='moduleidfld' name='moduleidfld' type='hidden' value="<?php echo $selectedModule ?>"
                </div>
                <div class="contentBreak"></div>

                <div class="contentLabel">&nbsp;</div>
                <div class="contentControl"><input id="btnsaveSection" name="btnsaveSection"  type='submit' value='Save'/></div>
                <div class="contentBreak"></div>
            </div>
        <div class="contentBreak"></div>

    </div>
    <div class="ContentSpace"></div>

</div>
</form>