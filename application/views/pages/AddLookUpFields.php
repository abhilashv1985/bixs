<div class="ContentHead">
                          <input id='moduleid' name='moduleid' type='hidden' value="<?php echo $moduleid ?>"/>

    Create Lookup for Module <?php echo $ModuleName?>: &nbsp;&nbsp;
  Select Lookup field :  
       <?php
        $module_options = array();
        $module_options['0'] = '-Select Field-';
        foreach ($moduleFields as $fields) {
            $module_options[$fields->field_id] = $fields->field_name;
        }
        //$even = $eventdata[0]->event_id;
        echo form_dropdown('dd_modulefields', $module_options, '', 'id="dd_modulefields" autocomplete="off" ');
        ?>
 
</div>

<div class="ContentDiv">
       <div style="clear: both"></div>
  Select Module  :  
       <?php
        $module_dets = array();
        $module_dets['0'] = '-Select Module-';
        foreach ($module_list as $modules) {
            $module_dets[$modules->id] = $modules->name;
        }
        //$even = $eventdata[0]->event_id;
        echo form_dropdown('dd_modulelist', $module_dets, '', 'id="dd_modulelist" autocomplete="off"  onChange="showModuleLookUpContent(this.value);"');
        ?>
   <div class="divmoduleLookUpcontainer">
            
        </div>
   
</div>