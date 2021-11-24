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
                        <?php echo lang('add') . " " . lang('day_info'); ?>
                    </header>
                    <div class="card-body">
                        <form action="<?php echo site_url('dayinfo/addDayInfo'); ?>" method="post">
                            <div class="form-group">
                                <div>
                                    <label for="exampleInputEmail1"><?php echo lang('date'); ?> <span style="color: red; font-weight: bold;">*</span></label>
                                    <button class="btn btn-success backwardDate" style="padding: 5px !important; font-size: 10px !important;"><i class="fa fa-arrow-left"></i></button>
                                    <button class="btn btn-success forwardDate" style="padding: 5px !important; font-size: 10px !important;"><i class="fa fa-arrow-right"></i></button>
                                </div>
                                <div class="">
                                    <div class="input-group date dpYears" data-date-viewmode="years" data-date-format="mm/dd/yyyy" data-date="<?php echo date('m/d/Y'); ?>">
                                        <input type="text" name="date" class="form-control eventDate" value="<?php
                                        if (!empty($input_date->date)) {
                                            echo date('m/d/Y', $input_date->date);
                                        } else if (isset($initial_date->daterange) && !empty($initial_date->daterange)) {
                                            $initialDate = explode(" - ", $initial_date->daterange);
                                            echo $initialDate[0];
                                        } else {
                                            echo date('m/d/Y');
                                        }
                                        ?>" aria-label="Right Icon" aria-describedby="dp-ig" required>
                                        <div class="input-group-append">
                                            <button id="dp-ig" class="btn btn-outline-secondary" type="button"><i class="fa fa-calendar f14"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=""><?php echo lang('day') . " " . lang('heading'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                <div class="row">
                                    <div class="col-md-6">
                                        <select class="js-example-basic-multiple selectMultiple" name="day_heading[]" multiple="multiple">
                                            <?php foreach ($day_headings as $day_heading) {
                                                if ($day_heading->status == 1) {
                                                    ?>
                                                    <option value="<?php echo $day_heading->id; ?>"><?php echo $day_heading->name; ?></option>
    <?php }
} ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="day_heading_text" placeholder="Add new day heading">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="">Sunrise</label>
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control sunrise timepicker-default rounded mr-3" name="day_time[0]" aria-label="Right Icon" aria-describedby="basic-addon15">
                                                <span class="input-group-addon btn btn-primary" id="basic-addon15"><i class="fa fa-clock-o f14"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="">Chatzos</label>
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control chatzos timepicker-default rounded mr-3" name="day_time[1]" aria-label="Right Icon" aria-describedby="basic-addon15">
                                                <span class="input-group-addon btn btn-primary" id="basic-addon15"><i class="fa fa-clock-o f14"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="">Kriyas Shema 1</label>
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control kriyas_shema_1 timepicker-default rounded mr-3" name="day_time[2]" aria-label="Right Icon" aria-describedby="basic-addon15">
                                                <span class="input-group-addon btn btn-primary" id="basic-addon15"><i class="fa fa-clock-o f14"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="">Kriyas Shema 2</label>
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control kriyas_shema_2 timepicker-default rounded mr-3" name="day_time[3]" aria-label="Right Icon" aria-describedby="basic-addon15">
                                                <span class="input-group-addon btn btn-primary" id="basic-addon15"><i class="fa fa-clock-o f14"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="">Shkiya 1</label>
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control shkiya_1 timepicker-default rounded mr-3" name="day_time[4]" aria-label="Right Icon" aria-describedby="basic-addon15">
                                                <span class="input-group-addon btn btn-primary" id="basic-addon15"><i class="fa fa-clock-o f14"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="">Shkiya 2</label>
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control shkiya_2 timepicker-default rounded mr-3" name="day_time[5]" aria-label="Right Icon" aria-describedby="basic-addon15" value="00:00 AM">
                                                <span class="input-group-addon btn btn-primary" id="basic-addon15"><i class="fa fa-clock-o f14"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" id="dayInfoId">
                                    <div class="col-md-12">
                                        <button class="btn btn-success" type="submit">Submit</button>
                                    </div>
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

<script src="<?php echo site_url('common/js/jquery.js'); ?>"></script>
<script>
    $(function () {
        var date = $('.eventDate').val();
        console.log(date);
        $.ajax({
            url: "<?php echo base_url(); ?>event/getDayScheduleByJson?date=" + date,
            method: 'GET',
            data: '',
            dataType: "json",
            success: function (response) {
                console.log(response);
                $('.sunrise').val(response.dayTime.sunrise);
                $('.chatzos').val(response.dayTime.chatzos);
                $('.kriyas_shema_1').val(response.dayTime.kriyas_shema_1);
                $('.kriyas_shema_2').val(response.dayTime.kriyas_shema_2);
                $('.shkiya_1').val(response.dayTime.shkiya_1);
                $('.shkiya_2').val(response.dayTime.shkiya_2);
                $('#dayInfoId').val(response.dayTime.id);
                if (response.dayTime.day_heading === "") {
                    $('.selectMultiple').val("").trigger('change');
                } else {
                    var dhv = response.dayTime.day_heading.split(','); // Select the option with a value of '1'
                    $('.selectMultiple').val(dhv).trigger('change'); // Notify any JS components that the value changed
                }
            }
        });

        $(document).on('change', '.eventDate', function () {
            var date = $('.eventDate').val();
            console.log(date);
            $.ajax({
                url: "<?php echo base_url(); ?>event/getDayScheduleByJson?date=" + date,
                method: 'GET',
                data: '',
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    $('.sunrise').val(response.dayTime.sunrise);
                    $('.chatzos').val(response.dayTime.chatzos);
                    $('.kriyas_shema_1').val(response.dayTime.kriyas_shema_1);
                    $('.kriyas_shema_2').val(response.dayTime.kriyas_shema_2);
                    $('.shkiya_1').val(response.dayTime.shkiya_1);
                    $('.shkiya_2').val(response.dayTime.shkiya_2);
                    $('#dayInfoId').val(response.dayTime.id);
                    if (response.dayTime.day_heading === "") {
                        $('.selectMultiple').val("").trigger('change');
                    } else {
                        var dhv = response.dayTime.day_heading.split(','); // Select the option with a value of '1'
                        $('.selectMultiple').val(dhv).trigger('change'); // Notify any JS components that the value changed
                    }
                }
            });
        });
    })

    $('.forwardDate').on("click", function (e) {
        e.preventDefault();
        let date = $('.eventDate').val();
        $.ajax({
            url: "<?php echo base_url(); ?>dayinfo/changeDate?date=" + date + "&type=forward",
            method: 'GET',
            data: '',
            dataType: "json",
            success: function (response) {
                $('.eventDate').val(response);
                $.ajax({
                    url: "<?php echo base_url(); ?>event/getDayScheduleByJson?date=" + $('.eventDate').val(),
                    method: 'GET',
                    data: '',
                    dataType: "json",
                    success: function (response) {
                        console.log(response);
                        $('.sunrise').val(response.dayTime.sunrise);
                        $('.chatzos').val(response.dayTime.chatzos);
                        $('.kriyas_shema_1').val(response.dayTime.kriyas_shema_1);
                        $('.kriyas_shema_2').val(response.dayTime.kriyas_shema_2);
                        $('.shkiya_1').val(response.dayTime.shkiya_1);
                        $('.shkiya_2').val(response.dayTime.shkiya_2);
                        if (response.dayTime.day_heading === "") {
                            $('.selectMultiple').val("").trigger('change');
                        } else {
                            var dhv = response.dayTime.day_heading.split(','); // Select the option with a value of '1'
                            $('.selectMultiple').val(dhv).trigger('change'); // Notify any JS components that the value changed
                        }
                    }
                });
            }
        });
    })

    $('.backwardDate').on("click", function (e) {
        e.preventDefault();
        let date = $('.eventDate').val();
        $.ajax({
            url: "<?php echo base_url(); ?>dayinfo/changeDate?date=" + date + "&type=backward",
            method: 'GET',
            data: '',
            dataType: "json",
            success: function (response) {
                $('.eventDate').val(response);
                $.ajax({
                    url: "<?php echo base_url(); ?>event/getDayScheduleByJson?date=" + $('.eventDate').val(),
                    method: 'GET',
                    data: '',
                    dataType: "json",
                    success: function (response) {
                        console.log(response);
                        $('.sunrise').val(response.dayTime.sunrise);
                        $('.chatzos').val(response.dayTime.chatzos);
                        $('.kriyas_shema_1').val(response.dayTime.kriyas_shema_1);
                        $('.kriyas_shema_2').val(response.dayTime.kriyas_shema_2);
                        $('.shkiya_1').val(response.dayTime.shkiya_1);
                        $('.shkiya_2').val(response.dayTime.shkiya_2);
                        if (response.dayTime.day_heading === "") {
                            $('.selectMultiple').val("").trigger('change');
                        } else {
                            var dhv = response.dayTime.day_heading.split(','); // Select the option with a value of '1'
                            $('.selectMultiple').val(dhv).trigger('change'); // Notify any JS components that the value changed
                        }
                    }
                });
            }
        });
    })
</script>
