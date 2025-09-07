<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include necessary CSS and JS libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <style>
        .dropdown-menu {
            max-height: 400px;
            overflow-y: auto;
        }

        /* Chat Application Brand Styling */
        .navbar-brand-wrapper {
            padding-left: 2px !important;
        }

        .chat-brand {
            color: #28a745;
            font-weight: 600;
            font-size: 15px;
            text-decoration: none;
            display: flex;
            align-items: center;
            margin-left: 15px;
        }

        .chat-brand:hover {
            color: #1e7e34;
            text-decoration: none;
        }

        .chat-brand-mini {
            color: #28a745;
            font-weight: 600;
            font-size: 13px;
            text-decoration: none;
            margin-left: 13px;
        }

        .chat-brand-mini:hover {
            color: #1e7e34;
            text-decoration: none;
        }

        .chat-emoji {
            font-size: 20px;
            margin-right: 8px;
        }

        .admin-badge {
            background-color: #28a745;
            color: white;
            font-size: 9px;
            padding: 2px 6px;
            border-radius: 10px;
            margin-left: 8px;
        }
    </style>
</head>

<body>
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <!-- Updated Chat Application Brand -->
            <a class="navbar-brand brand-logo mr-5 chat-brand" href="{{ route('admin.dashboard') }}">
                Chat Application
            </a>

            <!-- Mini version for collapsed sidebar -->
            <a class="navbar-brand brand-logo-mini chat-brand-mini" href="{{ route('admin.dashboard') }}">
                Chat
            </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
            <ul class="navbar-nav mr-lg-2">
                <li class="nav-item nav-search d-none d-lg-block">
                    <div class="input-group">
                        <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                            <span class="input-group-text" id="search"></span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                        data-toggle="dropdown">
                        <i class="fas fa-bell mx-0"></i>

                    </a>

                    <b> <span id="notificationCount" class="count">&nbsp; </span> <!-- Initial value here -->
                    </b>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                        aria-labelledby="notificationDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>

                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                    <i class="ti-info-alt mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal">New Message</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">

                                </p>
                            </div>
                        </a>

                    </div>
                </li>
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        @if ($LoggedAdminInfo->picture)
                            <img src="{{ asset('storage/' . $LoggedAdminInfo->picture) }}" alt="profile"
                                class="rounded-circle" style="width: 35px; height: 35px;">
                        @else
                            <img src="/images/faces/face28.jpg" alt="profile" class="rounded-circle"
                                style="width: 35px; height: 35px;">
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="{{ route('admin.profileview') }}">
                            <i class="ti-user text-primary"></i>
                            Profile
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="GET"
                            style="display: inline;">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>

</body>

</html>
