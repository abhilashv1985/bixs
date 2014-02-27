  <script>
    $(function() {
    $( "div.sectionDiv" ).sortable({
      connectWith: ".sectionDiv"
    });
 
   $( "div.sectionDiv" ).sortable({
        cancel: ".SectionHead",
        stop: function (event, ui) {
            var data = $(this).sortable('serialize');
            $.ajax({
                data: data,
                type: 'POST',
                url: base_url+'module/updateFieldPosition'
            });
        }      
    });
 
    //$( ".SectionHead, .sectionContainer" ).disableSelection();
  });
  </script>
  <form method="post" action="">
    <?php
    $sectionid = 0;
    //echo '<pre>'; print_r($moduleContent); die;
    if($moduleContent){
        $count = 1;
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
                        <div class="fieldContent" id="item-<?php echo $count; ?>">
                           <?php echo $content->field_name;?>       
                            <input type="hidden" value="<?php echo $content->id;?>" name="item-<?php echo $count; ?>"/>
                       </div>
                <?php
                } else{
                    ?>
                    <div class="fieldContent" id="item-<?php echo $count; ?>">
                        <?php echo $content->field_name;?>       
                        <input type="hidden" value="<?php echo $content->id;?>" name="item-<?php echo $count; ?>"/>
                    </div>
                <?php
                }
                ?>
            <?php
                $sectionid = $content->id;
                ++$count;
            }
        
        ?>
                        <div style="clear: both"></div>
                    </div>
            <br/><br/>
            <div class="action-container">
                <input type="submit" value="Submit" />
            </div>
            <?php
                }
        ?>
</form>