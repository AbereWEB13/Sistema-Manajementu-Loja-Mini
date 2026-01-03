<?= $this->extend('layout\main') ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Update fornesedor</h5>
                </div>
                <div class="card-body">
                    <?php if (session()->getFlashdata('errors')): ?>
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                    <p>Error: <?= esc($error) ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url('fornesedor/update') ?>" method="post">
                        <input type="hidden" name="id_fornesedor" value="<?= $fornesedor['id_fornesedor'] ?>">
                        <div class="row">

                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label class="form-label" for="naran_fornesedor">
                                        <i class="fa-solid fa-truck me-2"></i> Naran Fornesedor
                                    </label>
                                    <input type="text" class="form-control" id="basic-default-company" name="naran_fornesedor" value="<?= $fornesedor['naran_fornesedor'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="telemovel">
                                        <i class="fa-solid fa-phone me-2"></i> Numeru Telemovel
                                    </label>
                                    <input type="text" class="form-control" id="basic-default-company" name="email" value="<?= $fornesedor['email'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="email">
                                        <i class="fa-solid fa-envelope me-2"></i> Email
                                    </label>
                                    <input type="text" class="form-control" id="basic-default-company" name="telemovel" value="<?= $fornesedor['telemovel'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="enderesu">
                                        <i class="fa-solid fa-location-dot me-2"></i> Enderesu
                                    </label>
                                    <input type="text" class="form-control" id="basic-default-company" name="enderesu" value="<?= $fornesedor['enderesu'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="estatutu">
                                        <i class="fa-solid fa-toggle-on me-2"></i> Estatutu
                                    </label>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="estatutu" id="membershipRadios1" value="ativu" class="custom-switch-input" <?= $fornesedor['estatutu'] == 'ativu' ? 'checked' : '' ?>>
                                                    Ativu
                                                    <i class="input-helper"></i></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="estatutu" id="membershipRadios2" value="la_ativu" class="custom-switch-input" <?= $fornesedor['estatutu'] == 'la_ativu' ? 'checked' : '' ?>>
                                                    La Ativu
                                                    <i class="input-helper"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Edit
                            <i class="typcn typcn-document btn-icon-append"></i>
                        </button>
                        <a href="<?= base_url('fornesedor') ?>" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<?= $this->endSection() ?>