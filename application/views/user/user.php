

<div id="moduleMenu">
    <a id="addUser" href="#"><img src="<?php echo base_url() ?>images/add.png" width="20" height="20" style="float: left; margin-right: 10px;" />Add User</a> &nbsp;&nbsp;
    <a id="editUser" href="#"> <img src="<?php echo base_url() ?>images/edit.png" width="20" height="20" style="float: left; margin-right: 10px;" />Edit User</a>&nbsp;
    <a id="editUser" href="#"> <img src="<?php echo base_url() ?>images/delete.png" width="20" height="20" style="float: left; margin-right: 10px;" />Delete User</a>&nbsp;

</div>
<br>
<div id="moduleContent">
    <div class="admin-container">
        <div class="ContentSpace"></div>
        <div class="head-container">
            <div class="tab">SL. no.</div>
            <div class="tab">Name</div>
            <div class="tab">Email</div>
            <div class="tab">Role</div>

        </div>
        <div class="clear_both"></div>
        <div class="list-liner" ></div>

        <?php
        //echo '<pre>'; print_r($events);
        if (isset($user_details) && !empty($user_details)) {
            $sl = 1;
            foreach ($user_details as $list) {
                $body_class = ($sl % 2 == 0) ? 'body-container-one' : 'body-container-two';
                ?>
                <div class="<?php echo $body_class; ?>">
                    <div class="body-tab"><?php echo $sl; ?></div>
                    <div class="body-tab"><?php echo $list->first_name; ?></div>
                    <div class="body-tab"><?php echo $list->email; ?></div>
                    <div class="body-tab"><?php echo $list->role; ?></div>
                    <div class="body-tab"><a href="#" onclick="javascript:editUser(<?php echo $list->id;?>)"><img src="<?php echo base_url() ?>images/edit.gif" /></a></div>
                    <div class="body-tab"><a href="#" onclick="javascript:deleteUser(<?php echo $list->id;?>)"><img src="<?php echo base_url() ?>images/delete.gif" /></a></div>

                </div>
                <div class="clear_both"></div>
                <div class="list-liner"></div>
                <?php
                $sl++;
            }
        }
        ?>
    </div>
</div>