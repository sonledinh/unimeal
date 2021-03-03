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
					<h1>Select all that is true for you:</h1> 
				</div> 
				<div class="box-step">
					<form action="step-fitness.php" method="post">
						<div class="list-body">
							<div class="check-body inp-abs">
								<input type="checkbox" id="1001" class="check-img check-list-img">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">I eat late at night</h4>
										</div>
										<div class="avarta"><img src="images/eatinghabits-1.svg" class="img-fluid" alt=""></div>
									</div>
								</label>
							</div> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1002" class="check-img check-list-img">
								<label for="1002">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">I don't get enough sleep</h4>
										</div>
										<div class="avarta"><img src="images/eatinghabits-2.svg" class="img-fluid" alt=""></div>
									</div>
								</label>
							</div> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1003" class="check-img check-list-img">
								<label for="1003">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">I can't give up eating sweets</h4>
										</div>
										<div class="avarta"><img src="images/eatinghabits-3.svg" class="img-fluid" alt=""></div>
									</div>
								</label>
							</div> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1004" class="check-img check-list-img">
								<label for="1004">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">I love soft drinks</h4>
										</div>
										<div class="avarta"><img src="images/eatinghabits-4.svg" class="img-fluid" alt=""></div>
									</div>
								</label>
							</div> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1005" class="check-img check-list-img">
								<label for="1005">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">I consume a lot of salt</h4>
										</div>
										<div class="avarta"><img src="images/eatinghabits-5.svg" class="img-fluid" alt=""></div>
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