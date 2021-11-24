<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-md-12">
                <section class="card">
                    <header class="card-header head-border">
                        <?php echo "Default Report Date"; ?>
                    </header>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="<?php echo site_url('report/addDefaultDate'); ?>" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date Range</label>
                                        <input type="text" class="form-control" name="daterange" value="<?php if(!empty($daterange->daterange)) {
                                            echo $daterange->daterange;
                                        } ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success btn-md" type="submit"><?php echo lang('submit'); ?></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- page end-->
    </section>
</section>
<!--main content end-->
