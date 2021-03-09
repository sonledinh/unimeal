<?php include 'header.php';?>
<main>
	<div class="line-load"></div>
	<section>
		<div class="container">
			<div class="wrapper">
				<div class="step">
					<ul class="list-inline">
						<li class="list-inline-item"><a href="step-fitness.php"><i class="fa fa-angle-left"></i> Previous step</a></li>
						<li class="list-inline-item"><span>12/20</span></li>
					</ul>
					<div class="line-step">
						<div class="check-line" style="width: 60%;"></div>
					</div>
				</div>
				<div class="title">
					<h1>How is your energy from day to day?</h1> 
				</div> 
				<div class="box-step">
					<form action="step-sleep.php" method="post">
						<div class="list-body">
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Steady</h4>
										</div>
										<div class="avarta"><img src="images/energylevel-1.svg" class="img-fluid" alt=""></div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Dragging  before meals</h4>
										</div>
										<div class="avarta"><img src="images/energylevel-2.svg" class="img-fluid" alt=""></div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Post lunch slump</h4>
										</div>
										<div class="avarta"><img src="images/energylevel-3.svg" class="img-fluid" alt=""></div>
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