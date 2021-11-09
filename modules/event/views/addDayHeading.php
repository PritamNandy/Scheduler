<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="card">
                    <header class="card-header">
                        <?php echo lang('add')." ".lang('day')." ".lang('heading'); ?>
                    </header>
                    <div class="card-body">
                        <form action="<?php echo site_url('event/addEditDayHeading'); ?>" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1"><?php echo lang('day') . " " . lang('heading') . " " . lang('name'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="day_heading" placeholder="Enter day heading" value="<?php if(!empty($day_heading->id)){
                                    echo $day_heading->name;
                                    }?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"><?php echo lang('description'); ?></label>
                                <textarea class="form-control" id="exampleInputEmail1" name="description" placeholder="Enter description of day heading" value="<?php if(!empty($day_heading->id)){
                                    echo $day_heading->description;
                                }?>"></textarea>
                            </div>
                            <input type="hidden" name="id" value="<?php if(!empty($day_heading->id)){
                                    echo $day_heading->id;
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

