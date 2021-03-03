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
											<h4 style="margin-bottom: 0;">Turkey</h4>
										</div>
										<div class="avarta"><img src="images/meat-1.svg" class="img-fluid" alt="" width="24" height="24"></div>
									</div>
								</label>
							</div> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1002" class="check-img check-list-img">
								<label for="1002">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Beef</h4>
										</div>
										<div class="avarta"><img src="images/meat-2.svg" class="img-fluid" alt="" width="24" height="24"></div>
									</div>
								</label>
							</div> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1003" class="check-img check-list-img">
								<label for="1003">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Chicken</h4>
										</div>
										<div class="avarta"><img src="images/meat-3.svg" class="img-fluid" alt="" width="24" height="24"></div>
									</div>
								</label>
							</div> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1004" class="check-img check-list-img">
								<label for="1004">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Pork</h4>
										</div>
										<div class="avarta"><img src="images/meat-4.svg" class="img-fluid" alt="" width="24" height="24"></div>
									</div>
								</label>
							</div> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1005" class="check-img check-list-img">
								<label for="1005"> 
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Fish</h4>
										</div>
										<div class="avarta"><img src="images/meat-5.svg" class="img-fluid" alt="" width="24" height="24"></div>
									</div>
								</label>
							</div> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1006" class="check-img check-list-img">
								<label for="1006">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Seafood</h4>
										</div>
										<div class="avarta"><img src="images/meat-6.svg" class="img-fluid" alt="" width="24" height="24"></div>
									</div>
								</label>
							</div> 
						</div>
						<div class="choose-none">
							<input type="checkbox" id="2001"> 
							<label for="2001">None of the above</label>
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