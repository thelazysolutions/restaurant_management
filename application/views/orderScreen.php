<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>restaurant_management</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/order.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                    <a href="#">Home</a>
                </div>
                <div class="link">
                    <a href="#">Dashboard</a>
                </div>
                <div class="link">
                    <a href="#">Services</a>
                </div>
                <div class="link">
                    <a href="#">About</a>
                </div>
                <div class="link">
                    <a href="#">Contact</a>
                </div>
            </div>
        </div>
        <a class="navbar-brand" href="#">
        </a>
        <div class="logo">
            <h4>SOFTWARE LOGO</h4>
        </div>
        <div class="logo">
            <i style="color:white; font-size:40px; padding: 6px 6px;" class="fas fa-home"></i>
            <i style="color:white; font-size:40px; padding: 6px 6px;" class="fas fa-question"></i>
        </div>
    </nav>
    <!-- nav end -->
    <div class="row no-gutters">
        <!-- left side -->
        <div class="col-md-6 no-gutters">
            <div class="left-side">
                <div class=" title">
                    <h3 id="tableNo">Table No. 01</h3>
                </div>
                <div class="row no-gutters">

                    <div class=" has-search col-md-6">
                        <select class="form-control" onchange="calculate(this.value)">
                            <option value="" disabled selected hidden>Search...</option>
                            <?php
                            if (!empty($order)) {
                                foreach ($order as $product) {  ?>
                                    <option value="<?php echo $product['id']; ?>"><?php echo $product['name']; ?></option>
                            <?php
                                }
                            } ?>
                        </select>
                    </div>
                    <!-- <div class=" has-search col-md-6">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div> -->
                    <div class=" has-search col-md-6">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Category">
                    </div>
                </div>
                <!-- table 1 -->
                <table class="table tableone tableBodyScroll" id="style-1">
                    <thead>
                        <tr class="head">
                            <th scope="col" class="pad">Name</th>
                            <th scope="col" style="text-align:center;">Qty.</th>
                            <th scope="col" style="text-align:center;">Price</th>
                            <th scope="col" style="text-align:center;">Amount</th>
                            <th scope="col" style="text-align:center;">Delete</th>
                        </tr>
                    </thead>

                </table>
                <div class="row printshare no-gutters">
                    <div class=" print col-md-6">
                        <span class="print-span" style="font-size:30px; color:white;"><a href="#" onclick="print()" style="color: white; text-decoration:none">

                                <h3>PRINT</h3>

                            </a></span>
                    </div>
                    <div class=" share col-md-6">
                        <span class="share-span" style="font-size:30px; color:white;"><a href="#" style="color: white; text-decoration:none">
                                <h3>SHARE</h3>
                            </a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- middle side -->
        <!-- <div class="col-md-2 no-gutters">
            <div class="middle-side">
                <div class="col scrollbar" id="style-2" style="padding-top:7px ;">

                    <div class="force-overflow">
                        <div class="food ">
                            <h3>Food</h3>
                        </div>


                        <div class="food">
                            <h3>Food</h3>
                        </div>
                        <div class="food ">
                            <h3>Food</h3>
                        </div>
                        <div class="food">
                            <h3>Food</h3>
                        </div>
                        <div class="food">
                            <h3>Food</h3>
                        </div>
                        <div class="food">
                            <h3>Food</h3>
                        </div>
                        <div class="food ">
                            <h3>Food</h3>
                        </div>
                        <div class="food ">
                            <h3>Food</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- right side -->
        <div class="col-md-6 no-gutters">
            <div class="right-side">
                <div class="title" style="text-align: center; ">
                    <h1>Table No. 01</h1>
                </div>
                <div>
                    <table class="table tableone tableBodyScroll" id="style-3">
                        <thead>
                            <tr class="head">
                                <th scope="col" class="pad">Name</th>
                                <th scope="col" style="text-align:center;">Qty.</th>
                                <th scope="col" style="text-align:center;">Price</th>
                                <th scope="col" style="text-align:center;">Amount</th>
                                <th scope="col" style="text-align:center;">Delete</th>
                            </tr>
                        </thead>

                    </table>
                    <table class="table tabletwo">
                        <thead>
                            <tr class="head">
                                <th scope="col"></th>
                                <th scope="col" style="text-align:center;">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col1">Total Food Amount</td>
                                <td class="col2" style="text-align:center;"><span id="totalamount">0</span></td>
                            </tr>
                            <tr>
                                <td class="col1">Discount</td>
                                <td class="col2" style="text-align:center;">

                                    <input style="text-align:center;" type="float" name="discount" id="discount" onchange="discount(this.value)" placeholder="Enter Discount" value="<?php echo set_value('discount'); ?>" />
                                </td>
                            </tr>
                            <tr>
                                <td class="col1">GST</td>
                                <td class="col2" style="text-align:center;">5%</td>
                            </tr>
                            <tr style="font-weight:bold;">
                                <td class="col2">TOTAL</td>
                                <td class="col1" style="text-align:center;"><span id="finalTotal">0</span></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td class="col1">Total Food Amount</td>
                                <td class="col2" style="text-align:center;">000</td>
                            </tr>
                            <tr>
                                <td class="col1">Discount</td>
                                <td class="col2" style="text-align:center;">000</td>
                            </tr>
                            <tr>
                                <td class="col1">GST</td>
                                <td class="col2" style="text-align:center;">000</td>
                            </tr>
                            <tr style="font-weight:bold;">
                                <td class="col2">TOTAL</td>
                                <td class="col1" style="text-align:center;">000</td>
                            </tr>
                            <tr style="font-weight:bold;">
                                <td class="col1">GRAND TOTAL</td>
                                <td class="col2" style="text-align:center;">000</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row " style="margin:inherit;">
                        <div class="col dark">
                            <a href="#" style="color: white; text-decoration:none">
                                <h4>Cash</h4>
                            </a>
                        </div>
                        <div class="col dark">
                            <a href="#" style="color: white; text-decoration:none">
                                <h4>Card</h4>
                            </a>
                        </div>
                        <div class="col dark">
                            <a href="#" style="color: white; text-decoration:none">
                                <h4>UPI</h4>
                            </a>
                        </div>
                    </div>
                    <div class="print">
                        <a href="#" style="color: white; text-decoration:none">
                            <h1>PRINT</h1>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <script>
            const params = new URLSearchParams(window.location.search)
            for (const param of params) {
                console.log(param[1])
                var tableNo = document.getElementById('tableNo');
                tableNo.textContent = param[1]

            }
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

            function calculate(id) {
                <?php
                if (!empty($order)) {
                    foreach ($order as $product) { ?>
                        if (id == <?php echo $product['id']; ?>) {
                            if ($("#style-1 tbody").length == 0) {
                                $("#style-1").append("<tbody id ='body'></tbody>");
                            }
                            $("#style-1 tbody").append("<tr class='for'>" +
                                "<td class='col1 pad' ><?php echo $product['name']; ?></td>" +
                                "<td class='col2'  style='text-align:center;'><a href='#'id='decrement' class='dec' style='color: white; text-decoration:none'><span class='fa fa-minus ' style='font-size:12px; color:white;'></span></a> <span id='add' class='spa'>0</span> <a href='#'  id='increment' class='total inc' style='color: white; text-decoration:none'><span class='fa fa-plus ' style='font-size:12px; color:white;'></span></a></td>" +
                                "<td class='col1' class='price' style='text-align:center;'><?php echo $product['price']; ?></td>" +
                                "<td class='col2 tablerow'  style='text-align:center;'> <span id='amount'>0</span>  </td>" +
                                "<td class='col2'  style='text-align:center;'><button  id='updateButton' style='color: black; text-decoration:none; background:none; border:none' onclick='productsRemove(this);'><span class='fa fa-trash ' id='plus' style='font-size:20px; color:red;'></span></button></td>" +
                                "</tr>");
                            // if ($("#style-3 tbody").length == 0) {
                            //     $("#style-3").append("<tbody ><tr id ='table2'></tr></tbody>");
                            // }
                            var price = <?php echo $product['price']; ?>;
                            var x = 0;
                            var increment = document.getElementById('increment'); // find the element with the ID 'increment'
                            var decrement = document.getElementById('decrement'); // find the element with the ID 'decrement'
                            var span = document.getElementById('add');
                            var totalfoodamount = document.getElementById('amount');
                            var finalTotalWoBear = document.getElementById('finalTotal');
                            var table = document.querySelectorAll('.for');
                            // var table2 = document.getElementById('table2');
                            document.getElementById('totalamount').textContent = [...document.querySelectorAll('.tablerow')].reduce(function(result, item) {
                                return totalAmountWithoutGST = result + parseInt(item.textContent);
                            }, 0);
                            $(document).ready(function() {
                                $('#increment').attr('id', new Date())
                            });
                            $(document).ready(function() {
                                $('#decrement').attr('id', new Date().getTime())
                            });
                            $(document).ready(function() {
                                $('#add').attr('id', new Date().getSeconds())
                            });
                            $(document).ready(function() {
                                $('#amount').attr('id', new Date().getSeconds())
                            });
                            var total = []
                            // var local = ["1","2","3"]
                            increment.addEventListener('click', function() {
                                // this function is executed whenever the user clicks the increment button
                                span.textContent = ++x;
                                totalfoodamount.textContent = price * x;
                                document.getElementById('totalamount').textContent = [...document.querySelectorAll('.tablerow')].reduce(function(result, item) {
                                    return totalAmountWithoutGST = result + parseInt(item.textContent);
                                }, 0);
                                var discount = document.getElementById("discount").value;
                                var discountedValue = totalAmountWithoutGST - (totalAmountWithoutGST * discount / 100);
                                finalTotalWoBear.textContent = discountedValue + (discountedValue * 5 / 100);

                            });
                            decrement.addEventListener('click', function() {
                                span.textContent = --x;
                                if (x <= 0) {
                                    x = 0;
                                    span.textContent = 0;
                                }
                                totalfoodamount.textContent = price * x;
                                document.getElementById('totalamount').textContent = [...document.querySelectorAll('.tablerow')].reduce(function(result, item) {
                                    return totalAmountWithoutGST = result + parseInt(item.textContent);
                                }, 0);
                                var discount = document.getElementById("discount").value;
                                var discountedValue = totalAmountWithoutGST - (totalAmountWithoutGST * discount / 100);
                                finalTotalWoBear.textContent = discountedValue + (discountedValue * 5 / 100);
                            });
                        }
                <?php

                    }
                } ?>
            }

            function productsRemove(r) {
                //no clue what to put here?
                var p = r.parentNode.parentNode;
                p.parentNode.removeChild(p);
            }

            function print() {
                var all;
                if ($("#style-3 tbody").length == 0) {
                    $("#style-3").append("<tbody id='table2' ></tbody>");
                }
                var table = document.querySelectorAll('.for');
                var table2 = document.getElementById('table2');
                var i;
                for (i = 0; i < table.length; ++i) {
                    localStorage.setItem(i, table[i].innerHTML)
                    table2.innerHTML += '<tr>' + localStorage.getItem(i) + '</tr>';
                }
                var removeTab = document.getElementById('body');
                var parentEl = removeTab.parentElement;
                parentEl.removeChild(removeTab);
                var inc = [];
                var spa = [];
                var dec = [];
                var x = 0;
                [...document.querySelectorAll('.inc')].reduce(function(result, item, index) {
                    inc.push(document.getElementsByClassName("inc")[index].id);
                }, 0);
                [...document.querySelectorAll('.spa')].reduce(function(result, item, index) {
                    spa.push(document.getElementsByClassName("spa")[index].id);
                }, 0);
                [...document.querySelectorAll('.dec')].reduce(function(result, item, index) {
                    dec.push(document.getElementsByClassName("dec")[index].id);
                }, 0);
                for (i = 0; i < inc.length; ++i) {

                    var span = document.getElementById(spa[i]);


                    var increment = document.getElementById(inc[i]);
                    var decrement = document.getElementById(dec[i]);

                    // console.log("increment", increment)
                    increment.addEventListener('click', function() {
                        console.log("spa", span);
                        span.textContent = ++x;

                        totalfoodamount.textContent = price * x;
                        document.getElementById('totalamount').textContent = [...document.querySelectorAll('.tablerow')].reduce(function(result, item) {
                            return totalAmountWithoutGST = result + parseInt(item.textContent);
                        }, 0);
                        var discount = document.getElementById("discount").value;
                        var discountedValue = totalAmountWithoutGST - (totalAmountWithoutGST * discount / 100);
                        finalTotalWoBear.textContent = discountedValue + (discountedValue * 5 / 100);

                    });
                    decrement.addEventListener('click', function() {
                        span.textContent = --x;
                        if (x <= 0) {
                            x = 0;
                            span.textContent = 0;
                        }
                        totalfoodamount.textContent = price * x;
                        document.getElementById('totalamount').textContent = [...document.querySelectorAll('.tablerow')].reduce(function(result, item) {
                            return totalAmountWithoutGST = result + parseInt(item.textContent);
                        }, 0);
                        var discount = document.getElementById("discount").value;
                        var discountedValue = totalAmountWithoutGST - (totalAmountWithoutGST * discount / 100);
                        finalTotalWoBear.textContent = discountedValue + (discountedValue * 5 / 100);
                    });
                }


                // find the element with the ID 'increment'
                // var decrement = document.getElementById('decrement'); // find the element with the ID 'decrement'

                var totalfoodamount = document.getElementById('amount');
                var finalTotalWoBear = document.getElementById('finalTotal');
                var table = document.querySelectorAll('.for');
                // var table2 = document.getElementById('table2');
                document.getElementById('totalamount').textContent = [...document.querySelectorAll('.tablerow')].reduce(function(result, item) {
                    return totalAmountWithoutGST = result, parseInt(item.textContent);
                }, 0);
                // $(document).ready(function() {
                //     $('#increment').attr('id', new Date())
                // });
                // $(document).ready(function() {
                //     $('#decrement').attr('id', new Date())
                // });
                // $(document).ready(function() {
                //     $('#add').attr('id', new Date())
                // });
                // $(document).ready(function() {
                //     $('#amount').attr('id', new Date())
                // });
                var total = []
                // var local = ["1","2","3"]



                //     for (i = 0; i < localStorage.length; ++i) {
                //     // console.log("local", localStorage.getItem(i))
                //     table2[i] = localStorage.getItem(i);
                //     console.log("table", table2)
                // }
            }
        </script>
</body>

</html>