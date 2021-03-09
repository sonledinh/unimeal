<?php include 'header.php';?>
<main>
	<div class="line-load"></div>
	<section>
		<div class="container">
			<div class="wrapper">
				<div class="step">
					<ul class="list-inline">
						<li class="list-inline-item"><a href="step-sleep.php"><i class="fa fa-angle-left"></i> Previous step</a></li>
						<li class="list-inline-item"><span>14/20</span></li>
					</ul>
					<div class="line-step">
						<div class="check-line" style="width: 70%;"></div>
					</div>
				</div>
				<div class="title">
					<h1>How much water do you drink daily?</h1> 
				</div> 
				<div class="box-step">
					<form action="step-time.php" method="post">
						<div class="list-body"> 
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Only coffee or tea</h4>
										</div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Less than 2 glasses</h4>
										</div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">2-6 glasses</h4>
										</div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">7-10 glasses</h4>
										</div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">More than 10 glasses</h4>
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