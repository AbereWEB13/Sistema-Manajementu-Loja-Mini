<?= $this->extend('layout\main') ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Update kostumer</h5>
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
                    <form action="<?= base_url('kostumer/update') ?>" method="post">
                        <input type="hidden" name="id_kostumer" value="<?= $kostumer['id_kostumer'] ?>">
                        <div class="row">

                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-company"><i class="fa-solid fa-user me-2"></i> Naran Kostumer
                                    </label>
                                    <input type="text" class="form-control" id="basic-default-company" name="naran_kostumer" value="<?= $kostumer['naran_kostumer'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-email">
                                        <i class="fa-solid fa-envelope me-2"></i> Email
                                    </label>
                                    <input type="text" class="form-control" id="basic-default-company" name="email" value="<?= $kostumer['email'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-telemovel"><i class="fa-solid fa-phone me-2"></i> Numeru Telemovel
                                    </label>
                                    <input type="text" class="form-control" id="basic-default-company" name="telemovel" value="<?= $kostumer['telemovel'] ?>">
                                </div>
                                <div class="mb-3">
                                    <i class="fa-solid fa-location-dot me-2"></i> Enderesu</label>
                                    <input type="text" class="form-control" id="basic-default-company" name="enderesu" value="<?= $kostumer['enderesu'] ?>">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Edit
                            <i class="typcn typcn-document btn-icon-append"></i>
                        </button>
                        <a href="<?= base_url('kostumer') ?>" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<?= $this->endSection() ?>