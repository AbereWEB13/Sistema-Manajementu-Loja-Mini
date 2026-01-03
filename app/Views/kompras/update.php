<?= $this->extend('layout\main') ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Update Kompras</h5>
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
                    <form action="<?= base_url('kompras/update') ?>" method="post">
                        <input type="hidden" name="id_kompras" value="<?= $kompras['id_kompras'] ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="kode_kompras">
                                        <i class="fa-solid fa-barcode me-2"></i> Kode
                                    </label>
                                    <input type="text" class="form-control" id="basic-default-company" name="kode_kompras" value="<?= $kompras['kode_kompras'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="data_kompras">
                                        <i class="fa-solid fa-calendar-days me-2"></i> Data Kompras
                                    </label>
                                    <input type="date" class="form-control" id="basic-default-company" name="data_kompras" value="<?= $kompras['data_kompras'] ?>">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="id_fornesedor">
                                        <i class="fa-solid fa-truck me-2"></i> Naran Fornesedor
                                    </label>
                                    <select class="form-select" name="id_fornesedor">
                                        <?php foreach ($fornesedor as $row): ?>
                                            <option value="<?= $row['id_fornesedor']; ?>" <?= $row['id_fornesedor'] == $kompras['id_fornesedor'] ? 'selected' : '' ?>><?= $row['naran_fornesedor']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="total">
                                        <i class="fa-solid fa-money-bill-wave me-2"></i> Total
                                    </label>
                                    <input type="decimal" class="form-control" id="basic-default-company" name="total" value="<?= $kompras['total'] ?>">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Edit
                            <i class="typcn typcn-document btn-icon-append"></i>
                        </button>
                        <a href="<?= base_url('kompras') ?>" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<?= $this->endSection() ?>