<!DOCTYPE html>
<html>

    
<!-- Mirrored from themes.grozav.com/mint/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 10 Feb 2014 12:08:31 GMT -->
<head>

        <title>Travly - Admin Panel</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">

        <meta name="description" content="Mint by Grozav is a flat design approach towards Admin Dashboards. Intuitive, cutting-edge, clean and easy to use and customize, as every Application UI should be. ">

        <link rel="author" href="http://grozav.com/"/>

        <!-- Core CSS - Include with every page -->
        <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');?>" rel="stylesheet">

        <!-- Mint Admin CSS - Include with every page -->
        <link href="<?php echo base_url('assets/css/mint-admin.css');?>" rel="stylesheet">

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <?php 
                                  echo form_open('Welcome/loginVerification',array('role'=>'form'));
                                  $username = array('class'=>'form-control','placeholder'=>'E-mail','name'=>'email','type'=>'type');
                                  $password = array('class'=>'form-control','placeholder'=>'Password','name'=>'password','type'=>'password') ;
                            ?>
                            <!--<form role="form">-->
                                <fieldset>
                                    <div class="form-group">
                                        
                                        <!--<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                    -->
                                    <?php echo form_input($username);?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_input($password);?>
                                    
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <?php echo form_submit(array('class'=>'btn btn-lg btn-primary btn-block','value'=>'Login','type'=>'submit')); ?>
                                   </fieldset>
                            <?php echo form_close(); ?>
                            <!--</form>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Core Scripts - Include with every page -->
        <script src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/js/plugins/metisMenu/jquery.metisMenu.js');?>"></script>

        <!-- Mint Admin Scripts - Include with every page -->
        <script src="<?php echo base_url('assets/js/mint-admin.js');?>"></script>

    </body>


<!-- Mirrored from themes.grozav.com/mint/login.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 10 Feb 2014 12:08:31 GMT -->
</html>
