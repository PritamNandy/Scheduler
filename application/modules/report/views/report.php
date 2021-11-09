<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->

        <div class="row">
            <div class="col-md-12">
                <section class="card">
                    <header class="card-header head-border">
                        <?php echo lang('event') . " " . lang('report'); ?>
                    </header>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="<?php echo site_url('report/getReport'); ?>" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date Range</label>
                                        <input type="text" class="form-control" name="daterange" value="<?php if(!empty($daterange)) {
                                            echo $daterange;
                                        } ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-success btn-md" type="submit"><?php echo lang('submit'); ?></button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-12">
                                <?php if(!empty($reports) || $reports != NULL) {
                                    while($from <= $to) {  ?>
                                <div>
                                    <h1><?php echo date('d-m-Y', $from)?></h1>
                                    <!--<h4><?php foreach($reports as $report) {
                                        if($report->date == $from) {
                                            $day_headings = explode(',',$report->day_heading);
                                            foreach($day_headings as $dh) {
                                                echo $this->db->get_where('day_heading', array('id =>',$dh))->row()->name; ?><br><?php  
                                            }
                                        }
                                    } ?></h4>-->
                                </div>
                                <br>
                                        <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col"><?php echo lang('time'); ?></th>
                                                <th scope="col"><?php echo lang('event'); ?></th>
                                                <th scope="col"><?php echo lang('location'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($reports as $report) {
                                            if($report->date == $from) { 
                                                $font_color = $this->db->get_where('event_types',array('id =>',$report->event_type))->row();
												if(isset($font_color->font_color)) {
													$font_color = $font_color->font_color;
												} else {
													$font_color = "#333";
												}
                                            ?>
                                            <tr bgcolor="<?php echo $report->color; ?>">
                                                <td><font color="<?php echo $font_color; ?>"><?php echo date("g:i a",$report->start_time) . ' - ' . $report->end_time != null || $report->end_time != "" ? date("g:i a",$report->end_time) : ""; ?></font></td>
                                                <td><font color="<?php echo $font_color; ?>"><?php echo $report->name; ?></font></td>
                                                <td><font color="<?php echo $font_color; ?>"><?php echo $this->db->get_where('location',array('id' => $report->location))->row()->name; ?></font></td>
                                            </tr>
                                        <?php    }
                                        } ?>
                                        </tbody>
                                    </table>
                                <br><br><br>
                                    <?php $day = date('d-m-Y',$from);
                                          $from = strtotime("$day +1 day");
                                    }
                                } else if($reports == NULL) { ?>
                                <p style="text-align: center"> No Event Found! </p>
                                <?php } ?>
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
