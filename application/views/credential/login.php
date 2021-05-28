<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
                    $success = $this->session->tempdata('success');
                    if($success != ""){
                ?>
            <div class="alert alert-success"> <?php echo $success; ?> </div>
            <?php
                    }
                    ?>
            <?php
                        $failure = $this->session->tempdata('failure');
                        if($failure != "") {
                    ?>
            <div class="alert alert-success"> <?php echo $failure ; ?> </div>
            <?php 

                }
                ?>
        </div>
    </div>
</div>

<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-1" style="margin-left:28%">
            <h3>Login</h3>
            <form action="<?php base_url(); ?>/user/login/submit" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Email *" value="" name="email" />
                    <?php  echo form_error('email') ?>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Your Password *" value=""
                        name="password" />
                    <?php  echo form_error('password') ?>
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>
                <div class="form-group">
                    <a href="#" class="ForgetPwd">Forget Password?</a>
                </div>
            </form>
        </div>
    </div>