<style>
    @media print {
        .table .thead-dark th {
            color: #fff !important;
            background-color: #343a40 !important;
            border-color: #454d55 !important;
        }
    }
</style>

<div class="table_styles">
    <div>

    </div>
</div>
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-md-12">
                <section class="card">
                    <header class="card-header head-border">
                        <?php echo lang('add') . " User"; ?>
                    </header>
                    <div class="card-body">
                        <form action="<?php echo site_url('event/addEditUser'); ?>" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo "User Name"; ?></label><span style="color: red; font-weight: bold;">*</span>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo "Email"; ?></label><span style="color: red; font-weight: bold;">*</span>
                                        <input type="text" class="form-control" name="email" required>
                                    </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-md" type="submit"><?php echo lang('submit'); ?></button>
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

<script src="<?php echo site_url('common/js/jquery.js'); ?>"></script>
