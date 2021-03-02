<?php include 'header.php';?>
<main>
	<section>
		<div class="container">
			<div class="wrapper">
				<div class="step">
					<ul class="list-inline">
						<li class="list-inline-item"><a href=""><i class="fa fa-angle-left"></i> Previous step</a></li>
						<li class="list-inline-item"><span>7/20</span></li>
					</ul>
					<div class="line-step">
						<div class="check-line" style="width: 30%;"></div>
					</div>
				</div>
				<div class="title">
					<h1>How long has it been since you were at your ideal weight?</h1> 
				</div> 
				<div class="box-step">
					<form action="step-sinceideal.php" method="post">
						<div class="list-body">
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc" style="flex: 0 0 100%">
											<h4 style="margin-bottom: 0;">Less than 1 year</h4>
										</div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1002">
								<label for="1002">
									<div class="item-body">
										<div class="desc" style="flex: 0 0 100%">
											<h4 style="margin-bottom: 0;">1-3 years</h4>
										</div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1003">
								<label for="1003">
									<div class="item-body">
										<div class="desc" style="flex: 0 0 100%">
											<h4 style="margin-bottom: 0;">More than 3 years</h4>
										</div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1004">
								<label for="1004">
									<div class="item-body">
										<div class="desc" style="flex: 0 0 100%">
											<h4 style="margin-bottom: 0;">I've never been at my ideal weight</h4>
										</div>
									</div>
								</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php';?>