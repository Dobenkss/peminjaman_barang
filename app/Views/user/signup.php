<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
</head>

<body>
    <h1>Sign Up</h1>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sign Up</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>/sb_admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>/sb_admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Sign Up</h1>
                                    </div>
                                    <form action="/user/signup" method="post">
                                        <label for="nama">Nama:</label>
                                        <input class="form-control" type="text" name="nama" id="nama">
                                        <br><br>
                                        <label for="email">Email:</label>
                                        <input class="form-control" type="email" name="email" id="email">
                                        <br><br>
                                        <label for="password">Password:</label>
                                        <input class="form-control" type="password" name="password" id="password">
                                        <br><br>
                                        <input type="submit" value="Register" class="btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>/sb_admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/sb_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>/sb_admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>/sb_admin/js/sb-admin-2.min.js"></script>

</body>

</html>