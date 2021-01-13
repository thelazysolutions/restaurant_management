<!DOCTYPE html>
<html lang="en">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/invoice.css'; ?>">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<div class="container">
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 text-center">
			<hr>
			<div class="img">
				<img src="http://via.placeholder.com/200x90?text=logo">
				<hr>
			</div>

			<div class="address">

				<p>Address: Restaurant Management Systems</p>
				<p>Phone number: 8889898989</p>
				<hr>
			</div>

			<div class="row ">

				<div class="col-md-6 text-left">
					Date: 15/2/2020
				</div>
				<div class="col-md-6 text-right ">
					Time: 3:00pm
				</div>
				<hr>
			</div>
			<div class="row">
				<div class="col-md-6 text-left">
					Table Num:1
				</div>
				<div class="col-md-6 text-right">
					Bill Num:123
				</div>
				<hr>
			</div>
			<div class="order">
				<h3>Order Summary</h3>
				<div class="food">
					<div class="row table-row">
						<table class="table table-striped">
							<thead>
								<tr>
									<th class="text-center" style="width:5%">#</th>
									<th style="width:50%">Item</th>
									<th class="text-right" style="width:15%">Quantity</th>
									<th class="text-right" style="width:15%">Price</th>
									<th class="text-right" style="width:15%">Amount</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">1</td>
									<td>Butter Chicken</td>
									<td class="text-right">10</td>
									<td class="text-right">18</td>
									<td class="text-right">180</td>
								</tr>
								<tr>
									<td class="text-center">2</td>
									<td>Paneer Masala</td>
									<td class="text-right">6</td>
									<td class="text-right">59</td>
									<td class="text-right">254</td>
								</tr>
								<tr>
									<td class="text-center">3</td>
									<td>Chicken Xakuti</td>
									<td class="text-right">4</td>
									<td class="text-right">95</td>
									<td class="text-right">285</td>
								</tr>
								<tr class="last-row">
									<td class="text-center">4</td>
									<td>Fried Rice</td>
									<td class="text-right">1</td>
									<td class="text-right">300</td>
									<td class="text-right">300</td>
								</tr>
							</tbody>
						</table>

					</div>
					<div class="row d-flex flex-row-reverse bg-dark text-white">
						<div class="col-md-3">
							<div class="mb-2">Total</div>
							<div class="h4 font-weight-light">&#x20B9 234</div>
						</div>

						<div class="col-md-3">
							<div class="mb-2">Discount</div>
							<div class="h4 font-weight-light">10%</div>
						</div>
						<div class="col-md-2">
							<div class="mb-2">GST</div>
							<div class="h4 font-weight-light">5%</div>
						</div>
						<div class="col-md-4">
							<div class="mb-2 ">Food Sub-Total</div>
							<div class="h4 font-weight-light">432</div>
						</div>
					</div>
				</div>
				<!-- food end -->
				<div class="liquor">
					<div class="row table-row">
						<table class="table table-striped">
							<thead>
								<tr>
									<th class="text-center" style="width:5%">#</th>
									<th style="width:50%">liquor</th>
									<th class="text-right" style="width:15%">Quantity</th>
									<th class="text-right" style="width:15%">Price</th>
									<th class="text-right" style="width:15%">Amount</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-center">1</td>
									<td>Crown Royal.</td>
									<td class="text-right">1</td>
									<td class="text-right">180</td>
									<td class="text-right">180</td>
								</tr>
								<tr>
									<td class="text-center">2</td>
									<td>Kingfisher</td>
									<td class="text-right">1</td>
									<td class="text-right">254</td>
									<td class="text-right">254</td>
								</tr>

							</tbody>
						</table>

					</div>
					<div class="row d-flex flex-row-reverse bg-dark text-white">
						<div class="col-md-3">
							<div class="mb-2"> Total</div>
							<div class="h4 font-weight-light">&#x20B9 234</div>
						</div>

						<div class="col-md-3">
							<div class="mb-2">Discount</div>
							<div class="h4 font-weight-light">10%</div>
						</div>
						<div class="col-md-2">
							<div class="mb-2">GST</div>
							<div class="h4 font-weight-light">15%</div>
						</div>
						<div class="col-md-4">
							<div class=" mb-2">Liquor Sub-Total</div>
							<div class="h4 font-weight-light">432</div>
						</div>
					</div>
					<hr>
					<hr>

					<div class="bg-dark text-white ">
						<div class="mb-2">Grand Total</div>
						<div class="h2 font-weight-light">&#x20B9 234 /-</div>
					</div>
				</div>
			</div>


		</div>

	</div>

	<div class="col-md-3">

	</div>

</div>








</html>
