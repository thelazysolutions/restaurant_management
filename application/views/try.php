* {
	margin: 0px;
	padding: 0px;
}
.navbar {
	height: 60px;
	background: #111;
	z-index: 1;
}
#sidebar {
	position: absolute;
	top: 0px;
	left: -200px;
	width: 200px;
	height: 100%;
	background: #111;
	transition: left 500ms ease-in-out;
}
#sidebar.active {
	left: 0px;
}
#sidebar .links .link {
	padding: 10px;
	border-bottom: 1px solid #222;
}
#sidebar .links .link a {
	color: #eee;
	text-decoration: none;
	font-family: "Raleway";
}
#sidebar .links .link:hover {
	background: #222;
	cursor: pointer;
}
#sidebar #toggle-btn {
	width: 40px;
	height: 40px;
	position: absolute;
	background: #111;
	top: 10px;
	right: -60px;
	width: 40px;
	cursor: pointer;
}
#sidebar #toggle-btn span {
	width: 65%;
	height: 4px;
	background: #eee;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%, -50%);
}
#sidebar #toggle-btn span:nth-child(1) {
	top: 30%;
}
#sidebar #toggle-btn span:nth-child(3) {
	top: 70%;
}
#sidebar.active #toggle-btn span:nth-child(1) {
	top: 50%;
	transform: translate(-50%, -50%) rotate(45deg);
}
#sidebar.active #toggle-btn span:nth-child(2) {
	display: none;
}
#sidebar.active #toggle-btn span:nth-child(3) {
	top: 50%;
	transform: translate(-50%, -50%) rotate(-45deg);
}

/* body */
.left-side,
.right-side {
	height: 100%;
	width: 100%;
}
.left-side {
	background-color: white;
}
.right-side {
	background-color: #cae7d5;
}
/* search */
.main {
	width: 50%;
	margin: 50px auto;
}

/* Bootstrap 4 text input with search icon */

.has-search .form-control {
	padding-left: 2.375rem;
	background: #edeef1;
}

.has-search .form-control-feedback {
	position: absolute;
	
	display: block;
	width: 2.375rem;
	height: 2.375rem;
	line-height: 2.375rem;
	text-align: center;
	pointer-events: none;
	color: #aaa;
}
.form-control {
	border: 0px solid #ced4da;
}

/* table */
.table thead td,
.table thead th {
	width: 60%;
}
th,
td {
	padding: 7px !important;
}
.table {
	margin-bottom: 0px !important;
}
/* table1 */
.tableone thead td,
.table thead th {
	border-bottom: 1px solid #5c965c;
}
.tableone th {
	color: #ffffff;
}
.tableone .head {
	background: #5c965c;
}
.tableone .col1 {
	background: #7bca7b;
	border-bottom: 1px solid #5c965c;
}
.tableone .col2 {
	background: #71b471;
	border-bottom: 1px solid #5c965c;
}
/* table2 */
.tabletwo thead td,
.table thead th {
	width: 60%;
	border-bottom: 1px solid #5c965c;
}
.tabletwo .head {
	background: #ffffff;
}
.tabletwo .col1 {
	background: #cae7d5;
	border-bottom: 1px solid #b5d2c0;
}
.tabletwo .col2 {
	background: #b9d4c3;
	border-bottom: 1px solid #afcab9;
}
/* table3 */
.tablethree thead td,
.table thead th {
	width: 60%;
	border-bottom: 1px solid #5c965c;
}
.tablethree .head {
	background: #6766cc;
}
.tablethree .col1 {
	background: #6599ff;
	border-bottom: 1px solid #608bf3;
}
.tablethree .col2 {
	background: #6665ff;
	border-bottom: 1px solid #6665f7;
}
/* last icons on left*/
.icon {
	margin-top: 10px;
	padding-left: 10px;
	padding-right: 10px;
	border-bottom: 1px solid black;
}
a.right {
	float: right;
}
.menu-items {
	margin-bottom: 8px;
}


/* right side */
.right-border {
    border-bottom: 1px solid #c1e0ce;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
}
















<!-- html



-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>restaurant_management</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?> ">
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/tableBooking.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">


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
    </nav>
    <!-- nav end -->
    <div class="row no-gutters">
        <!-- left side -->
        <div class="col-md-4 no-gutters">
            <div class="left-side">
                <!-- search icon -->
                <div class=" has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <!-- table 1 -->
                <table class="table tableone">
                    <thead>
                        <tr class="head">
                            <th scope="col">Seated</th>
                            <th scope="col">6</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col1">Table No.1</td>
                            <td class="col2">01:00PM</td>
                        </tr>
                        <tr>
                            <td class="col1">Table No.2</td>
                            <td class="col2">01:00PM</td>
                        </tr>
                        <tr>
                            <td class="col1">Table No.2</td>
                            <td class="col2">01:00PM</td>
                        </tr>
                        <tr>
                            <td class="col1">Table No.2</td>
                            <td class="col2">01:00PM</td>
                        </tr>

                    </tbody>
                </table>
                <!-- table 2 -->
                <table class="table tabletwo ">
                    <thead>
                        <tr class="head">
                            <th scope="col">Empty</th>
                            <th scope="col">5</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col1">Mark</td>
                            <td class="col2">Mark</td>
                        </tr>
                        <tr>
                            <td class="col1">Jacob</td>
                            <td class="col2">Mark</td>
                        </tr>
                        <tr>
                            <td class="col1">Table No.2</td>
                            <td class="col2">01:00PM</td>
                        </tr>
                        <tr>
                            <td class="col1">Table No.2</td>
                            <td class="col2">01:00PM</td>
                        </tr>

                    </tbody>
                </table>
                <!-- table 3 -->
                <table class="table tablethree">
                    <thead>
                        <tr class="head">
                            <th scope="col">Reserved</th>
                            <th scope="col">3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col1">Mark</td>
                            <td class="col2">Mark</td>
                        </tr>
                        <tr>
                            <td class="col1">Table No.2</td>
                            <td class="col2">01:00PM</td>
                        </tr>
                        <tr>
                            <td class="col1">Table No.2</td>
                            <td class="col2">01:00PM</td>
                        </tr>
                        <tr>
                            <td class="col1">Jacob</td>
                            <td class="col2">Mark</td>
                        </tr>

                    </tbody>
                </table>
                <div class="icon">
                    <a href="#" class="left"><img class="menu-items " src="<?php echo base_url('assets/images/Invoices.png'); ?>" alt="Girl in a jacket" width="30" height="30"></a>
                    <a href="#" class="right"><img class="menu-items " src="<?php echo base_url('assets/images/iconleft.png'); ?>" alt="Girl in a jacket" width="30" height="30"></a>

                </div>
            </div>

        </div>
        <!-- right side -->
        <div class="col-md-8 no-gutters">
            <div class="right-side">
                <div class="right-border">
                    
                </div>

            </div>
        </div>
    </div>


    <script>
        let sidebar = document.querySelector("#sidebar");
        let sidebarToggleBtn = document.querySelector("#sidebar #toggle-btn");
        sidebarToggleBtn.addEventListener("click", function() {
            sidebar.classList.toggle("active")
        });
    </script>
</body>

</html>