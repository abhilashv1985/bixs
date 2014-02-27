<form id="phonePanel">
    <div class="contentLabel">FOR PHONE : </div>
    <div class="contentBreak"></div>
    <div class="contentBreak"></div>

    <div class="contentLabel">Module Name</div>
    <div class="contentControl"> 
        <?php echo $modulename; ?>
    </div>
    <div class="contentControl"> 
        <input id="modulename_fld" name="modulename_fld" type="hidden" value="<?php echo $modulename ?>" />
        <input id="moduleid_fld" name="moduleid_fld" type='hidden' value='<?php echo $moduleid; ?>' />
    </div>
    <div class="contentBreak"></div>

    <div class="contentLabel">Select Section Name</div>
    <div class="contentControl">
        <?php
        $section_options = array();
        $section_options['0'] = '-Select section-';
        foreach ($section as $sec) {
            $section_options[$sec->id] = $sec->section_name;
        }
        echo form_dropdown('ddlSection', $section_options, '', 'id="ddlSection" autocomplete="off"');
        ?>

    </div>
    <div class="contentBreak"></div>

    <div class="contentLabel">Field Name : </div>
    <div class="contentControl"><input id="txtPhoneName" name="txtPhoneName" type="text" required/></div>
    <div class="contentBreak"></div>

    <div class="contentLabel">Phone length : </div>
    <div class="contentControl"><input id="txtPhonelength" name="txtPhonelength" type="text" required/></div>
    <div class="contentBreak"></div>

    <div class="contentLabel">&nbsp;</div>
    <div class="contentControl"><input id="savePhone" name="savePhone" type='submit' value='Save'/></div>
    <div class="contentBreak"></div>
</form>