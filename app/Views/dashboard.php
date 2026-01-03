<?= $this->extend("layout\main") ?>
<?= $this->section("content") ?>
<div class="container mt-5">
    <div class="row">
        <!-- Total Orders Card -->
        <div class="col-md-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <!-- Icon -->
                        <div class="avatar bg-primary text-white rounded-circle p-3">
                            <i class="fas fa-mug-saucer fa-lg"></i>
                        </div>
                        <!-- Dropdown opsi -->
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="produtuOpt" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="produtuOpt">
                                <a class="dropdown-item" href="<?= base_url('produtu'); ?>">View More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Body Card -->
                    <p class="mb-1 text-muted">Produtu</p>
                    <h4 class="mb-2"><?= $total_produtu ?></h4>
                </div>
            </div>
        </div>

        <!-- Total Kostumer Card -->
        <div class="col-md-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <!-- Icon -->
                        <div class="avatar bg-success text-white rounded-circle p-3">
                            <i class="fas fa-receipt fa-lg"></i>
                        </div>
                        <!-- Dropdown opsi -->
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="kostumerOpt" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="kostumerOpt">
                                <a class="dropdown-item" href="<?= base_url('kostumer'); ?>">View More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Body Card -->
                    <p class="mb-1 text-muted">Kostumer</p>
                    <h4 class="mb-2"><?= $total_kostumer ?></h4>
                </div>
            </div>
        </div>

        <!-- Total Vendas Item Card -->
        <div class="col-md-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <!-- Icon -->
                        <div class="avatar bg-warning text-white rounded-circle p-3">
                            <i class="fas fa-file-contract fa-lg"></i>
                        </div>
                        <!-- Dropdown opsi -->
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="vendasOpt" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="vendasOpt">
                                <a class="dropdown-item" href="<?= base_url('vendas_item'); ?>">View More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Body Card -->
                    <p class="mb-1 text-muted">Vendas Item</p>
                    <h4 class="mb-2"><?= $total_vendas_item ?></h4>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <!-- Icon -->
                        <div class="avatar bg-danger text-white rounded-circle p-3">
                            <i class="fas fa-money-bill-wave fa-lg"></i>
                        </div>
                        <!-- Dropdown opsi -->
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="fornesedorOpt" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="fornesedorOpt">
                                <a class="dropdown-item" href="<?= base_url('fornesedor'); ?>">View More</a>
                            </div>
                        </div>
                    </div>
                    <!-- Body Card -->
                    <p class="mb-1 text-muted">Fornesedor</p>
                    <h4 class="mb-2"><?= $total_fornesedor ?></h4>

                </div>
            </div>
        </div>

    </div>
</div>

<link href="<?= base_url() ?>public/assets/css/card_dashboard.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<?= $this->endSection() ?>