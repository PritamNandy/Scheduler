
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Prasun Nandy Pritam">
    <meta name="linkedin" content="https://www.linkedin.com/in/pritamnandy/">
    <meta name="keyword" content="HeyDev, Prasun Nandy Pritam, Scheduler, Management, CodeIgniter 3, upwork">
    <link rel="shortcut icon" href="<?php echo site_url('uploads/schedule.png'); ?>">

    <title><?php echo $this->db->get('settings')->row()->title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo site_url('common/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo site_url('common/css/bootstrap-reset.css') ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo site_url('common/assets/font-awesome/css/font-awesome.css') ?>" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo site_url('common/css/style.css') ?>" rel="stylesheet">
    <link href="<?php echo site_url('common/css/style-responsive.css') ?>" rel="stylesheet" />


</head>

  <body class="login-body">

    <div class="container">

        <form class="form-signin" action="<?php echo site_url('auth/login'); ?>" method="post">
        <h2 class="form-signin-heading"><?php echo lang('sign_in_now'); ?></h2>
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="<?php echo lang('email'); ?>" name="identity" value="admin@admin.com" autofocus>
            <input type="password" class="form-control" name="password" placeholder="<?php echo lang('password'); ?>" value="password">
            <!--<label class="checkbox">
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> <?php echo lang('forgot_password'); ?></a>
                </span>
            </label>-->
      </form>
            <button class="btn btn-lg btn-login btn-block" type="submit"><?php echo lang('signin'); ?></button>
        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title"><?php echo lang('forgot_password'); ?></h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                          <p><?php echo lang('enter_forgot_password'); ?></p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button"><?php echo lang('cancel'); ?></button>
                          <button class="btn btn-success" type="button"><?php echo lang('submit'); ?></button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->


    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo site_url('common/js/jquery.js') ?>"></script>
    <script src="<?php echo site_url('common/js/bootstrap.bundle.min.js') ?>"></script>


  </body>
</html>