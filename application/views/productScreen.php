<!DOCTYPE html>
<htbhatml lang="en">

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

    <body>
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
            <div class="col-md-9 no-gutters">
                <div class="left-side">
                    <div class="row first no-gutters">

                        <div class="pad has-search col-md-4">
                            <select class="form-control" id="search_text">
                                <option value="" disabled selected hidden>Search Category</option>
                                <?php
                                if (!empty($categories)) {
                                    foreach ($categories as $category) {  ?>
                                        <option value="<?php echo $category['categoryName']; ?>"><?php echo $category['categoryName']; ?></option>
                                <?php
                                    }
                                } ?>
                            </select>
                        </div>
                        <div class="pad has-search col-md-8">
                            <select class="form-control" id="search_prod">
                                <option value="" disabled selected hidden>Search Product</option>
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
                    <div id="editForm">


                        <?php echo form_open_multipart('ProductScreenController/add') ?>
                        <div class="fullSection">
                            <div style="text-align: center; padding-top: 10px; ">
                                <h3>Add Product</h3>
                            </div>
                            <div class="row topSection">
                                <div class="col-md-4">
                                    <input type="text" name="productname" class="form-control" placeholder="Product Name" value="<?php echo set_value('productname'); ?>">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="price" class="form-control" placeholder="Product Price" value="<?php echo set_value('price'); ?>">
                                </div>
                                <div class="col-md-4">
                                    <div class="custom-file overflow-hidden">
                                        <!-- <input id="customFile" type="file" class="custom-file-input"> -->
                                        <?php echo form_upload(['name' => 'product', 'class' => 'form-control', 'id' => 'customFile']); ?>

                                    </div>

                                </div>

                            </div>
                            <div class="row bottomSection">
                                <div class="pri col-md-4">
                                    <label style="font-weight: bold;">Type</label>
                                    <br>
                                    <div class="radio">
                                        <label style="padding: 2px 6px;"><input type="radio" style="text-align: center;" class="price" name="type" value="veg" checked>Veg</label>
                                        <label><input type="radio" style="text-align: center;" class="price" name="type" value="nonveg">Non Veg</label>
                                    </div>

                                </div>
                                &nbsp;
                                <div class="cat col-md-7 cat">
                                    <label style="font-weight: bold;">Category</label>
                                    <br>
                                    <select name='roll' class="form-control cat">
                                        <option value="" disabled hidden></option>
                                        <?php
                                        if (!empty($categories)) {
                                            foreach ($categories as $category) {  ?>
                                                <option value="<?php echo $category['categoryName']; ?>"><?php echo $category['categoryName']; ?></option>
                                        <?php
                                            }
                                        } ?>
                                    </select>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                </div>
                                <div class=" col-md-4">

                                </div>
                                <div class=" buttons col-md-2">

                                    <button name="submit" type="submit" class="btn btn-success"> <span><i class="fa fa-plus" aria-hidden="true"></i></span>&nbsp;Add Products</button>
                                </div>
                                <?php
                                if (@$_GET['Empty'] == true) {
                                ?>
                                    <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        </form>
                    </div>
                    <hr style="border-top: 2px solid grey;">
                    <div id="category">


                        <form method="post" name="createUser" action="<?php echo base_url() . 'index.php/ProductScreenController/addCategory'; ?>">
                            <div class="fullSection">
                                <div style="text-align: center; padding-top: 10px; ">
                                    <h3>Add Category</h3>
                                </div>
                                <div class="row topSection">
                                    <div class="col-md-4">
                                        <input type="text" name="categoryname" class="form-control" placeholder="Category Name" value="<?php echo set_value('categoryname'); ?>">
                                    </div>
                                    <div class=" buttons col-md-2">

                                        <button name="submit" type="submit" class="btn btn-success"> <span><i class="fa fa-plus" aria-hidden="true"></i></span>&nbsp;Add Category</button>
                                    </div>
                                </div>

                                <div class="row">
                                   
                                    <?php
                                    if (@$_GET['Empty'] == true) {
                                    ?>
                                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3 no-gutters">
                <div class="right-side">
                    <div class="head">

                        <h4 style="color:white">All Products</h4>
                    </div>

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
            }
        });
    </script>
    <script>
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

            $('#search_text').change(function() {
                var search = $(this).val();

                console.log(search);
                if (search != '') {
                    load_data(search);
                } else {
                    load_data();
                }
            });
            $('#search_prod').change(function() {
                var search = $(this).val();

                console.log(search);
                if (search != '') {
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
}else{
    location.reload();
}
            
        }
    </script>


    </html>