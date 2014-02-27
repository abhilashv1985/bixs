    <?php if (isset($load_js)): echo load_js($load_js);
        endif; ?>

<div class="content-container">
    <?php $this->load->view('template/messageTemplate'); ?>

    <div class="ContentSpace"></div>

    <?php echo form_open('module/addModuleField') ?>

    <div class="ContentHead">Add Fields to :    <?php echo $ModuleName?></div>
    <div class="ContentDiv">
        <div class="divMinorColumn">
                <div class="contentControl">
                    <input id="modulename_fld" name="modulename_fld" type="hidden" value="<?php echo $ModuleName?>" />
                    <input id="moduleid_fld" name="moduleid_fld" type="hidden" value="<?php echo $selectedModule?>" />
                </div>
                <div class="contentControl">
                    &nbsp;   
                    <input id="btnshowtext" name="btnshowtext" type="button" value="Text" />
                </div>
                <div class="datatypecontentBreak"></div>
                <div class="contentControl">
                    &nbsp;   
                    <input id="btnshowcheckbox" name="btnshowcheckbox" type="button" value="Checkbox" />
                </div>
                <div class="datatypecontentBreak"></div>
                <div class="contentControl">
                    &nbsp;   
                    <input id="btnshowinteger" name="btnshowinteger" type="button" value="Integer" />
                </div>
                <div class="datatypecontentBreak"></div>
                <div class="contentControl">
                    &nbsp;   
                    <input id="btnshowpercent" name="btnshowpercent" type="button" value="Percent" />
                </div>
                <div class="datatypecontentBreak"></div>
                <div class="contentControl">
                    &nbsp;   
                    <input id="btnshowdecimal" name="btnshowdecimal" type="button" value="Decimal" />
                </div>
                <div class="datatypecontentBreak"></div>
                <div class="contentControl">
                    &nbsp;   
                    <input id="btnshowcurrency" name="btnshowcurrency" type="button" value="Currency" />
                </div>
                <div class="datatypecontentBreak"></div>
                <div class="contentControl">
                    &nbsp;   
                    <input id="btnshowdate" name="btnshowdate" type="button" value="Date" />
                </div>
                <div class="datatypecontentBreak"></div>
                <div class="contentControl">
                    &nbsp;   
                    <input id="btnshowdatetime" name="btnshowdatetime" type="button" value="Datetime" />
                </div>
                <div class="datatypecontentBreak"></div>
                <div class="contentControl">
                    &nbsp;   
                    <input id="btnshowemail" name="btnshowemail" type="button" value="Email" />
                </div>
                <div class="datatypecontentBreak"></div>
                <div class="contentControl">
                    &nbsp;   
                    <input id="btnshowphone" name="btnshowphone" type="button" value="phone" />
                </div>
                <div class="datatypecontentBreak"></div>
                <div class="contentControl">
                    &nbsp;   
                    <input id="btnshowpicklist" name="btnshowpicklist" type="button" value="picklist" />
                </div>
                <div class="datatypecontentBreak"></div>
                <div class="contentControl">
                    &nbsp;   
                    <input id="btnshowurl" name="btnshowurl" type="button" value="url" />
                </div>
                <div class="datatypecontentBreak"></div>
                <div class="contentControl">
                    &nbsp;   
                    <input id="btnshowtextarea" name="btnshowtextarea" type="button" value="textarea" />
                </div>
                <div class="datatypecontentBreak"></div>
                <div class="contentControl">
                    &nbsp;   
                    <input id="btnshow_mspicklist" name="btnshow_mspicklist" type="button" value="multiselect pick list" />
                </div>
                <div class="datatypecontentBreak"></div>
        </div>
        <div class="divMajorColumn">
            <div class="contentLabel">SELECT A DATATYPE</div>
            
        </div>
        <div class="contentBreak"></div>
    </div>
    <div class="ContentSpace"></div>
</form>
</div>