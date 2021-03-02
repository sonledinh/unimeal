<?php include 'header.php';?>
<main>
	<section>
		<div class="container">
			<div class="title">
				<h1>Do you want to lose weight?</h1>
			</div>
			<div class="step-goal">
				<form action="step-gender.php" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="item-goal item-goal-yes">
								<div class="avarta"><img src="images/goal-1.png" alt="" class="img-fluid"></div>
								<div class="inp-check">
									<button type="submit" class="check-yes">Yes</button>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="item-goal item-goal-no">
								<div class="avarta"><img src="images/goal-2.png" alt="" class="img-fluid"></div>
								<div class="inp-check">
									<button  type="submit"class="check-no">No</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="remember">
				<ul>
					<li>
						<input type="checkbox" checked id="1001"><label for="1001">By continuing I agree with Terms of Service, Privacy Policy, Money-Back Policy, Subscription terms</label>
					</li>
					<li>
						<input type="checkbox" checked id="1002"><label for="1002">I would like to receive updates about products, services, and special offers from Unimeal via email</label>
					</li>
				</ul>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php';?>