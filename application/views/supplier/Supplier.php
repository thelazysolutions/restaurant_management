<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Toastr -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/company.css">

    <title>Suppliers</title>
  </head>
  <body>
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
                <a href="<?php echo base_url() . 'index.php/HomeScreenController' ?>"><i style="color:white; font-size:45px; padding: 6px 6px;" class="fas fa-home"></i></a>
                <a href="<?php echo base_url() . 'index.php/Help' ?>"><i style="color:white; font-size:45px; padding: 6px 6px;" class="fas fa-question"></i></a>
            </div>
        </nav>
    <div class="full">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">
            Supplier Details
          </h1>
          <hr style="background-color: black; color: black; height: 1px;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-2">
          <!-- Add Records Modal -->
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#exampleModal">
            Add Suppliers
          </button>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Supplier</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- Add Records Form -->
                  <form action="" method="post" id="form">
                    <div class="form-group">
                    <label>Name </label>
                      <input type="text" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Email </label>
                      <input type="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Phone </label>
                      <input type="text" id="phone" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Item </label>
                      <input type="text" id="item" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Address</label>
                      <input type="text" id="address" class="form-control">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" id="add">Add Supplier</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-4">
          <div class="table-responsive" style="overflow: hidden;">
            <table class="table" id="records">
              <thead>
                <tr>
                <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Item</th>
                  <th>Action</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>

    <!-- Edit Record Modal -->
    <div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit SUpplier</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Edit Record Form -->
            <form action="" method="post" id="edit_form">
              <input type="hidden" id="edit_record_id" name="edit_record_id" value="">
              <div class="form-group">
                    <label>Name </label>
                      <input type="text" id="edit_name" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Email </label>
                      <input type="email" id="edit_email" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Phone </label>
                      <input type="text" id="edit_phone" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Item </label>
                      <input type="text" id="edit_item" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Address</label>
                      <input type="text" id="edit_address" class="form-control">
                    </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="update">Update Supplier</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Toastr -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/js/all.min.js"></script>
    <!-- DataTables -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

    <!-- Sweet Alert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        let sidebar = document.querySelector("#sidebar");
        let sidebarToggleBtn = document.querySelector("#sidebar #toggle-btn");
        sidebarToggleBtn.addEventListener("click", function() {
            sidebar.classList.toggle("active")
        });
    </script>
    <!-- Add Records -->
    <script>
      $(document).on("click", "#add", function(e){
        e.preventDefault();

        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var address = $("#address").val();
        var item = $("#item").val();

        if (name == "" || phone == "" || email == "" || address == ""|| item == "") {
          alert("Please fill empty fields!");
        }else{
          $.ajax({
            url: "<?php echo base_url(); ?>index.php/SupplierController/insert",
            type: "post",
            dataType: "json",
            data: {
                name: name,
              phone: phone,
              email:email,
              address:address,
              item:item,

            },
            success: function(data){
              if (data.responce == "success") {
                $('#records').DataTable().destroy();
                fetch();
                $('#exampleModal').modal('hide');
                toastr["success"](data.message);
              }else{
                toastr["error"](data.message);
              }

            }
          });

          $("#form")[0].reset();

        }

      });

      // Fetch Records

      function fetch(){
        $.ajax({
          url:  "<?php echo base_url(); ?>index.php/SupplierController/fetch",
          type: "post",
          dataType: "json",
          success: function(data){
            if (data.responce == "success") {

                var i = "1";
                  $('#records').DataTable( {
                      "data": data.posts,
                      "responsive": true,
                      dom: 
                          "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                          "<'row'<'col-sm-12'tr>>" +
                          "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    
                      "columns": [
                          { "data": "name" },
                          { "data": "email" },
                          { "data": "phone" },
                          { "data": "address" },
                          { "data": "item" },
                          { "render": function ( data, type, row, meta ) {
                            var a = `
                                    <a href="#" value="${row.id}" id="del" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
                                    <a href="#" value="${row.id}" id="edit" class="btn btn-sm btn-outline-success"><i class="fas fa-edit"></i></a>
                            `;
                            return a;
                          } }
                      ]
                  } );                
              }else{
                toastr["error"](data.message);
              }

          }
        });

      }

      fetch();

      // Delete Record

      $(document).on("click", "#del", function(e){
        e.preventDefault();

        var del_id = $(this).attr("value");

        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger mr-2'
          },
          buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, cancel!',
          reverseButtons: true
        }).then((result) => {
          if (result.value) {

              $.ajax({
                url: "<?php echo base_url(); ?>index.php/SupplierController/delete",
                type: "post",
                dataType: "json",
                data: {
                  del_id: del_id
                },
                success: function(data){
                  if (data.responce == "success") {
                      $('#records').DataTable().destroy();
                      fetch();
                      swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      );
                  }else{
                      swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your imaginary file is safe :)',
                        'error'
                      );
                  }

                }
              });


            
          } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
          ) {
            swalWithBootstrapButtons.fire(
              'Cancelled',
              'Your imaginary file is safe :)',
              'error'
            )
          }
        });

      });

      // Edit Record

      $(document).on("click", "#edit", function(e){
        e.preventDefault();

        var edit_id = $(this).attr("value");

        $.ajax({
          url: "<?php echo base_url(); ?>index.php/SupplierController/edit",
          type: "post",
          dataType: "json",
          data: {
            edit_id: edit_id
          },
          success: function(data){
            if (data.responce == "success") {
                $('#edit_modal').modal('show');
                $("#edit_record_id").val(data.post.id);
                $("#edit_name").val(data.post.name);
                $("#edit_email").val(data.post.email);
                $("#edit_address").val(data.post.address);
                $("#edit_item").val(data.post.item);
                $("#edit_phone").val(data.post.phone);
              }else{
                toastr["error"](data.message);
              }
          }
        });

      });

      // Update Record

      $(document).on("click", "#update", function(e){
        e.preventDefault();

        var edit_record_id = $("#edit_record_id").val();
        var edit_name = $("#edit_name").val();
        var edit_email =  $("#edit_email").val();
        var edit_address =  $("#edit_address").val();
        var edit_item =  $("#edit_item").val();
        var edit_phone =  $("#edit_phone").val();


          $.ajax({
            url:  "<?php echo base_url(); ?>index.php/SupplierController/update",
            type: "post",
            dataType: "json",
            data: {
              edit_record_id: edit_record_id,
              edit_name: edit_name,
              edit_email: edit_email,
              edit_address: edit_address,
              edit_item: edit_item,
              edit_phone: edit_phone,
            },
            success: function(data){
              if (data.responce == "success") {
                $('#records').DataTable().destroy();
                fetch();
                $('#edit_modal').modal('hide');
                toastr["success"](data.message);
              }else{
                toastr["error"](data.message);
              }
            }
          });

        

      });
    </script>
  </body>
</html>
