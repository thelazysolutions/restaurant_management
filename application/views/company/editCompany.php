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
                <h3>Update Company</h3>
            </div>
        </div>
        <form method="post" name="createUser" action="<?php echo base_url() . 'index.php/companycontroller/editCompany/' . $company['id']; ?>">
            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name </label>
                        <input type="text" name="name" class="form-control" value="<?php echo set_value('name', $company['name']); ?>">
                        <?php echo form_error('name')  ?>
                    </div>
                    
                    <div class="form-group">
                        <label>Phone </label>
                        <input type="text" name="phone" class="form-control" value="<?php echo set_value('phone', $company['phone']); ?>">
                        <?php echo form_error('phone')  ?>
                    </div>
                    <div class="form-group">
                        <label>Address </label>
                        <input type="text" name="address" class="form-control" value="<?php echo set_value('address', $company['address']); ?>">
                        <?php echo form_error('address')  ?>
                    </div>
                    <div class="form-group">
                        <label>GST.NO </label>
                        <input type="text" name="gst" class="form-control"  value="<?php echo set_value('gst', $company['gst_no']); ?>">
                        <?php echo form_error('gst')  ?>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Update</button>
                           <a href="<?php echo base_url() . 'index.php/companycontroller/index'; ?>" class="btn btn-secondary">Cancel</a>
                     
                    </div>
                </div>

            </div>
        </form>
    </div>
</body>

</html>