<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Table List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>restaurant_management</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/tableBooking.css'; ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/jquery.dataTables.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/dataTables.bootstrap4.css'; ?>">
</head>

<body>
    <!-- nav start -->
    <nav class="navbar">
        <div class="row" style="padding-top: 0px; padding-left:110px">
            <!-- <div class="col">
                <input type="text" placeholder="Day" style="width:200px;text-align:center; background-color:#111; color:white;padding-right: 145px;" class="form-control day" id="datepicker" name="event_date" autocomplete="off">
            </div> -->
            <div class="row" style="padding-top: 0px; padding-left:100px ">
                <select id="datemenu1" class="form-control" style="width:200px;text-align:center;color: white; background-color:#111;">
                    <option value="">All</option>
                    <!-- <option value="1:27:19 PM-1:27:19 PM" selected>Lunch</option>
                    <option>Dinner</option>
                    <option>Breakfast</option> -->
                </select>
            </div>
            <div class="row" style="padding-top: 0px; padding-left:100px ">
                <select id="inputState" class="form-control" style="width:200px;text-align:center;color: white; background-color:#111;">

                    <option value="1:27:19 PM-1:27:19 PM" selected>Lunch</option>
                    <option>Dinner</option>
                    <option>Breakfast</option>
                </select>
            </div>
        </div>
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
            <a href="<?php echo base_url() . 'index.php/HomeScreenController' ?>"><i style="color:white; font-size:30px; padding: 6px 6px;" class="fas fa-home"></i></a>
            <a href="<?php echo base_url() . 'index.php/Help' ?>"><i style="color:white; font-size:30px; padding: 6px 6px;" class="fas fa-question"></i></a>
        </div>
    </nav>
    <!-- nav end -->
    <div class="row no-gutters" style="overflow-x:hidden ;">
        <!-- left side -->
        <div class="col-md-4 no-gutters">
            <div class="left-side">
                <!-- search icon -->
                <!-- <div class=" has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search">
                </div> -->
                <!-- table 1 -->
                <table class="table tableone">
                    <thead>
                        <tr class="head">
                            <th scope="col">Seated</th>
                            <th scope="col"><?php echo $seat_count ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($seat_tables as $row) {
                            echo "<tr>";
                            echo "<td class='col1'>$row->name</td>";
                            echo "<td class='col1'>$row->time_</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <!-- table 2 -->
                <table class="table tabletwo ">
                    <thead>
                        <tr class="head">
                            <th scope="col">Empty</th>
                            <th scope="col"><?php echo $empty_count ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($emp_tables as $row) {
                            echo "<tr>";
                            echo "<td class='col1'>$row->name</td>";
                            echo "<td class='col1'>$row->time_</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <!-- table 3 -->
                <table class="table tablethree">
                    <thead>
                        <tr class="head">
                            <th scope="col">Reserved</th>
                            <th scope="col"><?php echo $reserve_count ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($res_tables as $row) {
                            echo "<tr>";
                            echo "<td class='col1'>$row->name</td>";
                            echo "<td class='col1'>$row->time_</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <div class="icon">
                    <a href="#" class="left"><img class="menu-items-left " src="<?php echo base_url() . 'assets/images/Invoices.png'; ?>" alt="Girl in a jacket" width="30" height="30"></a>
                    <a href="#" class="right"><img class="menu-items-left " src="<?php echo base_url() . 'assets/images/iconleft.png'; ?>" alt="Girl in a jacket" width="30" height="30"></a>

                </div>
            </div>

        </div>
        <!-- right side -->
        <div class="col-md-8 no-gutters">
            <div class="right-side">
                <div class="right-border">
                    <div class="col-md-12">
                        <h1>

                            <!-- <div class="float-right mt-3 "><a href="javascript:void(0);" class="btn btn-danger" data-toggle="modal" data-target="#Modal_Delete"><span class="fa fa-trash"></span> Delete</a></div> -->
                            <div class="float-right mr-4 mt-3"><a style="background-color: #B22222;" href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                        </h1>
                    </div>
                </div>
                <div class="modal fade" id="myModal">
                </div>
                <div class="row" id="show_data" style="margin-top:50px;">

                    <!-- <table class="table" style="margin-top:50px;" >

                <tbody id="show_data">
                     
                </tbody>
            </table> -->
                </div>
                <!-- <div class="container">
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Main Floor</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Action</a>
                            <a href="#" class="dropdown-item">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Separated link</a>
                        </div>
                    </div>
                </div> -->


            </div>
        </div>

    </div>
    </div>

    <!-- MODAL ADD -->
    <form>
        <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel">Add New Table</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Table Name</label>
                            <div class="col-md-10">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Table Name">
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                              <select type="text" name="status" id="status" class="form-control" placeholder="status">
                              <option value="active">Active</option>
                              <option value="inactive">Inactive</option>
                              </select>
                            </div>
                        </div> -->
                        <!-- <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10" >
                            <select type="text" name="state" id="state" class="form-control" placeholder="state">
                              <option value="empty">Empty</option>
                              <option value="seated">Seated</option>
                              <option value="reserved">Reserved</option>
                              </select>
                            </div>
                        </div>   -->
                        <!-- <div class="form-group row">
                            <label class="col-md-2 col-form-label">Time</label>
                            <div class="col-md-10">
                              <input type="text" name="time_" id="time_" class="form-control" value="<?php date_default_timezone_set('Asia/Kolkata');
                                                                                                        echo date("h:i:sa"); ?>" placeholder="time">
                            </div>
                        </div> -->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--END MODAL ADD-->

    <!-- MODAL EDIT -->
    <form>
        <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Table</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" style="display: none;">Table Id</label>
                            <div class="col-md-10">
                                <input type="hidden" name="id_edit" id="id_edit" class="form-control" placeholder="Table Id" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Table Name</label>
                            <div class="col-md-10">
                                <input type="text" name="name_edit" id="name_edit" class="form-control" placeholder="Table Name" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                                <select type="text" name="state_edit" id="state_edit" class="form-control" placeholder="Status">
                                    <option value="empty">Empty</option>
                                    <option value="seated">Seated</option>
                                    <option value="reserved">Reserved</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                              <input type="text" name="status_edit" id="status_edit" class="form-control" placeholder="Status">
                            </div>
                        </div> -->
                        <!-- <div class="form-group row">
                            <label class="col-md-2 col-form-label">Time</label>
                            <div class="col-md-10">
                              <input type="text" name="time_edit" id="time_edit" class="form-control" placeholder="Time" >
                    
                            </div>
                        </div>                       -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" type="submit" id="btn_update" class="btn btn-danger">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--END MODAL EDIT-->

    <!--MODAL DELETE-->
    <form>
        <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Table</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <strong>Are you sure to delete this record?</strong>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="table_delete" id="table_delete" class="form-control">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--END MODAL DELETE-->
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.5.1.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.dataTables.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/dataTables.bootstrap4.js'; ?>"></script>

    <script type="text/javascript">
        let sidebar = document.querySelector("#sidebar");
        let sidebarToggleBtn = document.querySelector("#sidebar #toggle-btn");
        sidebarToggleBtn.addEventListener("click", function() {
            sidebar.classList.toggle("active")
        });
        $(document).ready(function() {
            show_tables(); //call function show all produc
            function formatDate(date) {
                var d = new Date(date),
                    month = '' + (d.getMonth() + 1),
                    day = '' + d.getDate(),
                    year = d.getFullYear();

                if (month.length < 2) month = '0' + month;
                if (day.length < 2) day = '0' + day;

                return [year, month, day].join('-');
            }
            var curr = new Date;
            var first = curr.getDate()
            var firstday = (new Date(curr.setDate(first))).toString();
            var options = "";
            for (var i = 0; i < 7; i++) {
                var next = new Date(curr.getTime());
                next.setDate(first - i);
                options += '<option>' + formatDate((next.toString())) + '</option>';
            }
            $("#datemenu1").append(options);

            //function show all tables
            $('#datemenu1').change(function() {
                var date = $(this).val();
                if (date != '') {
                    show_tables(date);
                } else {
                    show_tables();
                }


            });

            function show_tables(date) {

                console.log("date", date)
                $.ajax({
                    type: 'ajax',
                    url: '<?php echo site_url('Tables/table_data') ?>',
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        var i;
                        //var len = 5;
                        //var len1 = data.slice(6,11);
                        //var len1 = length - 5;
                        if (date) {
                            for (i = 0; i < data.length; i++) {
                                if (date === data[i].day && data[i].state === "seated") {
                                    html +=
                                        '<div class="col-md-2" style="text-align:right; margin-top:20px;">' +
                                        '<a style="text-decoration:none;" href="javascript:void(0);" class="item_edit" data-id="' + data[i].id + '" data-name="' + data[i].name + '" data-state="' + data[i].state + '" data-status="' + data[i].status + '" data-time="' + data[i].time_ + '" data-day="' + data[i].day + '"><img class="m-3 menu-items white" style="background-color:#5c965c;" src="<?php echo base_url() . 'assets/images/dinner-table-black.svg'; ?>" width="90" height="90"><h6 style="color:black;margin-top:-42px; margin-right:37px; ">' + data[i].name + '</h6></a>' +
                                        '</div>';

                                }
                                if (date === data[i].day && data[i].state === "empty") {
                                    html +=
                                        '<div class="col-md-2" style="text-align:right; margin-top:20px;">' +
                                        '<a style="text-decoration:none;" href="javascript:void(0);" class="item_edit" data-id="' + data[i].id + '" data-name="' + data[i].name + '" data-state="' + data[i].state + '" data-status="' + data[i].status + '" data-time="' + data[i].time_ + '"><img class="m-3 menu-items white" style="background-color:#ffffff;" src="<?php echo base_url() . 'assets/images/dinner-table-black.svg'; ?>" width="90" height="90"><h6 style="color:black;margin-top:-42px; margin-right:37px; ">' + data[i].name + '</h6></a>' +
                                        '</div>';
                                    if (date === data[i].day) {
                                        '<div class="col-md-2" style="text-align:right; margin-top:20px;">' +
                                        '<a style="text-decoration:none;" href="javascript:void(0);" class="item_edit" data-id="' + data[i].id + '" data-name="' + data[i].name + '" data-state="' + data[i].state + '" data-status="' + data[i].status + '" data-time="' + data[i].time_ + '"><img class="m-3 menu-items white" style="background-color:#5c965c;" src="<?php echo base_url() . 'assets/images/dinner-table-black.svg'; ?>" width="90" height="90"><h6 style="color:black;margin-top:-42px; margin-right:37px; ">' + data[i].name + '</h6></a>' +
                                            '</div>';
                                    }
                                }
                                if (date === data[i].day && data[i].state === "reserved") {
                                    html +=
                                        '<div class="col-md-2" style="text-align:right; margin-top:20px;">' +
                                        '<a style="text-decoration:none;" href="javascript:void(0);" class="item_edit" data-id="' + data[i].id + '" data-name="' + data[i].name + '" data-state="' + data[i].state + '" data-status="' + data[i].status + '" data-time="' + data[i].time_ + '"><img class="m-3 menu-items white" style="background-color:#608bf3;" src="<?php echo base_url() . 'assets/images/dinner-table-black.svg'; ?>" width="90" height="90"><h6 style="color:black;margin-top:-42px; margin-right:37px; ">' + data[i].name + '</h6></a>' +
                                        '</div>';
                                }
                            }
                        } else {
                            for (i = 0; i < data.length; i++) {
                                if (data[i].state === "seated") {
                                    html +=
                                        '<div class="col-md-2" style="text-align:right; margin-top:20px;">' +
                                        '<a style="text-decoration:none;" href="javascript:void(0);" class="item_edit" data-id="' + data[i].id + '" data-name="' + data[i].name + '" data-state="' + data[i].state + '" data-status="' + data[i].status + '" data-time="' + data[i].time_ + '"><img class="m-3 menu-items white" style="background-color:#5c965c;" src="<?php echo base_url() . 'assets/images/dinner-table-black.svg'; ?>" width="90" height="90"><h6 style="color:black;margin-top:-42px; margin-right:37px; ">' + data[i].name + '</h6></a>' +
                                        '</div>';


                                    // window.location = "http://localhost/restaurant_management-main/index.php/HomeScreenController/order?redirect="+data[i].name;
                                } else if (data[i].state === "empty") {
                                    html +=
                                        '<div class="col-md-2" style="text-align:right; margin-top:20px;">' +
                                        '<a style="text-decoration:none;" href="javascript:void(0);" class="item_edit" data-id="' + data[i].id + '" data-name="' + data[i].name + '" data-state="' + data[i].state + '" data-status="' + data[i].status + '" data-time="' + data[i].time_ + '"><img class="m-3 menu-items white" style="background-color:#ffffff;" src="<?php echo base_url() . 'assets/images/dinner-table-black.svg'; ?>" width="90" height="90"><h6 style="color:black;margin-top:-42px; margin-right:37px; ">' + data[i].name + '</h6></a>' +
                                        '</div>';
                                    if (date === data[i].day) {
                                        '<div class="col-md-2" style="text-align:right; margin-top:20px;">' +
                                        '<a style="text-decoration:none;" href="javascript:void(0);" class="item_edit" data-id="' + data[i].id + '" data-name="' + data[i].name + '" data-state="' + data[i].state + '" data-status="' + data[i].status + '" data-time="' + data[i].time_ + '"><img class="m-3 menu-items white" style="background-color:#5c965c;" src="<?php echo base_url() . 'assets/images/dinner-table-black.svg'; ?>" width="90" height="90"><h6 style="color:black;margin-top:-42px; margin-right:37px; ">' + data[i].name + '</h6></a>' +
                                            '</div>';
                                    }
                                } else if (data[i].state === "reserved") {
                                    html +=
                                        '<div class="col-md-2" style="text-align:right; margin-top:20px;">' +
                                        '<a style="text-decoration:none;" href="javascript:void(0);" class="item_edit" data-id="' + data[i].id + '" data-name="' + data[i].name + '" data-state="' + data[i].state + '" data-status="' + data[i].status + '" data-time="' + data[i].time_ + '"><img class="m-3 menu-items white" style="background-color:#608bf3;" src="<?php echo base_url() . 'assets/images/dinner-table-black.svg'; ?>" width="90" height="90"><h6 style="color:black;margin-top:-42px; margin-right:37px; ">' + data[i].name + '</h6></a>' +
                                        '</div>';
                                }

                            }
                        }


                        $('#show_data').html(html);
                    }

                });
            }

            //Save tables
            $('#btn_save').on('click', function() {
                var id = $('#id').val();
                var name = $('#name').val();
                var state = "empty";
                var status = "active";
                var time_ = new Date().toLocaleTimeString();
                var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                var yyyy = today.getFullYear();
                today = yyyy + '-' + mm + '-' + dd;
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Tables/save') ?>",
                    dataType: "JSON",
                    data: {
                        id: id,
                        name: name,
                        state: state,
                        status: status,
                        time_: time_,
                        day: today
                    },
                    success: function(data) {
                        $('[name="id"]').val("");
                        $('[name="name"]').val("");
                        $('[name="state"]').val("");
                        $('#Modal_Add').modal('hide');
                        if (state === "seated") {
                            window.location = "http://localhost/restaurant_management-main/index.php/HomeScreenController/order?redirect=" + name;

                        } else {
                            show_tables();
                            location.reload();
                        }

                    }
                });
                return false;
            });


            //get data for update record
            $('#show_data').on('click', '.item_edit', function() {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var state = $(this).data('state');
                var status = $(this).data('status');
                var time_ = $(this).data('time_');
                

                $('#Modal_Edit').modal('show');
                $('[name="id_edit"]').val(id);
                $('[name="name_edit"]').val(name);
                $('[name="state_edit"]').val(state);
                $('[name="status_edit"]').val(status);
                $('[name="time_edit"]').val(time_ = "<?php date_default_timezone_set('Asia/Kolkata');
                                                        echo date("h:i:sa"); ?>");

                $('#Modal_Edit').modal('show');
                $('[name="id_edit"]').val(id);
                $('[name="name_edit"]').val(name);
                var btn = document.getElementById('btn_update');
                $('#state_edit').change(function() {
                    var state = $(this).val();
                    if (state == "seated") {
                        btn.textContent = "Place Order"
                    } else {
                        btn.textContent = "Update"
                    }
                });
            });

            //update record to database
            $('#btn_update').on('click', function() {
                var id = $('#id_edit').val();
                var name = $('#name_edit').val();
                var state = $('#state_edit').val();
                var status = "active"
                var time_ = new Date().toLocaleTimeString();
                var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                var yyyy = today.getFullYear();
                today = yyyy + '-' + mm + '-' + dd;
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Tables/update') ?>",
                    dataType: "JSON",
                    data: {
                        id: id,
                        name: name,
                        state: state,
                        status: status,
                        time_: time_,
                        day: today
                    },
                    success: function(data) {
                        $('[name="id_edit"]').val("");
                        $('[name="name_edit"]').val("");
                        $('[name="state_edit"]').val("");
                        $('#Modal_Edit').modal('hide');
                        if (state === "seated") {
                            window.location = "http://localhost/restaurant_management-main/index.php/HomeScreenController/order?redirect=" + name;
                        } else {
                            show_tables();
                            location.reload();
                        }

                    }
                });
                return false;
            });

            //get data for delete record
            $('#show_data').on('click', '.item_delete', function() {
                var id = $(this).data('id');

                $('#Modal_Delete').modal('show');
                $('[name="table_delete"]').val(id);
            });

            //delete record to database
            $('#btn_delete').on('click', function() {
                var id = $('#table_delete').val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Tables/delete') ?>",
                    dataType: "JSON",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('[name="table_delete"]').val("");
                        $('#Modal_Delete').modal('hide');
                        show_tables();
                    }
                });
                return false;
            });
            $('#datepicker').keyup(function() {
                var search = $(this).val();

                console.log(search);
                if (search != '') {
                    load_data(search);
                } else {
                    load_data();
                }
            });

        });
    </script>
</body>

</html>