<?php if($result->userType == '1') { 
        echo $result->userType;
    ?>
<!-- Contents -->

<div id="mySidebar" class="sidebar">
<h6>No sidebar found</h6>
</div>

<?php 
 }
 else if($result->userType == '0'){
     echo $result->userType;
     ?>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="<?php base_url()?>/user/dashboard" >Dashboard</a>
  <a href="<?php base_url()?>/user/dashboard/id" >Profile</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
  <a href="<?php base_url()?>/user/dashboard/logout">Logout</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰ Open Sidebar</button>  
</div>
<?php
 }
 ?>