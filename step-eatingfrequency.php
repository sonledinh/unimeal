<?php include 'header.php';?>
<main>
	<div class="line-load"></div>
	<section>
		<div class="container">
			<div class="wrapper">
				<div class="step">
					<ul class="list-inline">
						<li class="list-inline-item"><a href="step-stomachdiscomfort.php"><i class="fa fa-angle-left"></i> Previous step</a></li>
						<li class="list-inline-item"><span>8/20</span></li>
					</ul>
					<div class="line-step">
						<div class="check-line" style="width: 40%;"></div>
					</div>
				</div>
				<div class="title">
					<h1>How many times a day do you want to eat?</h1> 
				</div> 
				<div class="desc-title">
					<h3>We will plan your meals according to your preferences</h3>
				</div>
				<div class="box-step">
					<form action="step-sinceideal.php" method="post">
						<div class="list-body">
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc" style="flex: 0 0 100%">
											<h4 style="margin-bottom: 0;">Two times (breakfast, dinner, and 2 snacks)</h4>
										</div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1002">
								<label for="1002">
									<div class="item-body">
										<div class="desc" style="flex: 0 0 100%">
											<h4 style="margin-bottom: 0;">Three times (breakfast, lunch, and dinner)</h4>
										</div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1003">
								<label for="1003">
									<div class="item-body">
										<div class="desc" style="flex: 0 0 100%">
											<h4 style="margin-bottom: 0;">Four times (breakfast, snack, lunch, and dinner)</h4>
										</div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1004">
								<label for="1004">
									<div class="item-body">
										<div class="desc" style="flex: 0 0 100%">
											<h4 style="margin-bottom: 0;">Five times (breakfast, lunch, dinner, and 2 snacks)</h4>
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