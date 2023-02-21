<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="card">
                    <header class="card-header">
                        <?php echo lang('add')." ".lang('location'); ?>
                    </header>
                    <div class="card-body">
                        <form action="<?php echo site_url('event/addEditLocation'); ?>" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1"><?php echo lang('location') . " " . lang('name'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="location" placeholder="Enter location" value="<?php if(!empty($location->id)){
                                    echo $location->name;
                                    }?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"><?php echo lang('description'); ?></label>
                                <textarea class="form-control" id="exampleInputEmail1" name="description" placeholder="Enter description of location" value="<?php if(!empty($location->id)){
                                    echo $location->description;
                                }?>"></textarea>
                            </div>
                            <input type="hidden" name="id" value="<?php if(!empty($location->id)){
                                    echo $location->id;
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

