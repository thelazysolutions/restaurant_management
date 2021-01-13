<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>restaurant_management</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/InvoiceStyle.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="../css/bootstrap-tagsinput.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="../js/bootstrap-tagsinput.js"></script>
</head>

<body >
<!-- nav start -->
<nav class="navbar">
	<div id="sidebar">
		<div id="toggle-btn">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="links">
			<div class="link">
				<a href="<?php echo base_url() . 'index.php/HomeScreenController' ?>">Home</a>
			</div>
			<div class="link">
				<a href="<?php echo base_url() . 'index.php/About' ?>">About Us</a>
			</div>
			<div class="link">
				<a href="<?php echo base_url() . 'index.php/Contact' ?>">Contact Us</a>
			</div>
			<div class="link">
				<a href="#">About</a>
			</div>
			<div class="link">
				<a href="<?php echo base_url() . 'index.php/UserController/logout' ?>">Logout</a>
			</div>
		</div>
	</div>
	<a class="navbar-brand" href="#">
	</a>
	<div class="logo">
		<h4 style="color:white; font-size:40px;">SOFTWARE LOGO</h4>
	</div>
	<div class="logo">
		<a href="<?php echo base_url() . 'index.php/HomeScreenController' ?>"><i style="color:white; font-size:30px; padding: 6px 6px;" class="fas fa-home"></i></a>
		<a href="<?php echo base_url() . 'index.php/Help' ?>"><i style="color:white; font-size:30px; padding: 6px 6px;" class="fas fa-question"></i></a>
	</div>
</nav>
<!-- left side -->

<div style="background-color: white; height: 100%">

	<!-- DataTales Example -->
	<span id="message"></span>
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
				<div class="col">
					<h6 class="m-0 font-weight-bold text-primary">Bill List</h6>
				</div>
				<div class="col" align="right">
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="billing_table" width="100%" cellspacing="0">
					<thead>
					<tr>
						<th>Invoice Number</th>
						<th>Order Date</th>
						<th>Order Time</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>

</body>
<script>
	let sidebar = document.querySelector("#sidebar");
	let sidebarToggleBtn = document.querySelector("#sidebar #toggle-btn");
	sidebarToggleBtn.addEventListener("click", function() {
		sidebar.classList.toggle("active")
	});
</script>
<script>
	$('select').select2({
		insertTag: function(data, tag) {
			// Insert the tag at the end of the results
			data.push(tag);
		},
	});
</script>
<script>
	$('input[type=file]').change(function(e) {
		$in = $(this);
		$in.next().html($in.val());

	});


	$(document).ready(function() {
		load_data();

		function load_data(query) {
			$.ajax({
				url: "<?php echo base_url(); ?>index.php/productScreenController/fetch",
				method: "POST",
				data: {
					query: query
				},
				success: function(data) {
					$('#prod').html(data);
				}
			})
		}
		$('#form').on('submit', function(e) {
			e.preventDefault()
			$.ajax({
				url: "<?php echo base_url(); ?>index.php/productScreenController/add",
				method: "POST",
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData: false,
				success: function(data) {
					load_data();
				}
			});
			$("#form")[0].reset();
		});
		$('#categorySubmit').on('click', function(e) {
			e.preventDefault();
			var categoryname = $("#categoryname").val();
			console.log(categoryname)
			$.ajax({
				url: "<?php echo base_url(); ?>index.php/productScreenController/addCategory",
				method: "POST",
				data: {
					categoryName: categoryname
				},
				success: function(data) {
					window.location.reload()
				}
			});
			$("#form")[0].reset();
		});
		$('#search_text').change(function() {
			var search = $(this).val();
			if (search != '') {
				console.log(search);
				load_data(search);
			} else {
				load_data();
			}
		});

		$('#search_prod').change(function() {
			var search = $(this).val();
			if (search != '') {
				console.log(search);
				load_data(search);
			} else {
				load_data();
			}
		});
	});




	function edit(id) {
		$.ajax({
			url: "<?php echo base_url(); ?>index.php/productScreenController/edit/" + id,
			method: "POST",
			success: function(data) {
				$('#editForm').html(data);
				$('select').select2({
					insertTag: function(data, tag) {
						// Insert the tag at the end of the results
						data.push(tag);
					}
				});
			}
		})
	}

	function remove(id) {
		var result = confirm("Are you sure you want to delete this product?");
		if (result) {
			$.ajax({
				url: "<?php echo base_url(); ?>index.php/productScreenController/delete/" + id,
				method: "POST",
				success: function(data) {
					location.reload();
				}
			})
		} else {
			location.reload();
		}

	}
</script>


</html>
