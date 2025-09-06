<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration - ChatApp</title>
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

        .admin-registration-card {
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
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5 admin-registration-card">
                            <!-- Chat Application Branding -->
                            <div class="chat-brand-header">
                                <h2>💬 Chat Application</h2>
                                <span class="badge badge-success">
                                    <i class="fas fa-user-shield admin-icon"></i>Admin Registration
                                </span>
                            </div>

                            <h4 class="text-center text-success">
                                <i class="fas fa-crown"></i> Join as Administrator
                            </h4>
                            <h6 class="font-weight-light text-center">Create your admin account to manage the chat
                                system</h6>

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('admin.save') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Administrator Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter admin name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Admin Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter admin email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Admin Password (min. 5 characters)</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Create admin password" required>
                                </div>

                                <button type="submit" class="btn btn-success btn-block">
                                    <i class="fas fa-user-plus"></i> Create Admin Account
                                </button>
                            </form>

                            <div class="text-center mt-4 font-weight-light">
                                Already have an admin account? <a href="/admin/login" class="text-success">Admin
                                    Login</a>
                            </div>

                            <div class="text-center mt-3">
                                <small class="text-muted">
                                    Regular user? <a href="/user/register" class="text-primary">User Registration</a>
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
