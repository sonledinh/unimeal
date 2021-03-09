<?php include 'header.php';?>
<main>
	<div class="line-load"></div>
	<section>
		<div class="container">
			<div class="wrapper">
				<form action="result.php" method="post">
					<div class="box-step-meat">
						<div class="step">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="step-meat.php"><i class="fa fa-angle-left"></i> Previous step</a></li>
								<li class="list-inline-item"><span>20/20</span></li>
							</ul>
							<div class="line-step">
								<div class="check-line" style="width: 100%;"></div>
							</div>
						</div>
						<div class="title"> 
							<h1>Mark the products you want to include:</h1> 
						</div> 
						<div class="box-step">
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
									<input type="checkbox" id="1002" class="check-img check-list-img" disabled>
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
									<input type="checkbox" id="1003" class="check-img check-list-img" disabled>
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
									<input type="checkbox" id="1004" class="check-img check-list-img" disabled>
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
								<input type="button" class="btn-continue btn-meat" value="Continue">
							</div>
						</div>
					</div>
					<div class="box-processing text-center">
						<div class="title">
							<h1>Data processing</h1> 
						</div> 
						<div class="desc-title">
							<h3>Your meal plan is being calculated</h3>
						</div>
						<div class="inf-process">
							<svg version="1.1" id="circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							  viewBox="0 0 100 100" xml:space="preserve"> 
							    <circle class="progress" cx="50" cy="50" r="40">
							    </circle>
							</svg>
							<div class="numb-process"><label class="count">100</label><span>%</span></div>
						</div>	
						<div class="txt-process">Recipes plaing</div>	 
					</div>
					<div class="box-mail">
						<div class="desc-title">
							<h3>Enter your email to get your personal meal and workout plan</h3>
							<p class="pt-3">We respect your privacy and take protecting it very seriously — no spam.</p>
						</div>
						<div class="item-step">
							<label>Your email</label>
							<input type="text" class="inp-text" placeholder="Email">
						</div>
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