<?php include 'header.php';?>
<main>
	<div class="line-load"></div>
	<section>
		<div class="container">
			<div class="wrapper">
				<form action="step-stomachdiscomfort.php" method="post">
					<div class="box-typical">
						<div class="step">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="step-bodytype.php"><i class="fa fa-angle-left"></i> Previous step</a></li>
								<li class="list-inline-item"><span>6/20</span></li>
							</ul>
							<div class="line-step">
								<div class="check-line" style="width: 30%;"></div>
							</div>
						</div>

						<div class="title">
							<h1>Describe your typical day</h1> 
						</div> 
						<div class="desc-title">
							<p>Men in their 20+, who want to lose weight, require a more personalized approach depending on the current lifestyle.</p>
						</div>
						<div class="box-step">
							<div class="list-body">
								<div class="check-body">
									<input type="checkbox" id="1001">
									<label for="1001" class="clc-chart">
										<div class="item-body">
											<div class="desc">
												<h4 style="margin-bottom: 0;">At the office</h4>
											</div>
											<div class="avarta"><img src="images/typical-1.svg" class="img-fluid" alt=""></div>
										</div>
									</label>
								</div>
								<div class="check-body">
									<input type="checkbox" id="1002">
									<label for="1002" class="clc-chart">
										<div class="item-body">
											<div class="desc">
												<h4 style="margin-bottom: 0;">Daily long  walks</h4>
											</div>
											<div class="avarta"><img src="images/typical-2.svg" class="img-fluid" alt=""></div>
										</div>
									</label>
								</div>
								<div class="check-body">
									<input type="checkbox" id="1003">
									<label for="1003" class="clc-chart">
										<div class="item-body">
											<div class="desc">
												<h4 style="margin-bottom: 0;">Physical work</h4>
											</div>
											<div class="avarta"><img src="images/typical-3.svg" class="img-fluid" alt=""></div>
										</div>
									</label>
								</div>
								<div class="check-body">
									<input type="checkbox" id="1004">
									<label for="1004" class="clc-chart">
										<div class="item-body">
											<div class="desc">
												<h4 style="margin-bottom: 0;">Mostly at home</h4>
											</div>
											<div class="avarta"><img src="images/typical-4.svg" class="img-fluid" alt=""></div>
										</div>
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="box-char-typ text-center">
						<div class="title">
							<h1>Behavior change vs. Restrictive dieting</h1> 
						</div> 
						<div class="desc-title">
							<p>We work through habit-creation, which provides long-lasting results</p>
						</div>
						<div class="box-char"><img src="images/chart.svg" class="img-fluid" alt=""></div>
						<div class="button-submit">
							<input type="submit" class="btn-continue" value="Continue">
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php';?>