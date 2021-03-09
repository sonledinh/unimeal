<?php include 'header.php';?>
<main>
	<div class="line-load"></div>
	<section>
		<div class="container">
			<div class="wrapper">
				<div class="step">
					<ul class="list-inline">
						<li class="list-inline-item"><a href="step-typicalday.php"><i class="fa fa-angle-left"></i> Previous step</a></li>
						<li class="list-inline-item"><span>7/20</span></li>
					</ul>
					<div class="line-step">
						<div class="check-line" style="width: 35%;"></div>
					</div>
				</div>
				<div class="title">
					<h1>Do you experience stomach discomfort during the day?</h1> 
				</div> 
				<div class="box-step">
					<form action="step-eatingfrequency.php" method="post">
						<div class="list-body">
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Yes</h4>
										</div>
										<div class="avarta"><img src="images/during-1.svg" class="img-fluid" alt=""></div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1002">
								<label for="1002">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">No</h4>
										</div>
										<div class="avarta"><img src="images/during-2.svg" class="img-fluid" alt=""></div>
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