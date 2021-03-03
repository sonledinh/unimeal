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
					<h1>Mark the products you want to include:</h1> 
				</div> 
				<div class="box-step">
					<form action="step-meat.php" method="post">
						<div class="list-body"> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1001" class="check-img check-list-img">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Avocado</h4>
										</div>
										<div class="avarta"><img src="images/prd-1.svg" class="img-fluid" alt="" width="24" height="24"></div>
									</div>
								</label>
							</div> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1002" class="check-img check-list-img">
								<label for="1002">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Peas</h4>
										</div>
										<div class="avarta"><img src="images/prd-2.svg" class="img-fluid" alt="" width="24" height="24"></div>
									</div>
								</label>
							</div> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1003" class="check-img check-list-img">
								<label for="1003">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Mushrooms</h4>
										</div>
										<div class="avarta"><img src="images/prd-3.svg" class="img-fluid" alt="" width="24" height="24"></div>
									</div>
								</label>
							</div> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1004" class="check-img check-list-img">
								<label for="1004">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Eggs</h4>
										</div>
										<div class="avarta"><img src="images/prd-4.svg" class="img-fluid" alt="" width="24" height="24"></div>
									</div>
								</label>
							</div> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1005" class="check-img check-list-img">
								<label for="1005">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Milk</h4>
										</div>
										<div class="avarta"><img src="images/prd-5.svg" class="img-fluid" alt="" width="24" height="24"></div>
									</div>
								</label>
							</div> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1006" class="check-img check-list-img">
								<label for="1006">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Cottage cheese</h4>
										</div>
										<div class="avarta"><img src="images/prd-6.svg" class="img-fluid" alt="" width="24" height="24"></div>
									</div>
								</label>
							</div> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1007" class="check-img check-list-img">
								<label for="1007">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Tofu</h4>
										</div>
										<div class="avarta"><img src="images/prd-7.svg" class="img-fluid" alt="" width="24" height="24"></div>
									</div>
								</label>
							</div> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1008" class="check-img check-list-img">
								<label for="1008">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Hummus</h4>
										</div>
										<div class="avarta"><img src="images/prd-8.svg" class="img-fluid" alt="" width="24" height="24"></div>
									</div>
								</label>
							</div> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1009" class="check-img check-list-img">
								<label for="1009">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Plant-milk</h4>
										</div>
										<div class="avarta"><img src="images/prd-9.svg" class="img-fluid" alt="" width="24" height="24"></div>
									</div>
								</label>
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