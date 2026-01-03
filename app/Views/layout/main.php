<!doctype html>

<html
    lang="en"
    class="layout-menu-fixed layout-compact"
    data-public/assets-path="<?= base_url(); ?>public/assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Sistema Manajementu Loja Mini </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>public/assets/img/lcon-mini-store.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="<?= base_url(); ?>public/assets/vendor/fonts/iconify-icons.css" />

    <!-- Core CSS -->
    <!-- build:css public/assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="<?= base_url(); ?>public/assets/vendor/css/core.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/demo.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>public/assets/css/online.css" />

    <!-- Vendors CSS -->

    <link rel="stylesheet" href="<?= base_url(); ?>public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- endbuild -->

    <link rel="stylesheet" href="<?= base_url(); ?>public/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?= base_url(); ?>public/assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="<?= base_url(); ?>public/assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <a class="navbar-brand">
                                <img src="<?= base_url(); ?>modifika_frontend/images/main-logo.png" class="logo">
                            </a>
                        </span>

                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx bx-chevron-left d-block d-xl-none align-middle"></i>
                    </a>
                </div>

                <div class="menu-divider mt-0"></div>
                <li class="menu-item">
                    <a href="<?= base_url('dashboard'); ?>" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-smile"></i>
                        <div class="text-truncate" data-i18n="Tables">Dashboard</div>
                    </a>
                </li>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">

                    <!-- Apps & Pages -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Form Dadus</span>
                    </li>
                    <li class="menu-item">
                        <a href="<?= base_url('kategoria'); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-category"></i>
                            <div class="text-truncate" data-i18n="Tables">Kategoria</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?= base_url('kostumer'); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-group"></i>
                            <div class="text-truncate" data-i18n="Tables">Kostumer</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?= base_url('subkategoria'); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-category-alt"></i>
                            <div class="text-truncate" data-i18n="Tables">Sub Kategoria</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?= base_url('produtu'); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-package"></i>
                            <div class="text-truncate" data-i18n="Tables">Produtu</div>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a href="<?= base_url('fornesedor'); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-buildings"></i>
                            <div class="text-truncate" data-i18n="Basic">Fornesedor</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?= base_url('kompras'); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-cart-download"></i>
                            <div class="text-truncate" data-i18n="Basic">Kompras</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?= base_url('kompras_item') ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-list-plus"></i>
                            <div class="text-truncate" data-i18n="Basic">Kompras Item</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?= base_url('vendas'); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-receipt"></i>
                            <div class="text-truncate" data-i18n="Basic">Vendas</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?= base_url('vendas_item'); ?>" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div class="text-truncate" data-i18n="Basic">Vendas Item</div>
                        </a>
                    </li>


                    <!-- Misc -->

                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav
                    class="layout-navbar container-xxl navbar-detached navbar navbar-expand-xl align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                            <i class="icon-base bx bx-menu icon-md"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center justify-content-end" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center me-auto">
                            <div class="nav-item d-flex align-items-center">
                                <span class="w-px-22 h-px-22"><i class="icon-base bx bx-search icon-md"></i></span>
                                <input
                                    type="text"
                                    class="form-control border-0 shadow-none ps-1 ps-sm-2 d-md-block d-none"
                                    placeholder="Search..."
                                    aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-md-auto">
                            <!-- Place this tag where you want the button to render. -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a
                                    class="nav-link dropdown-toggle hide-arrow p-0"
                                    href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="position-relative d-inline-block">
                                        <img src="<?= base_url(); ?>public/assets/img/profile.png"
                                            alt="Avatar"
                                            class="w-px-40 h-auto rounded-circle" />
                                        <!-- Status Indicator -->
                                        <span id="statusIndicator" class="status-indicator online"></span>
                                    </div>

                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3 position-relative">
                                                    <img src="<?= base_url('public/assets/img/profile.png'); ?>" alt=""
                                                        class="w-px-40 h-auto rounded-circle" />
                                                    <!-- Status Indicator -->
                                                    <span id="statusIndicator" class="status-indicator online"></span>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-0">Admin</h6>
                                                    <small id="statusText">Online</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class=" dropdown-divider my-1">
                                        </div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url('/auth/logout'); ?>">
                                            <i class="icon-base bx bx-power-off icon-md me-3"></i>
                                            <span>Log Out</span>
                                        </a>
                                    </li>
                                </ul>


                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper container-xxl p-0">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <?= $this->renderSection('content') ?>
                    </div>
                </div>
                <!-- Overlay -->
            </div>

            <script src="<?= base_url(); ?>public/assets/vendor/libs/jquery/jquery.js"></script>

            <script src="<?= base_url(); ?>public/assets/vendor/libs/popper/popper.js"></script>
            <script src="<?= base_url(); ?>public/assets/vendor/js/bootstrap.js"></script>

            <script src="<?= base_url(); ?>public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

            <script src="<?= base_url(); ?>public/assets/vendor/js/menu.js"></script>

            <!-- endbuild -->

            <!-- Vendors JS -->
            <script src="<?= base_url(); ?>public/assets/vendor/libs/apex-charts/apexcharts.js"></script>

            <!-- Main JS -->

            <script src="<?= base_url(); ?>public/assets/js/main.js"></script>

            <!-- Page JS -->
            <script src="<?= base_url(); ?>public/assets/js/dashboards-analytics.js"></script>

            <!-- Place this tag before closing body tag for github widget button. -->
            <script async defer src="https://buttons.github.io/buttons.js"></script>


            <!-- parte code sweetalert2 -->
            <link href="<?= base_url();; ?>public/sweetalert2/sweetalert2.min.css" rel="stylesheet">
            <script src="<?= base_url();; ?>public/sweetalert2/sweetalert2.min.js"></script>


            <!-- pagination and show entries -->
            <script src="<?= base_url();; ?>public/assets/js/tampilan_tabel.js"></script>


            <!-- animasaun informatsaun -->
            <script>
                var flash = $('#flash').data('flash');
                if (flash) {
                    Swal.fire({
                        icon: 'success',
                        type: 'success',
                        title: 'Parabens',
                        confirmButtonColor: '#3085d6',
                        text: flash

                    })
                }
                $(document).on('click', '#btn-hamos', function(e) {

                    e.preventDefault();;
                    const link = $(this).attr('href');
                    Swal.fire({
                        icon: 'question',
                        title: 'Atensaun!',
                        text: "Hakarak hamos dadus ida nee?",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sim, hamos!'
                    }).then((result) => {
                        if (result.value) {
                            document.location.href = link;
                        }
                    })

                })
            </script>


</body>

</html>