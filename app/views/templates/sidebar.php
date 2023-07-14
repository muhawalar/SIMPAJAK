<body>
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html">
                    <img src="<?=BASEURL;?>/images/logo-simpajak.png"
                        style="max-width: 100%; height: auto; margin-top: 50px; margin-bottom: 20px;">
                </a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?=BASEURL;?>/images/logo-mini.svg"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <!-- <div class="search-field d-none d-xl-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
              </div>
            </form>
          </div> -->
                <ul class="navbar-nav navbar-nav-right">

                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="<?=BASEURL;?>/images/profile.png" alt="image">
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">Admin</p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown font-size-sm dropdown-menu-end"
                            aria-labelledby="profileDropdown" data-x-placement="bottom-start">
                            <div class="p-3 text-center bg-primary">
                                <img class="img-avatar img-avatar48 img-avatar-thumb"
                                    src="<?=BASEURL;?>/images/profile.png" alt="">
                            </div>
                            <div class="p-2">
                                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                                    href="<?=BASEURL?>/Login/logout">
                                    <span>Log Out</span>
                                    <i class="mdi mdi-logout ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </li>


                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper ">
            <!-- partial:partials/_sidebar.html -->

            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-category mt-5 mb-6">Utama</li>
                    <li class="nav-item mb-2 mt-3">
                        <a class="nav-link" href="<?=BASEURL;?>">
                            <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item mb-2 mt-3">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="icon-bg"><i class="mdi mdi-chevron-down menu-icon"></i></span>
                            <span class="menu-title">Master</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="<?=BASEURL;?>/WajibPajak/index.php">Wajib Pajak</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?=BASEURL;?>/Notifications/index.php">Notifikasi</a></li>
                            
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item mb-2 mt-3">
                        <a class="nav-link" href="pages/icons/mdi.html">
                            <span class="icon-bg"><i class="mdi mdi-file-document menu-icon"></i></span>
                            <span class="menu-title">Laporan</span>
                        </a>
                    </li>


            </nav>