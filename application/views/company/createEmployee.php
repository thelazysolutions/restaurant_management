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
        <div class="container" style="padding-top:10px;">
        <div class="row">
            <div class="col-6">
                <h3>Add employee</h3>
            </div>

        </div>
        <form method="post" name="createUser" action="<?php echo base_url() . 'index.php/companycontroller/createEmployee'; ?>">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name </label>
                        <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>">
                        <?php echo form_error('name')  ?>
                    </div>
                    <div class="form-group">
                        <label>Phone </label>
                        <input type="text" name="phone" class="form-control" value="<?php echo set_value('phone'); ?>">
                        <?php echo form_error('phone')  ?>
                    </div>
                    <div class="form-group">
                        <label>Email </label>
                        <input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>">
                        <?php echo form_error('email')  ?>
                    </div>
                    <div class="form-group">
                        <label>designation </label>
                        <input type="text" name="designation" class="form-control" value="<?php echo set_value('designation'); ?>">
                        <?php echo form_error('designation')  ?>
                    </div>
                    <div class="form-group">
                        <label>joining date </label>
                        <input type="date" name="joining_date" class="form-control" value="<?php echo set_value('joining_date'); ?>">
                        <?php echo form_error('joining_date')  ?>
                    </div>
                    <div class="form-group">
                        <label>birth date </label>
                        <input type="date" name="dob" class="form-control" value="<?php echo set_value('dob'); ?>">
                        <?php echo form_error('dob')  ?>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Create</button>
                        <a href="<?php echo base_url() . 'index.php/companycontroller/index/' ?>" class="btn btn-primary">Cancel</a>
                    </div>
                </div>

            </div>
        </form>
    </div>

        </div>
        
    </div>





  

</body>

</html>