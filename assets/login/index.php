<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Form</title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
          <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
          <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet" />
           <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">

     
           <style>
        .err {
            color: red;
             padding: 5px;
        }
    </style>
  
    </head>
    <body class="bg-login">
        
    <div class="wrapper">

        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">

            <div class="container-fluid">

                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">

                    <div class="col mx-auto">

                      

                        <div class="card login">

                            <div class="card-body">
                                  <div class="border p-4 rounded">
                                 <div class="mb-2 text-center">

                            <img src="https://cdn-icons-png.flaticon.com/512/295/295128.png" width="180" alt="" />

                        </div>

                              

                                    <div class="text-center">

                                        <h3 class="">Sign in</h3>

                                    

                                    </div>

                

                                    <div class="login-separater text-center mb-2"> <small>OR SIGN IN WITH EMAIL</small>

                                        <hr />

                                    </div>

                                    <div class="form-body">

                                        <form class="row g-3" id="loginForm" action="<?= site_url('login') ?>" method="post">
                                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
           value="<?= $this->security->get_csrf_hash(); ?>">
            <?= isset($failed) && !empty($failed) ? "<p class='err'>{$failed}</p>" : ""; ?>
    <?= $this->session->flashdata('success'); ?>
                                            <div class="col-12">

                                                <label for="username" class="form-label">User Name</label>
                                                 <input type="text" id="username" class="form-control" placeholder="Enter the username" value="<?= set_value('username'); ?>"
               name="username" autocomplete="off" autofocus/>
        <?= form_error('username', '<div class="err">', '</div>'); ?>
                                            </div>

                                            <div class="col-12">

                                                <label for="inputChoosePassword" class="form-label">Enter

                                                    Password</label>

                                                

                                                    <input type="password" class="form-control"

                                                        id="inputChoosePassword" name="password" autocomplete="off" value="<?= set_value('password'); ?>"

                                                        placeholder="Enter Password"/> 
                                                          

  <?= form_error('password', '<div class="err">', '</div>'); ?>
                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-check form-switch">

                                                    <input class="form-check-input" type="checkbox"

                                                        id="flexSwitchCheckChecked" checked>

                                                    <label class="form-check-label"

                                                        for="flexSwitchCheckChecked">Remember Me</label>

                                                </div>

                                            </div>

                                            <div class="col-md-6 text-end"> 

                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <input type="submit" class="btn btn-primary" value="Sign in" />

                                                </div>

                                            </div>

                                        </form>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!--end row-->

            </div>

        </div>

    </div>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<?php
$this->load->view('alert');
?>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
