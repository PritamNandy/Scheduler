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
								<label for="exampleInputEmail1"><?php echo lang('date'); ?></label><span style="color: red; font-weight: bold;">*</span>
								<div class="">
									<div class="input-group date dpYears" data-date-viewmode="years" data-date-format="mm/dd/yyyy" data-date="<?php echo date('m/d/Y'); ?>">
										<input type="text" name="date" class="form-control eventDate" value="<?php if(!empty($input_date->date)) {
											echo date('m/d/Y',$input_date->date);
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
										<select class="js-example-basic-multiple selectMultiple" name="day_heading[]" multiple="multiple">
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
