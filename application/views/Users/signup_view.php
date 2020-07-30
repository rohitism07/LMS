<?php
require_once("header.php");
// echo base_url("assets/img/image.jpeg");
//echo base_url();
?>
<html>
<head>
  <title>LMS-Login & Sign Up</title>
<!-- <link rel="stylesheet" type="text/css" href="bootstrap.min.css"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" >
</script>-->
</head>
<body>
  <div class="wrap">
    <div class="container"style="margin-top:150px">
      <div class="row">
    <!-- <legend>LOG IN </legend> -->
        <div class="col-sm-8">
            <img src="<?php echo base_url(); ?>assets/img/image.jpeg" class="img-fluid" alt="Responsive image">
        </div>
      
      <div class="col-sm-4">
              <div id ="signup" class="card" >
                <div class="card-header"> SIGN UP </div>
                <div class="card-body">
             <?php echo form_open('Register'); ?>
              <fieldset>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="fname">First Name
                  <span style="color:red">*</span></label>
                  <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" value="<?php echo set_value('fname'); ?>">
                  <span class="text-danger"><?php echo form_error('fname');?></span>
                </div>
                <div class="form-group col-md-6">
                  <label for="lname">Last Name
                  <span style="color:red">*</span></label>
                  <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" value="<?php echo set_value('lname'); ?>">
                  <span class="text-danger"><?php echo form_error('lname');?></span>
                </div>
              </div>
              <div class="form-group">
                <label for="suname">User Name
                <span style="color:red">*</span>
                </label>
                <input type="text" class="form-control" id="suname" name="suname"placeholder="Enter User Name" value="<?php echo set_value('suname'); ?>">
                <span class="text-danger"><?php echo form_error('suname');?></span>
              </div>
              <div class="form-group">
                <label for="emailid">Email Id
                         <span style="color:red">*</span>
                       </label>
                        <input type="email" class="form-control" id="emailid" name="emailid"  placeholder="Enter Email Id" value="<?php echo set_value('emailid'); ?>">
                        <span class="text-danger"><?php echo form_error('emailid');?></span>
              </div>
                    <div class="form-group">
                        <label for="spasswd">Password
                         <span style="color:red">*</span>
                       </label>
                       <div class="input-group" id="show_hide_password">
                        <input type="password" class="form-control" id="spasswd" name="spasswd" placeholder="Enter Password"  aria-describedby="basic-addon2" value="<?php echo set_value('spasswd'); ?>">
                        <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2">
                              <a href=""><i class="fa fa-eye" aria-hidden="true" style="color:black"></i></a>
                              </span>
                            </div>
                            </div>
                      <span class="text-danger"><?php echo form_error('spasswd');?></span>      
                      </div>
                 <button type="submit" class="btn btn-primary">Submit</button>
                 <button type="Reset" class="btn btn-info">Reset</button>
              </fieldset>
              </form>
                <p class=""><a href="<?php echo base_url();?>Login" onclick="" style="text-decoration: none;">Already Registered</a></p>
                <!-- card body -->
              </div>
              <!-- card -->
              </div>
              <!-- Col-sm-4 -->
            </div>
            <!-- row -->
          </div>
          <!-- container -->
        </div>
        <!-- Wrap -->
      </div>
      <?php require_once("footer.php");?>
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