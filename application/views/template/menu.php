

  <?php if (isset($load_js)): echo load_js($load_js);
        endif; ?>
   <?php if (isset($load_css)): echo load_css($load_css);
        endif;
        ?>


	<div id="content">
		<div class="menu">
			<ul>
				
				<li>
                                    <a class="left" href="<?php echo base_url() ?>clientmodulemanager">Home</a>
				</li>
                            <li><a class="left" href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/1">Leads</a>
				</li>
                            <li><a class="left" href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/2">Accounts</a>
				</li>
				<li><a class="left dropdown" href="#">+<span class="arrow"></span></a>
				<ul class="width-2">
					<li><a href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/3">Contacts</a></li>
					<li><a href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/4">Potentials</a></li>
					<li><a href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/5">Campaign</a></li>
                                        <li><a href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/6">Add Task</a></li>
                                        <li><a href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/">Marketing</a></li>
					<li><a href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/">Reports</a></li>
					<li><a href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/">Dashboards</a></li>
					<li><a href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/">Activities</a></li>
					<li><a href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/8">Add Solution</a></li>
                                        <li><a href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/">Add Call Log</a></li>
					<li><a href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/12">Add Price Book</a></li>
                                        <li><a href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/9">Add Product</a></li>
					<li><a href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/10">Add Case</a></li>
                                        <li><a href="<?php echo base_url() ?>clientmodulemanager/showModuleForm/11">Add Vendor</a></li>
				</ul>
				</li>
				
			
				
			</ul>
                      <div class="search"><a><input type="text" value="Search" 
onclick="(this.value=='Search' ? this.value = '' : null)" /></a></div>
		</div>
		<!--end  menu-->
              
	</div>
<div class="clear"></div>