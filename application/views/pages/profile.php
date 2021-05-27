<div class="signup-form">
    <form action="<?php base_url(); ?>/user/dashboard/updateProfile" method="post">
        <h2>Update</h2>
        <hr>
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Full Name" required="required" value="<?php echo $result->name?>"  >
            <?php  echo form_error('name') ?>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required" value="<?php echo $result->email;?>" >
            <?php  echo form_error('email') ?>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="mobile" placeholder="Mobile" required="required" value="<?php echo $result->mobile;?>" >
            <?php  echo form_error('mobile') ?>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Update</button>
        </div>
    </form>
</div>