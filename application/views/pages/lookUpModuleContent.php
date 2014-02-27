  <form id="LookUpPanel" method="post" action=""> 
       <input id='moduledata' name='moduledata' type='hidden' value="<?php echo $parentModuleId ?>-<?php echo $parentModuleFieldId ?>-<?php echo $lookUpModuleid ?>"/>

<?php
    $sectionid = 0;
    //echo '<pre>'; print_r($moduleContent); die;
    if($moduleContent){
        foreach ($moduleContent as $content) {
        ?> 
            <?php if($sectionid != 0 && $sectionid != $content->id){ ?>
                   <div style="clear: both"></div>
            </div><br/>
            <?php }?>
            <?php if($sectionid != $content->id){ ?>
                    <div class="SectionHead"><?php echo $content->section_name;
                ?>       
                    </div>     
                    <div class="sectionDiv">  
                        <div class="fieldContent">
                            <input type="checkbox" id="<?php echo $content->meta_fieldid;?>" name="<?php echo $content->meta_fieldid;?>" value="<?php echo $content->meta_fieldid;?>"><?php echo $content->field_name;?> </input>
                       </div>
                <?php
                } else{
                    ?>
                    <div class="fieldContent">
                            <input type="checkbox" id="<?php echo $content->meta_fieldid;?>" name="<?php echo $content->meta_fieldid;?>" value="<?php echo $content->meta_fieldid;?>"><?php echo $content->field_name;?> </input>
                    </div>
                <?php
                }
                ?>
            <?php
                $sectionid = $content->id;
            }
        }
        ?>
                                   <div style="clear: both"></div>
                    </div>
            <br/><br/>
            <div class="action-container">
                <input id="SaveLookUpFields" name="SaveLookUpFields" type="submit" value="Save" />
            </div>
  </form>