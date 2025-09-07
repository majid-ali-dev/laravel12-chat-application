<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - ChatApp</title>
    <link rel="stylesheet" href="/vendors/feather/feather.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="/usertemplate/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/images/favicon.png" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <style>
        .chat-brand-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .chat-brand-header h2 {
            color: #6c7293;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .chat-brand-header .badge {
            font-size: 12px;
            padding: 5px 10px;
        }

        .admin-login-card {
            border: 2px solid #28a745;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(40, 167, 69, 0.2);
        }

        .admin-icon {
            font-size: 20px;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5 admin-login-card">
                            <!-- Chat Application Branding -->
                            <div class="chat-brand-header">
                                <h2>💬 Chat Application</h2>
                                <span class="badge badge-success">
                                    <i class="fas fa-user-shield admin-icon"></i>Admin Login
                                </span>
                            </div>


                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <h4 class="text-center text-success">
                                <i class="fas fa-crown"></i> Admin Access
                            </h4>
                            <h6 class="font-weight-light text-center">Sign in to your admin account to manage the system
                            </h6>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('admin.check') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Admin Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter admin email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Admin Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Enter admin password" required>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">
                                    <i class="fas fa-sign-in-alt"></i> Login to Admin Panel
                                </button>
                            </form>

                            <div class="text-center mt-4 font-weight-light">
                                Don't have an admin account? <a href="/admin/register" class="text-success">Create Admin
                                    Account</a>
                            </div>

                            <div class="text-center mt-2">
                                <a href="#" class="text-warning">
                                    <i class="fas fa-lock"></i> Forgot Admin Password?
                                </a>
                            </div>

                            <div class="text-center mt-3">
                                <small class="text-muted">
                                    Regular user? <a href="/user/login" class="text-primary">User Login</a>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/js/off-canvas.js"></script>
    <script src="/js/hoverable-collapse.js"></script>
    <script src="/js/template.js"></script>
    <script src="/js/settings.js"></script>
    <script src="/js/todolist.js"></script>
</body>

</html>
