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
								<?php $day_heading = $this->db->get_where('day_heading_time', array('date' => $from))->row(); ?>
                                <h3><?php echo date('m/d/Y', $from)?></h3>
									<div>
										<?php if(isset($day_heading)) {
											echo "<b>Day Heading:</b>";
											$dh = $day_heading->day_heading;
											$dh = explode(',', $dh);
											foreach ($dh as $d) {
												$name = $this->db->get_where('day_heading', array('id' => $d))->row();
												if(isset($name)) {
													echo '<h6>'.$name->name.'</h6>';
												}
											}?>
											<h6>Sunrise: <?php echo $day_heading->sunrise; ?></h6>
											<h6>Chatzos: <?php echo $day_heading->chatzos; ?></h6>
											<h6>Kriyas Shema 1: <?php echo $day_heading->kriyas_shema_1; ?></h6>
											<h6>Kriyas Shema 2: <?php echo $day_heading->kriyas_shema_2; ?></h6>
											<h6>Shkiya 1: <?php echo $day_heading->shkiya_1; ?></h6>
											<h6>Shkiya 2: <?php echo $day_heading->shkiya_2; ?></h6>
										<?php } ?>
									</div>
                                </div>
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
												<?PHP if($report->end_time != null || $report->end_time != "") { ?>
													<td><font color="<?php echo $font_color; ?>"><?php echo date("h:i a",$report->start_time) . ' - ' . date("h:i a",$report->end_time); ?></font></td>
												<?php } else { ?>
													<td><font color="<?php echo $font_color; ?>"><?php echo date("h:i a",$report->start_time); ?></font></td>
												<?php } ?>

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
