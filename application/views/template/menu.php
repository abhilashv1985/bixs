

  <?php if (isset($load_js)): echo load_js($load_js);
        endif; ?>
   <?php if (isset($load_css)): echo load_css($load_css);
        endif;
        ?>
<div class="nav">
    	<ul>
            <li><a href="<?php echo base_url() ?>clientmodulemanager"><img src="<?php echo base_url() ?>images/home.png" width="20" height="20" style="padding: 0px; margin: 0px;"></img></a></li>
                <li><a href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/1">Leads</a></li>
        	<li><a href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/2">Accounts</a></li>
                <li><a href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/7">Events</a></li>

        	
        </ul>
   <div class="search"><a><input type="text" value="Search" onclick="(this.value=='Search' ? this.value = '' : null)" /></a></div>
  
   
<script type="text/javascript">
	$(document).ready(function() {
	$(".mySelect3").styleSelect({styleClass: "selectFruits",optionsWidth: 1,speed: 'fast'});
	});
</script>
 <div class="select">
		<select name="fruits" class="mySelect3" >
				<option  value="">Quick Menu</option>
				<option  value="Contacts">Contacts</option>
				<option  value="Potentials">Potentials</option>
				<option  value="Marketing">Marketing</option>
				<option  value="Reports">Reports</option>
				<option  value="Dashboards">Dashboards</option>
				<option  value="Activities">Activities</option>
				<option  value="Add Task">Add Task</option>
				<option  value="Add Solution">Add Solution</option>
				<option  value="Add Call Log">Add Call Log</option>
				<option  value="Add PriceBook">Add PriceBook</option>
				<option  value="Add Product">Add Product</option>
				<option  value="Add Case">Add Case</option>
                                <option  value="Add Vendor">Add Vendor</option>
		</select>
	</div>
  
  </div>

<div class="clear"></div>