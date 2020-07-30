<?php
require_once("header.php");
// echo base_url("assets/img/image.jpeg");
//echo base_url();
?>
<html>
<head>
  <title>LMS-Login & Sign Up</title>
<!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" > -->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" >
</script>-->
</head>
<body>
  <div class="wrap">
    <?php
    if($this->session->flashdata('message'))
    {
       echo '
       <div class="alert alert-success">
       '.$this->session->flashdata("message").'</div>
       '; 
    }

    ?>
  <div class="container"style="margin-top:150px">
  <div class="row">
    <!-- <legend>LOG IN </legend> -->
  <div class="col-sm-8">
        <img src="<?php echo base_url(); ?>assets/img/image.jpeg" class="img-fluid" alt="Responsive image">
  </div>
    <div class="col-sm-4">
                <div id ="login" class="card">
                  <div class="card-header">Login</div>
                  <!-- <p class="">Or <a href="#" onclick="showsignup()">Create an account.</a></p> -->
                  <div class="card-body">
                  <?php echo form_open('Login'); ?>

                    <!-- <form method="POST" action=""> -->
                    <fieldset>
                      <!-- <legend class="col-form-label">LOG IN</legend> -->


                      <div class="form-group">
                        <label for="uname">Username 
                          <span style="color:red">*</span>
                        </label>
                        <input type="text" class="form-control" id="uname" name="uname"  placeholder="Enter Username"  value="<?php echo set_value('uname'); ?>" >
                        <span class="text-danger"><?php echo form_error('uname');?></span>
                      </div>
                       <div class="form-group">
                        <label for="passwd">Password
                         <span style="color:red">*</span>
                       </label>
                       <div class="input-group" id="show_hide_password">
                        <input type="password" class="form-control" id="passwd" name="passwd" placeholder="Enter Password"  aria-describedby="basic-addon2" value="<?php echo set_value('passwd'); ?>">
                        <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2">
                              <a href=""><i class="fa fa-eye" aria-hidden="true" style="color:black"></i></a>
                              </span>
                            </div>
                            </div>
                      <span class="text-danger"><?php echo form_error('passwd');?></span>      
                      </div>
                      <button type="submit" class="btn btn-primary" name="lsubmit">Submit</button>
                      <button type="reset" class="btn btn-info">Reset</button>
                    </fieldset>
                  </form>
                <div class=row>
                  <div class="col-md-auto">
                    <a href="<?php echo base_url();?>Register" onclick="" style="text-decoration: none;">Sign Up</a>
                  </div>
                  <div class="col-md-auto">
                   <a href="<?php echo base_url();?>Register" onclick="" style="text-decoration: none;">Forgot Password</a>
                  </div>
                </div>
              </div>
              </div>
    </div>
</div>
  </div>
</div>
<!-- </div> -->
 <?php require_once("footer.php") ?>
</body>
<script>
$(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
</script>
</html>
