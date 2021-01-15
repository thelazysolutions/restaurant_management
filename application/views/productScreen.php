<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>restaurant_management</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/productStyle.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/assets/css/bootstrap-tagsinput.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="/assets/js/bootstrap-tagsinput.js"></script>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
		<meta name="author" content="AdminKit">
		<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
		<link href="/assets/css/app.scss" rel="stylesheet">
		<link href="/assets/css/app.scss" rel="stylesheet">
		<link href="/assets/css/calstyle.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/>
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
<style>
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: "Quicksand", sans-serif;
	}

	html {
		font-size: 62.5%;
	}

	.container {

		//background-color: #12121f;
		color: #eee;
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.calendar {
		width: 45rem;
		height: 52rem;
		background-color: #222227;
		box-shadow: 0 0.5rem 3rem rgba(0, 0, 0, 0.4);
	}

	.month {
		width: 100%;
		height: 12rem;
		background-color: #167e56;
		display: flex;
		justify-content: space-between;
		align-items: center;
		padding: 0 2rem;
		text-align: center;
		text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
	}

	.month i {
		font-size: 2.5rem;
		cursor: pointer;
	}

	.month h1 {
		font-size: 3rem;
		font-weight: 400;
		text-transform: uppercase;
		letter-spacing: 0.2rem;
		margin-bottom: 1rem;
	}

	.month p {
		font-size: 1.6rem;
	}

	.weekdays {
		width: 100%;
		height: 5rem;
		padding: 0 0.4rem;
		display: flex;
		align-items: center;
	}

	.weekdays div {
		font-size: 1.5rem;
		font-weight: 400;
		letter-spacing: 0.1rem;
		width: calc(44.2rem / 7);
		display: flex;
		justify-content: center;
		align-items: center;
		text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
	}

	.days {
		width: 100%;
		display: flex;
		flex-wrap: wrap;
		padding: 0.2rem;
	}

	.days div {
		font-size: 1.4rem;
		margin: 0.3rem;
		width: calc(40.2rem / 7);
		height: 5rem;
		display: flex;
		justify-content: center;
		align-items: center;
		text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
		transition: background-color 0.2s;
	}

	.days div:hover:not(.today) {
		background-color: #262626;
		border: 0.2rem solid #777;
		cursor: pointer;
	}

	.prev-date,
	.next-date {
		opacity: 0.5;
	}

	.today {
		background-color: #167e56;
	}


</style>
	</head>

    <body>
	<div style="background-color: black; height: 100px; color: white; text-align: center;font-size: 50px">SOFTWARE LOGO</div>
		<div class="wrapper">
			<div class="main"style="display: flex;margin-left: 0px"  >
				<form action=" " style="display: flex;margin-left: 60px">
					<label for="from" style="color: white;font-size: 20px; padding-right: 10px">From </label>
					<input type="date" id="from" name="from">
					<input class="btn btn-danger" style="margin-left: 5px" type="submit" value="Submit">
				</form>
				<form action=" " style="display: flex;margin-left: 60px">
					<label for="from" style="color: white;font-size: 20px; padding-right: 10px">To </label>
					<input type="date" id="to" name="to">
					<input class="btn btn-danger" style="margin-left: 5px" type="submit" value="Submit">
				</form>
			</div>


				<main class="content" style="margin-top: -50px">
					<div class="container-fluid p-0">

						<div class="row mb-2 mb-xl-3">


						</div>
						<div class="row" style="padding: 50px">
							<div class="col-xl-6 col-xxl-5 d-flex">
								<div class="w-100">
									<div class="row">
										<div class="col-sm-6">
											<div class="card" style="height: 180px">
												<div class="card-body">
													<h1 class="card-title mb-4">Sales</h1>
													<h1 class="mt-1 mb-3" style="font-size: 40px">2.382</h1>
													<div class="mb-1">
														<span class="text-danger" style="font-size: 20px"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
														<span class="text-muted" style="font-size: 15px">Since last week</span>
													</div>
												</div>
											</div>
											<div class="card" style="margin-top:20px;height: 180px">
												<div class="card-body" >
													<h1 class="card-title mb-4">Visitors</h1>
													<h1 class="mt-1 mb-3" style="font-size: 40px">14.212</h1>
													<div class="mb-1">
														<span class="text-success" style="font-size: 20px"> <i class="mdi mdi-arrow-bottom-right"></i> 5.25% </span>
														<span class="text-muted" style="font-size: 15px">Since last week</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="card" style="height: 180px">
												<div class="card-body">
													<h1 class="card-title mb-4">Earnings</h1>
													<h1 class="mt-1 mb-3" style="font-size: 40px">$21.300</h1>
													<div class="mb-1">
														<span class="text-success" style="font-size: 20px"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
														<span class="text-muted" style="font-size: 15px">Since last week</span>
													</div>
												</div>
											</div>
											<div class="card"  style="margin-top:20px; height: 180px;">
												<div class="card-body">
													<h1 class="card-title mb-4">Orders</h1>
													<h1 class="mt-1 mb-3" style="font-size: 40px">64</h1>
													<div class="mb-1">
														<span class="text-danger" style="font-size: 20px"> <i class="mdi mdi-arrow-bottom-right"></i> -2.25% </span>
														<span class="text-muted" style="font-size: 15px">Since last week</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xl-6 col-xxl-7" >
								<div class="card flex-fill w-100" style="height: 385px">
									<div class="card-header">

										<h1 class="card-title mb-0">Recent Movement</h1>
									</div>
									<div class="card-body py-3">
										<div class="chart chart-sm">
											<canvas id="chartjs-dashboard-line"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row" style="padding:50px; margin-top:-50px">
							<div class="col-12 col-md-5 col-xxl-3 d-flex order-xxl-1">
								<div class="card flex-fill">
									<div class="card-header">

										<h1 class="card-title mb-0">Calendar</h1>
									</div>
									<div class="card-body d-flex">
										<div class="align-self-center w-100">
											<div class="chart">
												<div class="container">
													<div class="calendar">
														<div class="month">
															<i class="fas fa-angle-left prev"></i>
															<div class="date">
																<h1></h1>
																<p></p>
															</div>
															<i class="fas fa-angle-right next"></i>
														</div>
														<div class="weekdays">
															<div>Sun</div>
															<div>Mon</div>
															<div>Tue</div>
															<div>Wed</div>
															<div>Thu</div>
															<div>Fri</div>
															<div>Sat</div>
														</div>
														<div class="days"></div>
													</div>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-4 col-xxl-3 d-flex">
								<div class="card flex-fill w-100">
									<div class="card-header">

										<h1 class="card-title mb-0">Monthly Sales</h1>
									</div>
									<div class="card-body d-flex w-100">
										<div class="align-self-center chart chart-lg">
											<canvas id="chartjs-dashboard-bar"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-3 col-xxl-3 d-flex">
								<div class="card flex-fill w-100">
									<div class="card-header">

										<h1 class="card-title mb-0">Export Report</h1>
									</div>

									<div class="card-body d-flex" style="justify-content:center">

										<div class="align-self-center chart chart-lg" >
											<a href="#"><button style="border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 10px; background-color: orangered" ">
												Download PDF</button></a><br>


											<a href="#"><button style="border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 10px; background-color: cornflowerblue" ">
												Send via Email</button></a><br>
										</>

									</div>
								</div>
							</div>
						</div>

						</div>

				</main>


			</div>

		<script src="/assets/js/app.js"></script>

		<script>
			document.addEventListener("DOMContentLoaded", function() {
				let ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
				let gradient = ctx.createLinearGradient(0, 0, 0, 225);
				gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
				gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
				// Line chart
				new Chart(document.getElementById("chartjs-dashboard-line"), {
					type: "line",
					data: {
						labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
						datasets: [{
							label: "Sales ($)",
							fill: true,
							backgroundColor: gradient,
							borderColor: window.theme.primary,
							data: [
								2115,
								1562,
								1584,
								1892,
								1587,
								1923,
								2566,
								2448,
								2805,
								3438,
								2917,
								3327
							]
						}]
					},
					options: {
						maintainAspectRatio: false,
						legend: {
							display: false
						},
						tooltips: {
							intersect: false
						},
						hover: {
							intersect: true
						},
						plugins: {
							filler: {
								propagate: false
							}
						},
						scales: {
							xAxes: [{
								reverse: true,
								gridLines: {
									color: "rgba(0,0,0,0.0)"
								}
							}],
							yAxes: [{
								ticks: {
									stepSize: 1000
								},
								display: true,
								borderDash: [3, 3],
								gridLines: {
									color: "rgba(0,0,0,0.0)"
								}
							}]
						}
					}
				});
			});
		</script>

		<script>
			document.addEventListener("DOMContentLoaded", function() {
				// Bar chart
				new Chart(document.getElementById("chartjs-dashboard-bar"), {
					type: "bar",
					data: {
						labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
						datasets: [{
							label: "This year",
							backgroundColor: window.theme.primary,
							borderColor: window.theme.primary,
							hoverBackgroundColor: window.theme.primary,
							hoverBorderColor: window.theme.primary,
							data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
							barPercentage: .75,
							categoryPercentage: .5
						}]
					},
					options: {
						maintainAspectRatio: false,
						legend: {
							display: false
						},
						scales: {
							yAxes: [{
								gridLines: {
									display: false
								},
								stacked: false,
								ticks: {
									stepSize: 20
								}
							}],
							xAxes: [{
								stacked: false,
								gridLines: {
									color: "transparent"
								}
							}]
						}
					}
				});
			});
		</script>

		<script>
			document.addEventListener("DOMContentLoaded", function() {
				document.getElementById("datetimepicker-dashboard").flatpickr({
					inline: true,
					prevArrow: "<span class=\"fas fa-chevron-left\" title=\"Previous month\"></span>",
					nextArrow: "<span class=\"fas fa-chevron-right\" title=\"Next month\"></span>",
				});
			});
		</script>
	<script>
		const date = new Date();

		const renderCalendar = () => {
			date.setDate(1);

			const monthDays = document.querySelector(".days");

			const lastDay = new Date(
					date.getFullYear(),
					date.getMonth() + 1,
					0
			).getDate();

			const prevLastDay = new Date(
					date.getFullYear(),
					date.getMonth(),
					0
			).getDate();

			const firstDayIndex = date.getDay();

			const lastDayIndex = new Date(
					date.getFullYear(),
					date.getMonth() + 1,
					0
			).getDay();

			const nextDays = 7 - lastDayIndex - 1;

			const months = [
				"January",
				"February",
				"March",
				"April",
				"May",
				"June",
				"July",
				"August",
				"September",
				"October",
				"November",
				"December",
			];

			document.querySelector(".date h1").innerHTML = months[date.getMonth()];

			document.querySelector(".date p").innerHTML = new Date().toDateString();

			let days = "";

			for (let x = firstDayIndex; x > 0; x--) {
				days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
			}

			for (let i = 1; i <= lastDay; i++) {
				if (
						i === new Date().getDate() &&
						date.getMonth() === new Date().getMonth()
				) {
					days += `<div class="today">${i}</div>`;
				} else {
					days += `<div>${i}</div>`;
				}
			}

			for (let j = 1; j <= nextDays; j++) {
				days += `<div class="next-date">${j}</div>`;
				monthDays.innerHTML = days;
			}
		};

		document.querySelector(".prev").addEventListener("click", () => {
			date.setMonth(date.getMonth() - 1);
			renderCalendar();
		});

		document.querySelector(".next").addEventListener("click", () => {
			date.setMonth(date.getMonth() + 1);
			renderCalendar();
		});

		renderCalendar();


	</script>

	</body>

</html>
