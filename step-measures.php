<?php include 'header.php';?>
<main>
	<div class="line-load"></div>
	<section>
		<div class="container">
			<div class="wrapper">
				<div class="step">
					<ul class="list-inline">
						<li class="list-inline-item"><a href="step-targetweight.php"><i class="fa fa-angle-left"></i> Previous step</a></li>
						<li class="list-inline-item"><span>4/20</span></li>
					</ul>
					<div class="line-step">
						<div class="check-line" style="width: 20%;"></div>
					</div>
				</div>
				<div class="title">
					<h1>Let's check your body measures</h1> 
				</div> 

				<div class="box-step">
					<form action="step-bodytype.php" method="post">
						<ul class="tabs">
							<li class="tab-link current" data-tab="tab-1">Imperial</li>
							<li class="tab-link" data-tab="tab-2">Metric</li>
						</ul>
						<div class="box-tab">
							<div id="tab-1" class="tab-content current">
								<div class="row">
									<div class="col-md-6">
										<div class="item-step">
											<label>Age (years)</label>
											<input type="text" class="inp-text" placeholder="00 (years)">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="item-step">
											<label>Height (ft)</label>
											<input type="text" class="inp-text" placeholder="00 (ft)">
										</div>
									</div>
									<div class="col-md-6">
										<div class="item-step">
											<label>Height (inch)</label>
											<input type="text" class="inp-text" placeholder="00 (inch)">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="item-step">
											<label>Current Weight (lb)</label>
											<input type="text" class="inp-text" placeholder="00 (lb)">
										</div>
									</div>
								</div>
							</div> 
							<div id="tab-2" class="tab-content">
								<div class="row">
									<div class="col-md-6">
										<div class="item-step">
											<label>Age (years)</label>
											<input type="text" class="inp-text" placeholder="00 (years)">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="item-step">
											<label>Height</label>
											<input type="text" class="inp-text" placeholder="00 (cm)">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="item-step">
											<label>Current Weight</label>
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