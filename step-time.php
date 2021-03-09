<?php include 'header.php';?>
<main>
	<div class="line-load"></div>
	<section>
		<div class="container">
			<div class="wrapper">
				<div class="step">
					<ul class="list-inline">
						<li class="list-inline-item"><a href="step-water.php"><i class="fa fa-angle-left"></i> Previous step</a></li>
						<li class="list-inline-item"><span>15/20</span></li>
					</ul>
					<div class="line-step">
						<div class="check-line" style="width: 75%;"></div>
					</div>
				</div>
				<div class="title">
					<h1>How much time are you ready to spend per one meal prep?</h1> 
				</div> 
				<div class="box-step">
					<form action="step-restrictions.php" method="post">
						<div class="list-body"> 
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">Less than 30 min</h4>
										</div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">30-60 min</h4>
										</div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4 style="margin-bottom: 0;">More than 1 hour</h4>
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