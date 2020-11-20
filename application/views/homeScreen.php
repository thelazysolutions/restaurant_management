<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>restaurant_management</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?> ">
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/circletype.min.js"></script>

</head>

<body>
   <a href="<?php echo base_url() . 'index.php/Tables' ?>"> <div class="innercircle" id="innercircle">
        <i class="fas fa-chart-bar" id="plus"></i>
        <h1>SALES</h1>
    </div></a>
    <div class="outercircle">
        <ul class="lines">
            <li><a href="#"><img class="menu-items rotate1" src="<?php echo base_url('assets/images/Invoices.png'); ?>" alt="Girl in a jacket" width="60" height="60"></a></li>
            <li><a href="#"><img class="menu-items rotate2" src="<?php echo base_url('assets/images/Products.png'); ?>" alt="Girl in a jacket" width="60" height="60"></a></li>
            <li><a href="#"><img class="menu-items rotate3" src="<?php echo base_url('assets/images/Reports.png'); ?>" alt="Girl in a jacket" width="60" height="60"></a></li>
            <li><a href="#"><img class="menu-items rotate4" src="<?php echo base_url('assets/images/Inventory.png'); ?>" alt="Girl in a jacket" width="60" height="60"></a></li>
            <li><a href="#"><img class="menu-items rotate5" src="<?php echo base_url('assets/images/Company.png'); ?>" alt="Girl in a jacket" width="60" height="60"></a></li>
            <li><a href="#"><img class="menu-items rotate6" src="<?php echo base_url('assets/images/Suppliers.png'); ?>" alt="Girl in a jacket" width="60" height="60"></a></li>
        </ul>
    </div>
    <div id="curved1" style="bottom: 50vh;
  height: 1.80761em;
  position: fixed;
  left: 0px;
  right: 0px;
  top: 0px;
  margin: auto;">
    <a class="anchor1" style="color: black;" href="<?php echo base_url() . 'index.php/inventory' ?>">I N V E N T O R Y</a>
        
    </div>
    <div id="curved2" style=" bottom: 0px;
    /* position: relative; */
    height: 1.80761em;
    position: fixed;
    left: 0px;
    right: 0px;
    top:50vh;
    margin: auto;">
    <a class="anchor2" style="color: black;" href="<?php echo base_url() . 'index.php/reports' ?>">R E P O R T S</a>
        
    </div>
    <div class="text1">
        <h6><a class="anchor3" style="color: black; text-decoration: none;" href="<?php echo base_url() . 'index.php/invoices' ?>">INVOICES</a></h6>
        <h6><a class="anchor4" style="color: black; text-decoration: none;" href="<?php echo base_url() . 'index.php/CompanyController' ?>">COMPANY</a></h6>

    </div>
    <div class="text2">
        <h6><a class="anchor5" style="color: black; text-decoration: none;" href="<?php echo base_url() . 'index.php/ProductScreenController' ?>">PRODUCTS</a></h6>
        <h6><a class="anchor6" style="color: black; text-decoration: none;" href="<?php echo base_url() . 'index.php/SupplierController' ?>">SUPPLIERS</a></h6>
    </div>




    <script>
        new CircleType(document.getElementById('curved1'))
            .radius(300);
        new CircleType(document.getElementById('curved2'))
            .dir(-1)
            .radius(384);
    </script>
</body>

</html>
