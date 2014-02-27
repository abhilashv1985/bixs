
        
<div class="admin-container">
    
    
    <div class="ContentSpace"></div>
    <div class="ContentSpace"></div>
    <div class="HeadDiv">
        
        <?php
        $module_options = array();
        $module_options['0'] = '-Select Module-';
        foreach ($module_list as $modules) {
            $module_options[$modules->id] = $modules->name;
        }
        //$even = $eventdata[0]->event_id;
        echo form_dropdown('dd_modulelist', $module_options, '', 'id="dd_modulelist" autocomplete="off"  onChange="showModuleContent(this.value);"');
        ?>

        <a class='createsectionclass' href="#" >Create Section</a>
        <a class='createfieldclass' href="#" >Create Field</a>
        <a class='createLookUpclass' href="#" >Create Lookup</a>
    </div>
    <div class="ContentSpace"></div>
    <div class="ContentHead">Edit Module <div id="moduleNamePlaceHolder"></div></div>
    <div class="ContentDiv">
        <div class="divmodulecontainer">
            <div class="contentLabel">SELECT A Module</div>
        </div>
    </div>
</div>