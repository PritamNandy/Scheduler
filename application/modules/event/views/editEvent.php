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
                        <?php echo lang('edit') . " " . lang('event'); ?>
                    </header>
                    <div class="card-body">
                        <form action="<?php echo site_url('event/addEditEvent'); ?>" method="post">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo lang('event') . " " . lang('date'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                        <div class="">
                                            <div class="input-group date dpYears" data-date-viewmode="years" data-date-format="mm/dd/yyyy" data-date="<?php echo date('m/d/Y'); ?>">
                                                <input type="text" name="date" class="form-control eventDate" value="<?php echo date('m/d/Y', $event->date); ?>" aria-label="Right Icon" aria-describedby="dp-ig" required>
                                                <div class="input-group-append">
                                                    <button id="dp-ig" class="btn btn-outline-secondary" type="button"><i class="fa fa-calendar f14"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="checkbox" class="textTime" value="yes" name="textTime" <?php if ($event->text_time == "yes") { ?> checked <?php } ?>> Text Time 
                                    </div>
                                </div>
                                <div class="col-md-6 intTime">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo lang('start_time'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                        <div class="">
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control timepicker-default rounded mr-3 start_time" name="start_time" aria-label="Right Icon" aria-describedby="basic-addon15" placeholder="" value="<?php echo $event->text_time == null ? date('h:i A', $event->start_time) : ""; ?>">
                                                <span class="input-group-addon btn btn-primary" id="basic-addon15"><i class="fa fa-clock-o f14"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 intTime">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo lang('end_time'); ?></label>
                                        <div class="">
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control timepicker-default rounded mr-3 end_time" name="end_time" aria-label="Right Icon" aria-describedby="basic-addon15" placeholder="" value="<?php
                                                if (!empty($event->end_time) && $event->text_time == null) {
                                                    echo date('h:i A', $event->end_time);
                                                } else {
                                                    echo "";
                                                }
                                                ?>">
                                                <span class="input-group-addon btn btn-primary" id="basic-addon15"><i class="fa fa-clock-o f14"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 textTimeInput">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo lang('start_time'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                        <div class="">
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control rounded mr-3 " name="start_time_text" aria-label="Right Icon" aria-describedby="basic-addon15" value="<?php echo $event->text_time == "yes" ? $event->start_time : ""; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 textTimeInput">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo lang('end_time'); ?></label>
                                        <div class="">
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control rounded mr-3 " name="end_time_text" aria-label="Right Icon" aria-describedby="basic-addon15" value="<?php
                                                if (!empty($event->end_time) && $event->text_time == "yes") {
                                                    $event->end_time;
                                                } else {
                                                    echo "";
                                                }
                                                ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=""><?php echo lang('event') . " " . lang('type'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                <select class="js-example-basic-multiple" name="event_type" multiple="multiple">
<?php foreach ($event_types as $event_type) {
    if ($event_type->status == 1) {
        ?>
                                            <option value="<?php echo $event_type->id; ?>" <?php if ($event_type->id == $event->event_type) { ?>selected<?php } ?>><?php echo $event_type->name; ?></option>
    <?php }
} ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class=""><?php echo lang('event') . " " . lang('name'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="event_name" placeholder="Enter event name" value="<?php echo $event->name ?>">
                            </div>
                            <div class="form-group">
                                <label class=""><?php echo lang('event') . " " . lang('note'); ?></label>
                                <textarea class="form-control" name="notes" placeholder="Enter event note"><?php echo $event->notes ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class=""><?php echo lang('location'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                <select class="js-example-basic-single locationSelect" name="location" >
<?php foreach ($locations as $location) {
    if ($location->status == 1) {
        ?>
                                            <option class="location_option" value="<?php echo $location->id; ?>" <?php if ($location->id == $event->location) { ?>selected<?php } ?>><?php echo $location->name; ?></option>
    <?php }
} ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" value="12+" name="isAged" <?php if ($event->isAged == '12+') { ?>checked<?php } ?>> Must be over 12 to attend
                            </div>
                            <input type="hidden" name="id" value="<?php echo $event->id; ?>">
                            <div class="form-group">
                                <button class="btn btn-success btn-md" type="submit"><?php echo lang('submit'); ?></button>
                            </div>
                        </form>
                        <br>
                        <hr>
                        <br>
                        <h4 style="text-align: center; font-weight: 700;"><?php echo lang('schedule'); ?></h4>
                        <div class="dayInfoDetails"></div>
                        <!--<input type="button" onclick="printDiv('schedule_table')" value="print a div!" />--><a class="print_pdf btn btn-success btn-md" onclick="printCSV()">Download CSV</a>
                        <div id="schedule_table" class="schedule_table">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col"><?php echo lang('time'); ?></th>
                                        <th scope="col"><?php echo lang('event'); ?></th>
                                        <th scope="col"><?php echo lang('location'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
                            $(document).ready(function () {

                                if ($('.textTime').is(":checked")) {
                                    $('.intTime').css("display", "none")
                                    $('.textTimeInput').css("display", "block")
                                } else {
                                    $('.intTime').css("display", "block")
                                    $('.textTimeInput').css("display", "none")
                                }

                                var date = $('.eventDate').val();
                                console.log(date);
                                $('.print_pdf').attr("href", '');
                                $('.print_pdf').attr("href", 'printPDF?id=' + date);
                                $.ajax({
                                    url: "<?php echo base_url(); ?>event/getDayScheduleByJson?date=" + date,
                                    method: 'GET',
                                    data: '',
                                    dataType: "json",
                                    success: function (response) {
                                        console.log(response);
                                        /*$('#editForm').find('input[name="event"]').val(response.name);
                                         $('#editForm').find('input[name="description"]').val(response.description);
                                         $('#editForm').find('input[name="color"]').val(response.color);*/
                                        $('.table').remove();
                                        $('.schedule_table').append(response.table);
                                        $('.sunrise').val(response.dayTime.sunrise);
                                        $('.chatzos').val(response.dayTime.chatzos);
                                        $('.kriyas_shema_1').val(response.dayTime.kriyas_shema_1);
                                        $('.kriyas_shema_2').val(response.dayTime.kriyas_shema_2);
                                        $('.shkiya_1').val(response.dayTime.shkiya_1);
                                        $('.shkiya_2').val(response.dayTime.shkiya_2);
                                    }
                                });
                                $('.eventDate').on('change', function () {
                                    var date = $('.eventDate').val();
                                    console.log(date);
                                    $.ajax({
                                        url: "<?php echo base_url(); ?>event/getDayScheduleByJson?date=" + date,
                                        method: 'GET',
                                        data: '',
                                        dataType: "json",
                                        success: function (response) {
                                            console.log(response);
                                            /*$('#editForm').find('input[name="event"]').val(response.name);
                                             $('#editForm').find('input[name="description"]').val(response.description);
                                             $('#editForm').find('input[name="color"]').val(response.color);*/
                                            $('.table').remove();
                                            $('.schedule_table').append(response.table);
                                            $('.sunrise').val(response.dayTime.sunrise);
                                            $('.chatzos').val(response.dayTime.chatzos);
                                            $('.kriyas_shema_1').val(response.dayTime.kriyas_shema_1);
                                            $('.kriyas_shema_2').val(response.dayTime.kriyas_shema_2);
                                            $('.shkiya_1').val(response.dayTime.shkiya_1);
                                            $('.shkiya_2').val(response.dayTime.shkiya_2);
                                            $('.in_table_styles').remove();
                                            $('.table_styles').append(response.styles);
                                        }
                                    });
                                });
                            })
</script>

<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }

    $(document).ready(function () {

        /*$('.start_time').on('change',function() {
         var date = $('.eventDate').val();
         var start_time = $('.start_time').val();
         $.ajax({
         url: "event/checkLocationOptionBySTime?date=" + date + "&start_time=" + start_time,
         method: 'GET',
         data: '',
         dataType: "json",
         success: function (response) {
         console.log(response);
         $('.location_option').remove();
         $('.js-example-basic-single').append(response.options);
         }
         });
         })*/


        /*$('.end_time').on('change',function() {
         var date = $('.eventDate').val();
         var start_time = $('.start_time').val();
         var end_time = $('.end_time').val();
         $.ajax({
         url: "event/checkLocationOptionByETime?date=" + date + "&start_time=" + start_time + "&end_time=" + end_time,
         method: 'GET',
         data: '',
         dataType: "json",
         success: function (response) {
         console.log(response);
         /*$('#editForm').find('input[name="event"]').val(response.name);
         $('#editForm').find('input[name="description"]').val(response.description);
         $('#editForm').find('input[name="color"]').val(response.color);*/
        /*$('.location_option').remove();
         $('.js-example-basic-single').append(response.options);
         }
         });
         })*/

        $('.locationSelect').on('change', function () {
            var date = $('.eventDate').val();
            var location = $('.locationSelect').val();
            var start_time = $('.start_time').val();
            var end_time = $('.end_time').val();
            $.ajax({
                url: "<?php echo base_url(); ?>event/getLocationCheck?date=" + date + "&location=" + location + "&start_time=" + start_time + "&end_time=" + end_time,
                method: 'GET',
                data: '',
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    if (response.status === "Have booked for another program! Wanna Continue?") {
                        alert("Have booked for another program! Wanna Continue?");
                    } else {

                    }
                }
            });

        })

        $('.textTime').click(function () {
            if ($(this).is(":checked")) {
                $('.intTime').css("display", "none")
                $('.textTimeInput').css("display", "block")
            } else {
                $('.intTime').css("display", "block")
                $('.textTimeInput').css("display", "none")
            }
        });

    });
</script>