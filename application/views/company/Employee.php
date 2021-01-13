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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/company.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css"/>

    <title>Employee</title>
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
            Employee Details
          </h1>
          <hr style="background-color: black; color: black; height: 1px;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-2">
          <!-- Add Records Modal -->
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#exampleModal">
            Add Employee
          </button>
          <a href="<?php echo base_url() . 'index.php/CompanyController' ?>" type="button" class="btn btn-outline-info btn-sm" >
            Company Details
</a>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- Add Records Form -->
                  <form action="" method="post" id="form">
                    <div class="form-group">
                    <label>Name </label>
                      <input type="text" id="employeename" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Phone </label>
                      <input type="text" id="employeephone" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Email </label>
                      <input type="email" id="employeeemail" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>designation</label>
                      <input type="text" id="employeedesignation" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>joining date </label>
                      <input type="date" id="employeejoining_date" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Birth Date </label>
                      <input type="date" id="employeebirth_date" class="form-control">
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" id="add">Add Employee</button>
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
                  <th>Designation</th>
                  <th>Joining Date</th>
                  <th>Birth Date</th>
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
            <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
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
                      <input type="text" id="edit_employeename" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Phone </label>
                      <input type="text" id="edit_employeephone" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Email </label>
                      <input type="email" id="edit_employeeemail" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>designation</label>
                      <input type="text" id="edit_employeedesignation" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>joining date </label>
                      <input type="date" id="edit_employeejoining_date" class="form-control">
                    </div>
                    <div class="form-group">
                    <label>Birth Date </label>
                      <input type="date" id="edit_employeebirth_date" class="form-control">
                    </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="update">Update Employee</button>
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

        var employeename = $("#employeename").val();
        var employeephone = $("#employeephone").val();
        var employeeemail = $("#employeeemail").val();
        var employeedesignation = $("#employeedesignation").val();
        var employeejoining_date = $("#employeejoining_date").val();
        var employeebirth_date = $("#employeebirth_date").val();

        if (employeename == "" || employeephone == "" || employeeemail == "" || employeedesignation == ""|| employeejoining_date == ""|| employeebirth_date == "") {
          alert("Please fill empty fields!");
        }else{
          $.ajax({
            url: "<?php echo base_url(); ?>index.php/EmployeeController/insert",
            type: "post",
            dataType: "json",
            data: {
                name: employeename,
              phone: employeephone,
              email:employeeemail,
              designation:employeedesignation,
              joining_date:employeejoining_date,
              dob:employeebirth_date,

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
          url:  "<?php echo base_url(); ?>index.php/EmployeeController/fetch",
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
                          { "data": "designation" },
                          { "data": "joining_date" },
                          { "data": "dob" },
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
                url: "<?php echo base_url(); ?>index.php/EmployeeController/delete",
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
          url: "<?php echo base_url(); ?>index.php/EmployeeController/edit",
          type: "post",
          dataType: "json",
          data: {
            edit_id: edit_id
          },
          success: function(data){
            if (data.responce == "success") {
                $('#edit_modal').modal('show');
                $("#edit_record_id").val(data.post.id);
                $("#edit_employeename").val(data.post.name);
                $("#edit_employeephone").val(data.post.phone);
                $("#edit_employeeemail").val(data.post.email);
                $("#edit_employeedesignation").val(data.post.designation);
                $("#edit_employeejoining_date").val(data.post.joining_date);
                $("#edit_employeebirth_date").val(data.post.dob);
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
        var edit_employeename = $("#edit_employeename").val();
        var edit_employeephone =  $("#edit_employeephone").val();
        var edit_employeeemail =  $("#edit_employeeemail").val();
        var edit_employeedesignation =  $("#edit_employeedesignation").val();
        var edit_employeejoining_date =  $("#edit_employeejoining_date").val();
        var edit_employeebirth_date =  $("#edit_employeebirth_date").val();


          $.ajax({
            url:  "<?php echo base_url(); ?>index.php/EmployeeController/update",
            type: "post",
            dataType: "json",
            data: {
              edit_record_id: edit_record_id,
              edit_employeename: edit_employeename,
              edit_employeephone: edit_employeephone,
              edit_employeeemail: edit_employeeemail,
              edit_employeedesignation: edit_employeedesignation,
              edit_employeejoining_date: edit_employeejoining_date,
              edit_employeebirth_date: edit_employeebirth_date,
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
