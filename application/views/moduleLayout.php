
<div class="contentBreak"></div>
<div class="contentBreak"></div>
<div class="pageContent">
        <?php echo form_open('') ?>
    <div class="pageRow">
        <img src="<?php echo base_url() ?>images/modulelogo.png" height="30" width="30" style="float: left; padding-right: 20px;"/> <span style="float:left">Create <?php echo $modulename->name ?> <input type="hidden" name="modulename" id="modulename" value="<?php echo $modulename->name ?>" readonly="readonly"  /> </span>
        <span style="float: right; font-size: .5em">Help</span>
    </div>
    <div class="pageRow">
        <?php $this->load->view('template/messageTemplate'); ?>
    </div>
    <div class="contentBreak"></div>
    <div class="pageRow">
        <input type="submit" id="btnSave" value="Save"/>
        <input type="submit" id="btnSave" value="Save & New"/>
        <input type="submit" id="btnSave" value="Cancel"/>
    </div>

    <?php
    $sectionid = 0;
    foreach ($moduleContent as $content) {
        ?> 
        <?php if ($sectionid != 0 && $sectionid != $content->id) { ?>
            <div class="clear"></div>
            <br/>
        <?php } ?>
        <?php if ($sectionid != $content->id) { ?>
            <div class="sectionHeading"><?php echo $content->section_name;
            ?>       
            </div>     

            <br/> 
            <div class="contentRow">
                <div class="contentLabel"><?php echo $content->field_name; ?></div>
                <div class="contentControl">
                    <?php 
                        //echo $content->datatype;
                        $field = $content->field_html;
                        $newfield = $content->field_html;
                        if($content->datatype == 7){ 
                        //checking for datatype DATE, to append class for datepicker
                         $newfield = str_replace("/>"," class=date />",$field);                               
                        }
                    ?>
                    <?php echo $newfield; ?>       
                </div>
            </div>
            <?php
        } else {
            ?>
            <div class="contentRow">
                <div class="contentLabel"><?php echo $content->field_name; ?></div>
                <div class="contentControl">
                    <?php 
                        //echo $content->datatype;
                        $field = $content->field_html;
                        $newfield = $content->field_html;
                        if($content->datatype == 7){ 
                        //checking for datatype DATE, to append class for datepicker
                         $newfield = str_replace("/>"," class=date />",$field);                               
                        }
                    ?>
                    <?php echo $newfield; ?>       
                </div>
            </div>
            <?php
        }
        ?>

        <?php
        $sectionid = $content->id;
    }
    ?>

    <div class="contentBreak"></div>
    <div class="contentBreak"></div>

    <div class="pageRow">
        <input type="submit" id="btnSave" value="Save"/>
        <input type="submit" id="btnSave" value="Save & New"/>
        <input type="submit" id="btnSave" value="Cancel"/>
    </div>
</form>
</div>
<div class="contentBreak"></div>
<div class="contentBreak"></div>


