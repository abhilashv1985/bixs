
<script type="text/javascript" src="<?php echo base_url() ?>css/ajaxtabs/ajaxtabs.js">

</script>

<div class="content-container">
    <div  class="pageLeft">
        <ul id="countrytabs" class="shadetabs">
            <li><a href="<?php echo base_url() ?>module/ShowAdminModule" rel="countrycontainer" class="selected">Module</a></li>
            <li><a href="<?php echo base_url() ?>user/showusers" rel="countrycontainer">User</a></li>
            <li><a href="<?php echo base_url() ?>contentpages/UsedStuff.htm" rel="countrycontainer">Used Stuff</a></li>
            <li><a href="<?php echo base_url() ?>contentpages/Shopping.htm" rel="countrycontainer">Shopping</a></li>
            <li><a href="<?php echo base_url() ?>contentpages/Deals.htm" rel="countrycontainer">Deals</a></li>

        </ul>
    </div>
    <div  class="pageRight">
        <div id="countrydivcontainer">

        </div>

    </div>
    <div class="clearclass"></div>
    <script type="text/javascript">

        var countries = new ddajaxtabs("countrytabs", "countrydivcontainer");
        countries.setpersist(true);
        countries.setselectedClassTarget("link");
        countries.cancelautorun();
        countries.init();

    </script>


</div>