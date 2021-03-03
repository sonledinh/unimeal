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
						<div class="check-line" style="width: 40%;"></div>
					</div>
				</div>
				<div class="title">
					<h1>How much do you sleep?</h1> 
				</div> 
				<div class="box-step">
					<form action="step-water.php" method="post">
						<div class="list-body"> 
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Less than 5 hours</h4>
										</div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">5-6 hours</h4>
										</div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">7-8 hours</h4>
										</div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">More than 8 hours</h4>
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