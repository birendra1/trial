<h3>Login success</h3>
<?php if ($userType == 0 ) { ?> 
<h4>Click here to <a href="<?php  base_url() ?>/user/dashboard ">Dashboard</a></h4>
<?php } else if ($userType == 1){ ?>
<h4>Click here to <a href="<?php base_url() ?>/admin/dashboard">Dashboard</a></h4>
<?php }  ?>