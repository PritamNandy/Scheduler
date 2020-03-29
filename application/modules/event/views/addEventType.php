<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <section class="card">
                    <header class="card-header">
                        <?php echo lang('add')." ".lang('event')." ".lang('type'); ?>
                    </header>
                    <div class="card-body">
                        <form action="<?php echo site_url('event/addEditEventType'); ?>" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1"><?php echo lang('event') . " " . lang('name'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="event" placeholder="Enter event type name" value="<?php if(!empty($event_type->id)){
                                    echo $event_type->name;
                                    }?>" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"><?php echo lang('description'); ?></label>
                                <textarea class="form-control" id="exampleInputEmail1" name="description" placeholder="Enter description of event type" value="<?php if(!empty($event_type->id)){
                                    echo $event_type->description;
                                    }?>"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"><?php echo lang('color'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                <div id="cp2" class="input-group colorpicker-component mb-3 colorpicker-element" title="Using input value" data-colorpicker-id="2">
                                    <input type="text" class="form-control input-lg" name="color" value="<?php if(!empty($event_type->id)){
                                    echo $event_type->color;
                                    } else { ?>
                                      #328dff  
                                    <?php } ?>">
                                    <div class="input-group-append">
                                        <span class="input-group-addon btn btn-outline-secondary"><i style="background-color: <?php if(!empty($event_type->color)) {
                                          echo $event_type->color;  
                                        } else { ?>
                                            rgb(50, 141, 255)
                                        <?php } ?>;"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1"><?php echo lang('font')." ".lang('color'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                <div id="cp2" class="input-group colorpicker-component mb-3 colorpicker-element" title="Using input value" data-colorpicker-id="2">
                                    <input type="text" class="form-control input-lg" name="font_color" value="<?php if(!empty($event_type->id)){
                                    echo $event_type->font_color;
                                    } else { ?>
                                        #328dff
                                    <?php } ?>">
                                    <div class="input-group-append">
                                        <span class="input-group-addon btn btn-outline-secondary"><i style="background-color: <?php if(!empty($event_type->color)) {
                                          echo $event_type->color;  
                                        } else { ?>
                                            rgb(50, 141, 255)
                                        <?php } ?>;"></i></span>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php if(!empty($event_type->id)){
                                    echo $event_type->id;
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

