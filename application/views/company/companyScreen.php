<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
</head>

<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#~!" class="navbar-brand">CRUD APPLICATION</a></div>
    </div>
    <div class="container" style="padding-top:10px;">
        <div class="row">
            <div class="col-6">
            <h3>Add Company</h3>
            <a href="<?php echo base_url() . 'index.php/companycontroller/createCompany/' ?>" class="btn btn-primary">Add</a>
            </div>

        </div>
        <div class="container" style="padding-top:10px;">
        <div class="row">
            <div class="col-6">
                <h3>View Company</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>address</th>
                        <th>GST.NO</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    if (!empty($company)) {
                        foreach ($company as $comp) { ?>
                            <tr>
                                <td><?php echo $comp['id']; ?></td>
                                <td><?php echo $comp['name']; ?></td>
                                <td><?php echo $comp['phone']; ?></td>
                                <td><?php echo $comp['address']; ?></td>
                                <td><?php echo $comp['gst_no']; ?></td>
                                <td><a href="<?php echo base_url() . 'index.php/companycontroller/editCompany/' . $comp['id'] ?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="<?php echo base_url() . 'index.php/companycontroller/deleteCompany/' . $comp['id'] ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                        <?php
                        }
                    } else {



                        ?>
                        <tr>
                            <td colspan="5">Records Not Found</td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
        
    </div>
    <div class="container" style="padding-top:10px;">
        <div class="row">
            <div class="col-6">
            <h3>Add employee</h3>
            <a href="<?php echo base_url() . 'index.php/companycontroller/createEmployee/' ?>" class="btn btn-primary">Add</a>
            </div>

        </div>
        
    </div>





    <div class="container" style="padding-top:10px;">
        <div class="row">
            <div class="col-6">
                <h3>View Employee</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Designation</th>
                        <th>joiningdate</th>
                        <th>birthday</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    if (!empty($companyEmployee)) {
                        foreach ($companyEmployee as $employee) { ?>
                            <tr>
                                <td><?php echo $employee['id']; ?></td>
                                <td><?php echo $employee['name']; ?></td>
                                <td><?php echo $employee['phone']; ?></td>
                                <td><?php echo $employee['email']; ?></td>
                                <td><?php echo $employee['designation']; ?></td>
                                <td><?php echo $employee['joining_date']; ?></td>
                                <td><?php echo $employee['dob']; ?></td>
                                <td><a href="<?php echo base_url() . 'index.php/companycontroller/editEmployee/' . $employee['id'] ?>" class="btn btn-primary">Edit</a></td>
                                <td><a href="<?php echo base_url() . 'index.php/companycontroller/deleteEmployee/' . $employee['id'] ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                        <?php
                        }
                    } else {



                        ?>
                        <tr>
                            <td colspan="5">Records Not Found</td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>