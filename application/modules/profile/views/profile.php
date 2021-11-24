<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="card">
                    <header class="card-header">
                        <?php echo lang('profile')." ".lang('settings'); ?>
                    </header>
                    <div class="card-body">
                        <form action="<?php echo site_url('profile/editProfile'); ?>" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1"><?php echo lang('name'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter your name" value="<?php if(!empty($profile->id)){
                                    echo $profile->username;
                                    }?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"><?php echo lang('email'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter your email" value="<?php if(!empty($profile->id)){
                                    echo $profile->email;
                                    }?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1"><?php echo lang('password'); ?></label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="password" placeholder="*****">
                            </div>
                            <input type="hidden" name="id" value="<?php if(!empty($profile->id)){
                                    echo $profile->id;
                            }?>">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-2"><?php echo lang('submit'); ?></button>
                            </div>
                    </div>
                    </form>

            </div>
    </section>

</div>
</div>

<!-- page end-->
</section>
</section>
<!--main content end-->

