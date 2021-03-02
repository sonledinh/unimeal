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
					<h1>Do you experience stomach discomfort during the day?</h1> 
				</div> 
				<div class="box-step">
					<form action="step-stomachdiscomfort.php" method="post">
						<div class="list-body">
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">At the office</h4>
										</div>
										<div class="avarta"><img src="images/typical-1.svg" class="img-fluid" alt=""></div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Daily long  walks</h4>
										</div>
										<div class="avarta"><img src="images/typical-2.svg" class="img-fluid" alt=""></div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Physical work</h4>
										</div>
										<div class="avarta"><img src="images/typical-3.svg" class="img-fluid" alt=""></div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Mostly at home</h4>
										</div>
										<div class="avarta"><img src="images/typical-4.svg" class="img-fluid" alt=""></div>
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