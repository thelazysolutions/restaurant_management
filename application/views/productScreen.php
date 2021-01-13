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
        <link rel="stylesheet" href="../css/bootstrap-tagsinput.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="../js/bootstrap-tagsinput.js"></script>
    </head>

    <body style="background-image: url('/assets/images/black.jpg')" >
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

        <div class="row no-gutters">
                    <!-- left side -->
            <div class="col-md-9 no-gutters" >
                <div class="left-side">
                    <div class="row first no-gutters" >

                        <div class="pad has-search col-md-4 ser" style="border-right: solid white 2px; ">
                            <select class="form-control" id="search_text" placeholder="Search by Category">
                                <option value="" disabled selected hidden>Search by Category</option>
                                <?php
                                if (!empty($categories)) {
                                    foreach ($categories as $category) {  ?>
                                        <option value="<?php echo $category['categoryName']; ?>"><?php echo $category['categoryName']; ?></option>
                                <?php
                                    }
                                } ?>
                            </select>
                        </div>
                        <div class="pad has-search col-md-4 ser" style="border-right: solid white 2px">
                            <select class="form-control" id="search_prod" >
                                <option value="" disabled selected hidden>Search by Product</option>
                                <?php
                                if (!empty($products)) {
                                    foreach ($products as $product) {  ?>
                                        <option value="<?php echo $product['name']; ?>"><?php echo $product['name']; ?></option>
                                <?php
                                    }
                                } ?>
                            </select>
                        </div>
						<div class="pad has-search col-md-4 ser" style="border-right: solid white 2px;">
							<select class="form-control" id="search_prod" >
								<option value="" disabled selected hidden>Some extra option</option>
								<?php
								if (!empty($products)) {
									foreach ($products as $product) {  ?>
										<option value="<?php echo $product['name']; ?>"><?php echo $product['name']; ?></option>
										<?php
									}
								} ?>
							</select>
						</div>
                    </div>
                    <!-- test start -->
                    <div style="text-align: center; padding-top: 10px; ">
                        <h3 style="color: white; margin-left: 45%"><b>Add Product</b></h3>
                    </div>
                    <div id="editForm">
                        <form action="" method="post" id="form" enctype="multipart/form-data">
                            <div class="row form">
                                <div class="col-md-4" style="background:white; display: flex; align-items: center; justify-content: center; height: 250px">
                                    <!-- <img class="menu-items rotate1" src="<?php echo base_url('assets/images/food.png'); ?>" alt="Girl in a jacket" height="120"> -->
                                    <h3>No Image</h3>
                                </div>
                                <div class="col-md-8" style="margin-left: 50%; margin-top:-230px">
                                    <div class="row text-center" >
                                        <div class="col-md-12 formPad" >
                                            <input type="text" id="productname" name="productname" class="form-control" placeholder="Product Name" style="width: 435px;">
                                            <?php echo "<span style='color:red;'>" . form_error('productname') . "</span>"   ?>
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-3 formPad" >
                                            <div class="btn-group btn-group-toggle" data-toggle="buttons" style="background-color: #264653">
                                                <label class="btn btn-secondary active" >
                                                    <input style="color: green;" type="radio" name="type" value="veg" id="option1" autocomplete="off" checked> Veg
                                                </label>
                                                <label class="btn btn-secondary">
                                                    <input type="radio" name="type" value="nonveg" id="option2" autocomplete="off"> Non veg
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 cat formPad" >
												<select class="form-control" style="width: 250px">
													<option value="" disabled selected hidden>Choose Category</option>
                                                <?php
                                                if (!empty($categories)) {
                                                    foreach ($categories as $category) {  ?>
                                                        <option value="<?php echo $category['categoryName']; ?>"><?php echo $category['categoryName']; ?></option>
                                                <?php
                                                    }
                                                } ?>
                                            </select>
                                            <?php echo "<span style='color:red;'>" . form_error('roll') . "</span>"   ?>

                                        </div>

                                        <div class="col-md-5 formPad">
                                            <!-- <form action="" method="post" id="form">

                                            <div class="row ">
                                                <div class="col-md-10 " style="margin-left: 50px;">
                                                    <input type="text" id="categoryname" name="categoryname" class="form-control" placeholder="Add Category">
                                                </div>
                                                <div class=" buttons">

                                                    <button name="categorySubmit" id="categorySubmit" type="submit" class="btn"> <span><i class="fa fa-plus" aria-hidden="true"></i></span></button>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <?php
                                                if (@$_GET['EmptyCat'] == true) {
                                                ?>
                                                    <span style='color:red; margin-left:25px;'>.<?php echo $_GET['EmptyCat'] ?> .</span>
                                                <?php
                                                }
                                                ?>
                                            </div> -->
                                        </div>
									</div>
									<div class="row">
                                        <div class="col-md-3 formPad" style="margin-top:15px">
                                            <input id="price" type="text" name="price" class="form-control" placeholder="Product Price">
                                            <?php echo "<span style='color:red;'>" . form_error('price') . "</span>"   ?>
                                        </div>
                                        <div class="col-md-6 formPad" style="margin-top:15px; width: 150px;">
                                            <div class="upload" style="width: 250px;">
                                                <input type="button" class="uploadButton" value="Browse" />
                                                <input type="file" name="product" accept="image/*" id="customFile" />
                                                <span class="fileName">Upload Images</span>
                                            </div>

                                            <!-- <span class="btn  btn-file" style="background-color: white;">
                                                Upload Image<input type="file" name="product" id="customFile" >
                                            </span> -->
                                            <!-- <div class="custom-file overflow-hidden">
                                                
                                              
                                            </div> -->
                                        </div>
									</div>
									<div class="row col-md-12">
										<div class=" buttons col-md-12" style="margin-top: 20px; margin-left: -15px;">
											<button name="submit" type="submit" class="btn" style="width: 440px;"> <span><i class="fa fa-plus" aria-hidden="true" ></i></span>&nbsp;Add Products</button>

										</div>
										<?php
										if (@$_GET['Empty'] == true) {
											?>
											<span style='color:red; margin-left:25px;'>.<?php echo $_GET['Empty'] ?> .</span>
											<?php
										}
										?>
									</div>

                                    </div>

                                </div>

                        </form>
                    </div>
                    <!-- test end -->

                </div>
            </div>
            <div class="col-md-3 no-gutters">
	 <div style="text-align: center; padding: 5px; background:#143642; padding:7px" >

                        <h4 style="color:white">All Products</h4>
	 </div>
                <div class="right-side">

                    <div id="prod"></div>

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
