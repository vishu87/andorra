<?php include('header.php'); ?>
<div class="page-banner-div">
	<div class="container">
		<div class="top-head">
			<div class="row">
				<div class="col-md-8">
					<h2>Step 2</h2>
					<h3>
						Determine Your Risk Tolerance
					</h3>	
				</div>
				<div class="col-md-4 logo-right">
					<a href="index.php"><img src="assets/img/logo.png"></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="page-body">
		<div class="arrow">
			<img src="assets/img/arrow.png">
		</div>
		<div class="risk-measure table-div">
			<div style="background:#919191;">1</div>
			<div style="background:#B5B5B5;">2</div>
			<div style="background:#CBCBCB;">3</div>
			<div style="background:#E0E0E0;">4</div>
			<div style="background:#E3EBF5;">5</div>
			<div style="background:#C5D7EA;">6</div>
			<div style="background:#A5C0DF;">7</div>
			<div style="background:#4674A3;">8</div>
			<div style="background:#225785;">9</div>
			<div style="background:#123351;">10</div>
		</div>
		<div class="page-questions">
			<div class="ques">
				A. For how many years do you want to invest your money?
				<input type="number" name="">
			</div>
			<div class="ques">
				B. How much money do you want to invest?
				<input type="number" name="">
			</div>
			<div class="ques">
				C. Total value of cash and liquid investments?
				<input type="number" name="">
			</div>
			<div class="ques">
				D. When deciding how to invest your money, what do you care about the most?
			</div>
			<div class="ans">
				<ul>
					<li>
						<div class="radio">
							<label>
								<input type="radio" name="ques1">
								Maximizing gains
							</label>
						</div>
					</li>
					<li>
						<div class="radio">
							<label>
								<input type="radio" name="ques1">
								Minimizing Losses
							</label>
						</div>
					</li>
					<li>
						<div class="radio">
							<label>
								<input type="radio" name="ques1">
								Preserving capital
							</label>
						</div>
					</li>
					<li>
						<div class="radio">
							<label>
								<input type="radio" name="ques1">
								All three
							</label>
						</div>
					</li>
				</ul>
			</div>
			<div class="ques">
				E. Your portfolio loses 20% of its assets in one month, what do you do?
			</div>
			<div class="ans">
				<ul>
					<li>
						<div class="radio">
							<label>
								<input type="radio" name="ques2">
								Sell all your investments?
							</label>
						</div>
					</li>
					<li>
						<div class="radio">
							<label>
								<input type="radio" name="ques2">
								Sell some of your investments?		
							</label>
						</div>
					</li>
					<li>
						<div class="radio">
							<label>
								<input type="radio" name="ques2">
								Keep all your investments?		
							</label>
						</div>
					</li>
					<li>
						<div class="radio">
							<label>
								<input type="radio" name="ques2">
								Buy more investments?
							</label>
						</div>
					</li>
				</ul>
			</div>
			<div class="ques">
				F. Personality: select the description that fits you the best.
			</div>
			<div class="ans">
				<ul>
					<li>
						<div class="radio">
							<label>
								<input type="radio" name="ques2">
								I’d like a steady income with low returns and high impact
							</label>
						</div>
					</li>
					<li>
						<div class="radio">
							<label>
								<input type="radio" name="ques2">
								I’m willing to gamble some of my money on risky. investments that yield high impact, high returns.
							</label>
						</div>
					</li>
					<li>
						<div class="radio">
							<label>
								<input type="radio" name="ques2">
								I’d like to invest my money in market rate impact investments and make sure I’m not investing in terrible companies.
							</label>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="next-btn">
			<a href="step3.php">Next</a>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>