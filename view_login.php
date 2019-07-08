<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!--  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/viewlogin_style.css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
   
  <title> SIM PENGASUHAN STPN | Login</title>
<body>
<div class="container-fluid">

    <div class="row">
         <!-- form login -->
         
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-lg-push-9" style="left:5%">
         <div> 
         <img class="rounded-float-left img-responsive" style="width:100px;height:100px" src="<?php echo base_url(''); ?>assets/img/logo.png" >
         </div>
         <div class="col-md-8 col-sm-8">
               <div class="login-form">

                <?php if ($this->session->flashdata('error_status')): ?>
                  <div class="alert alert-danger" style="padding:4px">
                    <span>Gagal Login, cek identitas anda kembali </span>
                  </div>
                <?php endif; ?>

                  <form style="margin-top: 30%" action="<?php echo base_url(); ?>login/login_validation"  method="post">
                     <div class="form-group">
                        <label>Username</label>
                        <input style="border-bottom: 2px solid black" type="text" name="username" class="form-control" placeholder="Username">
                        <span class="text-danger"><?php echo form_error('username'); ?></span>
                     </div>
                     <div class="form-group">
                        <label>Password</label>
                        <input style="border-bottom: 2px solid black" type="password" name="password" class="form-control" placeholder="Password">
                        <span class="text-danger"><?php echo form_error('password'); ?></span>                     
                     </div>
                     <div class="form-group">
                        <h6 class="text-danger"> <?php echo $this->session->flashdata("error"); ?> </h6><br>
                        <input style="background-color: #000;color: #fff" type="submit" name="insert" value="Login" class="btn btn-black"/>
                     </div>                  
                  </form>
               </div>
            </div> 
         </div>
         <!-- gmbr -->
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
          <img class="pull-right img-responsive" style="max-height:100%;-webkit-filter: grayscale(70%);  Safari 6.0 - 9.0 filter: grayscale(70%);" src="<?php echo base_url(''); ?>assets/img/STPN2.jpg" >
      </div> 
    </div>
 

</div>

<!-- <footer id="sticky-footer" class="py-1 bg-danger">
    <div class="container text-center">
    <center><strong>Copyright &copy; 2019 <a href="http://stpn.ac.id/" class="text-dark">STPN</a>.</strong> All rights
    reserved.</center>
    </div>
  </footer> -->

      <!-- <div class="footer" style="height: 34px;position: fixed;
         z-index: 1;
         left: 0;
         bottom: 0;
         width: 100%;
         color: white;
         text-align: center;
          background-color:#ba2b2b;
         opacity: 0.9;
        filter: alpha(opacity=70);">
          <p style="font-size: 12px">Sistem Informasi Pengasuhan <br> Sekolah Tinggi Pertanahan Nasional </p>
      </div> -->
</div>


  
</body>
