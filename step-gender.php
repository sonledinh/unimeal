<?php include 'header.php';?>
<main>
	<section>
		<div class="container">
			<div class="wrapper">
				<div class="step">
					<ul class="list-inline">
						<li class="list-inline-item"><a href="index.php"><i class="fa fa-angle-left"></i> Previous step</a></li>
						<li class="list-inline-item"><span>2/20</span></li>
					</ul>
					<div class="line-step">
						<div class="check-line" style="width: 10%;"></div>
					</div> 
				</div>
				<div class="title">
					<h1>Select your gender</h1>
				</div>
				<div class="box-step">
					<form action="step-targetweight.php" method="post">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="item-step item-gender">
									<img src="images/gend-1.svg" class="img-fluid" alt="">
									<input type="submit" value="Man">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="item-step item-gender">
									<img src="images/gend-2.svg" class="img-fluid" alt="">
									<input type="submit" value="Woman">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php';?>