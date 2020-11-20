  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Crud Application</title>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/orderStyle.css">
  </head>

  <body>
      <div class="navbar navbar-dark bg-dark">
          <div class="container">
              <a href="#~!" class="navbar-brand">CRUD APPLICATION</a></div>
      </div>
      <div class="container" style="padding-top:10px;">
          <div class="row">
              <div class="col-6">
                  <h3>Create Supplier</h3>
              </div>
            
          </div>
          <form method="post" name="createUser" action="<?php echo base_url() . 'index.php/SupplierController/create'; ?>">
              <div class="row">

                  <div class="col-md-6">
                      <div class="form-group">
                          <label>Name </label>
                          <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>">
                          <?php echo form_error('name')  ?>
                      </div>
                      <div class="form-group">
                          <label>Email </label>
                          <input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>">
                          <?php echo form_error('email')  ?>
                      </div>
                      <div class="form-group">
                          <label>Phone </label>
                          <input type="text" name="phone" class="form-control" value="<?php echo set_value('phone'); ?>">
                          <?php echo form_error('phone')  ?>
                      </div>
                      <div class="form-group">
                          <label>item </label>
                          <input type="text" name="item" class="form-control" value="<?php echo set_value('item'); ?>">
                          <?php echo form_error('item')  ?>
                      </div>
                      <div class="form-group">
                          <label>Address </label>
                          <input type="text" name="address" class="form-control" value="<?php echo set_value('address'); ?>">
                          <?php echo form_error('address')  ?>
                      </div>
                      <div class="form-group">
                          <button class="btn btn-primary">Create</button>
                          <a href="<?php echo base_url() . 'index.php/SupplierController/index'; ?>" class="btn btn-secondary">Cancel</a>
                      </div>
                  </div>

              </div>
          </form>
      </div>
      <div class="navbar navbar-dark ">
          <div class="container">

          </div>
          <div class="container" style="padding-top:10px;">



              <div class="row">
                  <div class="col-md-12">
                      <table class="table table-striped">
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Address</th>
                              <th>Item</th>
                              <th>Edit</th>
                              <th>Delete</th>
                          </tr>
                          <?php
                            if (!empty($suppliers)) {
                                foreach ($suppliers as $supplier) { ?>
                                  <tr>
                                      <td><?php echo $supplier['id']; ?></td>
                                      <td><?php echo $supplier['name']; ?></td>
                                      <td><?php echo $supplier['email']; ?></td>
                                      <td><?php echo $supplier['phone']; ?></td>
                                      <td><?php echo $supplier['address']; ?></td>
                                      <td><?php echo $supplier['item']; ?></td>
                                      <td><a href="<?php echo base_url() . 'index.php/SupplierController/edit/' . $supplier['id'] ?>" class="btn btn-primary">Edit</a></td>
                                      <td><a href="<?php echo base_url() . 'index.php/SupplierController/delete/' . $supplier['id'] ?>" class="btn btn-danger">Delete</a></td>
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
      
  </body>

  </html>