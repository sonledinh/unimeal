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
					<h1>Do you workout?</h1> 
				</div> 
				<div class="desc-title">
					<div class="desc">
						<p>It is important to take into consideration the activity level for a Man who wants to gain 28 kg and is mostly at home</p>
					</div>
				</div>
				<div class="box-step">
					<form action="step-energylevel.php" method="post">
						<div class="list-body">
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc" style="flex: 0 0 100%">
											<h4 style="margin-bottom: 0;">Almost nothing</h4>
										</div>
									</div>
								</label>
							</div> 
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc" style="flex: 0 0 100%">
											<h4 style="margin-bottom: 0;">Only walks</h4>
										</div>
									</div>
								</label>
							</div> 
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc" style="flex: 0 0 100%">
											<h4 style="margin-bottom: 0;">1-2 times a week</h4>
										</div>
									</div>
								</label>
							</div> 
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc" style="flex: 0 0 100%">
											<h4 style="margin-bottom: 0;">3-5 times a week</h4>
										</div>
									</div>
								</label>
							</div> 
							<div class="check-body">
								<input type="submit" id="1001">
								<label for="1001">
									<div class="item-body">
										<div class="desc" style="flex: 0 0 100%">
											<h4 style="margin-bottom: 0;">5-7 times a week</h4>
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