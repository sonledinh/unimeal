<?php include 'header.php';?>
<main>
	<div class="line-load"></div>
	<section>
		<div class="container">
			<div class="wrapper">
				<div class="step">
					<ul class="list-inline">
						<li class="list-inline-item"><a href="step-measures.php"><i class="fa fa-angle-left"></i> Previous step</a></li>
						<li class="list-inline-item"><span>5/20</span></li>
					</ul>
					<div class="line-step">
						<div class="check-line" style="width: 25%;"></div>
					</div>
				</div>
				<div class="title">
					<h1>What is your body type?</h1> 
				</div> 
				<div class="desc-title">
					<h3>Each body type has a specific metabolic structure</h3>
				</div>

				<div class="box-step">
					<form action="step-typicalday.php" method="post">
						<div class="list-body">
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc">
											<h4>Pear-shaped</h4>
											<p>Naturally slimmer shoulders and thicker thighs</p>
										</div>
										<div class="avarta"><img src="images/body-1.svg" class="img-fluid" alt=""></div>
									</div>
								</label>
							</div>
							<div class="check-body">
								<input type="submit" id="1002">
								<label for="1002">
									<div class="item-body">
										<div class="desc">
											<h4>Square-shaped</h4>
											<p>Naturally wide shoulders and thighs</p>
										</div>
										<div class="avarta"><img src="images/body-2.svg" class="img-fluid" alt=""></div>
									</div>
								</label>
							</div>
							
							<div class="check-body">
								<input type="submit" id="1003">
								<label for="1003">
									<div class="item-body">
										<div class="desc">
											<h4>Hourglass</h4>
											<p>Wide bust and hips, a narrow waist</p>
										</div>
										<div class="avarta"><img src="images/body-3.svg" class="img-fluid" alt=""></div>
									</div>
								</label>
							</div>
							
							<div class="check-body">
								<input type="submit" id="1004">
								<label for="1004">
									<div class="item-body">
										<div class="desc">
											<h4>Apple-shape</h4>
											<p>Naturally wide torso and broad shoulders</p>
										</div>
										<div class="avarta"><img src="images/body-4.svg" class="img-fluid" alt=""></div>
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