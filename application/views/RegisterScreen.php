<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Template</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/login.css'; ?>">
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 login-section-wrapper">
                    <div class="brand-wrapper">
                        <img src="assets/images/logo.svg" alt="logo" class="logo">
                    </div>
                    <div class="login-wrapper my-auto">
                        <h1 class="login-title">Register</h1>
                        <form method="post" name="createUser" action="<?php echo base_url() . 'index.php/UserController/create'; ?>">
                            <div class="form-group">
                                <div class="form-group mb-4">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="enter your name">
                                    <?php echo "<span style='color:red;'>".form_error('name') ."</span>"   ?>
                                </div>
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
                                <?php echo "<span style='color:red;'>".form_error('email')  ."</span>"   ?>
                            </div>

                            <div class="form-group mb-4">
                                <label for="designation">Designation</label>
                                <input type="text" name="designation" id="designation" class="form-control" placeholder="enter your designation">
                                <?php echo "<span style='color:red;'>".form_error('designation')."</span>"   ?>
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
                                <?php echo "<span style='color:red;'>".form_error('password') ."</span>"   ?>
                            </div>
                            <input name="register" id="register" class="btn btn-block login-btn" type="submit" value="Register">
                        </form>
                        <p class="login-wrapper-footer-text">already have an account? <a href="<?php echo base_url() . 'index.php/UserController' ?>" class="text-reset">Login</a></p>
                    </div>
                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">

                    <img class="login-img" src="<?php echo base_url('assets/images/eiliv-sonas-aceron-ZuIDLSz3XLg-unsplash.jpg'); ?>" alt="Girl in a jacket">
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>