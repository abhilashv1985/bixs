<form id="currencyPanel">
<div class="contentLabel">FOR CURRENCY : </div>
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
<div class="contentControl"><input id="txtCurrencyName" name="txtCurrencyName" type="text" required/></div>
<div class="contentBreak"></div>

<div class="contentLabel">Decimal Length : </div>
<div class="contentControl"><input id="txtCurrencyLength" name="txtCurrencyLength" type="text" required/></div>
<div class="contentBreak"></div>

<div class="contentLabel">Decimal Upto : </div>
<div class="contentControl"><input id="txtCurrencyDecimalUpto" name="txtCurrencyDecimalUpto" type="text" required/></div>
<div class="contentBreak"></div>

<div class="contentLabel">&nbsp;</div>
<div class="contentControl"><input id="saveCurrency" name="saveCurrency" type='submit' value='Save'/></div>
<div class="contentBreak"></div>
</form>