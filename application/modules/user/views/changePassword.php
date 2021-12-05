
<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="<?php echo base_url(); ?>" target="_blank">
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

            <form class="form-signin" action="<?php echo site_url('user/updatePassword'); ?>" method="post">
                <h2 class="form-signin-heading">Change Password</h2>
                <div class="login-wrap">
                    <input type="password" class="form-control" placeholder="<?php echo lang('password'); ?>" name="password" autofocus required>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
            </form>
            <button class="btn btn-lg btn-login btn-block" type="submit">Change Password</button>
        </div>


    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo site_url('common/js/jquery.js') ?>"></script>
    <script src="<?php echo site_url('common/js/bootstrap.bundle.min.js') ?>"></script>


</body>
</html>
