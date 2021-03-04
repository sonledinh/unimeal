<?php include 'header.php';?>
<main>
	<section>
		<div class="container">
			<div class="wrapper">
				<div class="step">
					<ul class="list-inline">
						<li class="list-inline-item"><a href="step-time.php"><i class="fa fa-angle-left"></i> Previous step</a></li>
						<li class="list-inline-item"><span>16/20</span></li>
					</ul>
					<div class="line-step">
						<div class="check-line" style="width: 80%;"></div>
					</div>
				</div>
				<div class="title">
					<h1>Do you have any dietary restrictions or allergies?</h1> 
				</div> 
				<div class="box-step">
					<form action="step-veggies.php" method="post">
						<div class="list-body"> 
							<div class="check-body inp-abs">
								<input type="checkbox" id="1001" class="check-img check-list-img">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">I'm lactose intolerant</h4>
										</div>
									</div>
								</label>
							</div>
							<div class="check-body inp-abs">
								<input type="checkbox" id="1002" class="check-img check-list-img">
								<label for="1002">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">I don't eat gluten</h4>
										</div>
									</div>
								</label> 
							</div>
							<div class="check-body inp-abs">
								<input type="checkbox" id="1003" class="check-img check-list-img">
								<label for="1003">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">I'm vegetarian</h4>
										</div>
									</div>
								</label>
							</div>
							<div class="check-body inp-abs">
								<input type="checkbox" id="1004" class="check-img check-list-img">
								<label for="1004">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">I'm vegan</h4>
										</div>
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