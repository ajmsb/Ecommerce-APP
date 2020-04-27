<?php $this->load->view('includes/header');?>
<?php $this->load->view('includes/navigation');?>
<div class="container">
    <div class="row m-4">
        <div class="col-md-6 mx-auto m-4">
            <h4 class="card-heading text-default">Log In</h4>
            <p class="card-heading text-default text-muted">Sing into your account to sell your stuff!</p>
            <!-- Login test on login page  -->
            <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
            <?php if($this->session->flashdata('fail'))
                {
                    echo '<div class="alert alert-danger">'.$this->session->flashdata('fail').'</div>';
                }
            ?>
                <!-- Login form  -->
                <form action="<?php echo site_url('user/login')?>" method="post">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email address" type="email">
                    </div> <!-- form-group// -->
                   
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name="password" class="form-control" placeholder="Password" type="password">
                    </div> <!-- form-group// -->                                      
                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary btn-block"> Sign in  </button>
                    </div> <!-- form-group// -->      
                    <p class="text-center">Forgot password? ? <a href="">Let us know</a> </p>                                                                 
                </form>
            </div>
        </div>
    </div>
</div>    
<?php $this->load->view('includes/footer');?>

