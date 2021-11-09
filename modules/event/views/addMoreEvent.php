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
                        <?php echo lang('add') . " " . lang('event'); ?>
                    </header>
                    <div class="card-body">
                        <form action="event/addEditEvent" method="post">
                            <h4 style="text-align: center; font-weight: 700;"><?php echo lang('day') . " " . lang('info'); ?></h4>
                            <div class="form-group">
                                <label for="exampleInputEmail1"><?php echo lang('event') . " " . lang('date'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                <div class="">
                                    <div class="input-group date dpYears" data-date-viewmode="years" data-date-format="mm/dd/yyyy" data-date="<?php echo date('m/d/Y'); ?>">
                                        <input type="text" name="date" class="form-control eventDate" value="<?php if(!empty($input_date->date)) {
                                            echo date('m/d/Y',$input_date->date);
                                        } else if(!empty($delete_date)) {
                                            echo date('m/d/Y',$delete_date);
                                        } else {
                                            echo date('m/d/Y'); 
                                        } ?>" aria-label="Right Icon" aria-describedby="dp-ig" required>
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
                                        <select class="js-example-basic-multiple selectMultiple" name="day_heading[]" multiple="multiple" required>
                                            <?php foreach ($day_headings as $day_heading) { 
                                                if($day_heading->status == 1) { ?>
                                                <option value="<?php echo $day_heading->id; ?>"><?php echo $day_heading->name; ?></option>
                                            <?php } } ?>
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
                                </div>
                            </div>
                            <br>
                            <hr style="height: 2px; color: black;">
                            <br>
                            <h4 style="text-align: center; font-weight: 700;"><?php echo lang('events'); ?></h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo lang('start_time'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                        <div class="">
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control timepicker-default rounded mr-3 start_time" name="start_time" aria-label="Right Icon" aria-describedby="basic-addon15" value="10:00 AM">
                                                <span class="input-group-addon btn btn-primary" id="basic-addon15"><i class="fa fa-clock-o f14"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"><?php echo lang('end_time'); ?></label>
                                        <div class="">
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control timepicker-default rounded mr-3 end_time" name="end_time" aria-label="Right Icon" aria-describedby="basic-addon15" value="">
                                                <span class="input-group-addon btn btn-primary" id="basic-addon15"><i class="fa fa-clock-o f14"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class=""><?php echo lang('event') . " " . lang('type'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                <select class="js-example-basic-multiple" name="event_type" multiple="multiple">
                                    <?php foreach ($event_types as $event_type) { 
                                        if($event_type->status == 1) { ?>
                                        <option value="<?php echo $event_type->id; ?>"><?php echo $event_type->name; ?></option>
                                    <?php } } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class=""><?php echo lang('event') . " " . lang('name'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="event_name" placeholder="Enter event name">
                            </div>
                            <div class="form-group">
                                <label class=""><?php echo lang('event') . " " . lang('note'); ?></label>
                                <textarea class="form-control" name="notes" placeholder="Enter event notes"></textarea>
                            </div>
                            <div class="form-group">
                                <label class=""><?php echo lang('location'); ?></label><span style="color: red; font-weight: bold;">*</span>
                                <select class="js-example-basic-single locationSelect" name="location" >
                                    <?php foreach ($locations as $location) { 
                                        if($location->status == 1) { ?>
                                    <option class="location_option" value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
                                    <?php } } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" value="12+" name="isAged"> Must be over 12 to attend
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-md" type="submit"><?php echo lang('submit'); ?></button>
                            </div>
                        </form>
                        <br>
                        <hr>
                        <br>
                        <h4 style="text-align: center; font-weight: 700;"><?php echo lang('schedule'); ?></h4>
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
                        <div id="hidden_table" class="hidden_table" style="display: none;">
                            
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
        var date = $('.eventDate').val();
            console.log(date);
            $('.print_pdf').attr("href", '');
            $('.print_pdf').attr("href", 'printPDF?id='+date);
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
                    $('.table2').remove();
                    $('.schedule_table').append(response.table);
                    $('.hidden_table').append(response.hidden_table);
                    $('.sunrise').val(response.dayTime.sunrise);
                    $('.chatzos').val(response.dayTime.chatzos);
                    $('.kriyas_shema_1').val(response.dayTime.kriyas_shema_1);
                    $('.kriyas_shema_2').val(response.dayTime.kriyas_shema_2);
                    $('.shkiya_1').val(response.dayTime.shkiya_1);
                    $('.shkiya_2').val(response.dayTime.shkiya_2);
                    $('.in_table_styles').remove();
                    $('.table_styles').append(response.styles);
                    if(response.dayTime.day_heading === "") {
                        $('.selectMultiple').val("").trigger('change');
                    } else {
                        var dhv = response.dayTime.day_heading.split(','); // Select the option with a value of '1'
                        console.log(dhv);            
                        $('.selectMultiple').val(dhv).trigger('change'); // Notify any JS components that the value changed
                    }
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
                    $('.table2').remove();
                    $('.schedule_table').append(response.table);
                    $('.hidden_table').append(response.hidden_table);
                    $('.sunrise').val(response.dayTime.sunrise);
                    $('.chatzos').val(response.dayTime.chatzos);
                    $('.kriyas_shema_1').val(response.dayTime.kriyas_shema_1);
                    $('.kriyas_shema_2').val(response.dayTime.kriyas_shema_2);
                    $('.shkiya_1').val(response.dayTime.shkiya_1);
                    $('.shkiya_2').val(response.dayTime.shkiya_2);
                    $('.in_table_styles').remove();
                    $('.table_styles').append(response.styles);
                    if(response.dayTime.day_heading === "") {
                        $('.selectMultiple').val("").trigger('change');
                    } else {
                        var dhv = response.dayTime.day_heading.split(','); // Select the option with a value of '1'
                        console.log(dhv);            
                        $('.selectMultiple').val(dhv).trigger('change'); // Notify any JS components that the value changed
                    }
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
        
        $('.locationSelect').on('change',function() {
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
                    if(response.status === "Have booked for another program! Wanna Continue?") {
                        alert("Have booked for another program! Wanna Continue?");
                    } else {
                        
                    }
                }
            });
            
        })
        
    });
</script>