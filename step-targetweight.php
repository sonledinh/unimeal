<?php include 'header.php';?>
<main>
	<section>
		<div class="container">
			<div class="wrapper">
				<div class="step">
					<ul class="list-inline">
						<li class="list-inline-item"><a href="step-gender.php"><i class="fa fa-angle-left"></i> Previous step</a></li>
						<li class="list-inline-item"><span>3/20</span></li>
					</ul>
					<div class="line-step">
						<div class="check-line" style="width: 15%;"></div>
					</div>
				</div>
				<div class="title">
					<h1>Ok, what is your desired weight?</h1>
				</div>

				<div class="box-step">
					<form action="step-measures.php" method="post">
						<ul class="tabs">
							<li class="tab-link current" data-tab="tab-1">Imperial</li>
							<li class="tab-link" data-tab="tab-2">Metric</li>
						</ul>
						<div class="box-tab">
							<div id="tab-1" class="tab-content current">
								<div class="row">
									<div class="col-md-6">
										<div class="item-step">
											<label>Desired Weight</label>
											<input type="text" class="inp-text" placeholder="00 (lb)">
										</div>
									</div>
								</div>
							</div> 
							<div id="tab-2" class="tab-content">
								<div class="row">
									<div class="col-md-6">
										<div class="item-step">
											<label>Desired Weight</label>
											<input type="text" class="inp-text" placeholder="00 (kg)">
										</div>
									</div>
								</div>
							</div> 
						</div>
						<div class="button-submit">
							<input type="submit" class="btn-continue" value="Continue">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php';?>