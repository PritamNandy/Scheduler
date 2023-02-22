<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- page start-->

		<div class="row">
			<div class="col-md-12">
				<section class="card">
					<header class="card-header head-border">
						<?php echo "Reset Date"; ?>
					</header>
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<a class="btn btn-success" onclick="triggerButton()">Reset Date for Current Year</a>
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

<script>
	function triggerButton() {
		if (window.confirm('You really want to reset the dates?'))
		{
			window.location.href = '<?= site_url('report/resetDate'); ?>';
		}
	}
</script>
