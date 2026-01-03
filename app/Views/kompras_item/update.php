<?= $this->extend('layout\main') ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Update Kompras Item</h5>
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
                    <form action="<?= base_url('kompras_item/update') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <input type="hidden" name="id_item" value="<?= $kompras_item['id_item'] ?>">
                        <div class="row">
                            <div class="col-md-6"> <!-- Kolom pertama -->
                                <div class="mb-3">
                                    <label class="form-label" for="id_kompras">
                                        <i class="fa-solid fa-barcode me-2"></i> Kode Kompras
                                    </label>
                                    <select class="form-select" name="id_kompras">
                                        <?php foreach ($kompras as $row): ?>
                                            <option value="<?= $row['id_kompras']; ?>" <?= $row['id_kompras'] == $kompras_item['id_kompras'] ? 'selected' : '' ?>><?= $row['kode_kompras']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="id_produtu">
                                        <i class="fa-solid fa-box-open me-2"></i> Naran Produtu
                                    </label>
                                    <select class="form-select" name="id_produtu">
                                        <?php foreach ($produtu as $row): ?>
                                            <option value="<?= $row['id_produtu']; ?>" <?= $row['id_produtu'] == $kompras_item['id_produtu'] ? 'selected' : '' ?>><?= $row['naran_produtu']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6"> <!-- Kolom Kedua -->
                                <div class="mb-3">
                                    <label class="form-label" for="presu_modal">
                                        <i class="fa-solid fa-money-bill-wave me-2"></i> Presu Modal
                                    </label>
                                    <input type="decimal" class="form-control" id="basic-default-company" name="presu_modal" value="<?= $kompras_item['presu_modal'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="kuantidade">
                                        <i class="fa-solid fa-boxes-stacked me-2"></i> Kuantidade
                                    </label>
                                    <input type="text" class="form-control" id="basic-default-company" name="kuantidade" value="<?= $kompras_item['kuantidade'] ?>">
                                </div>
                            </div>

                        </div>

                        <!-- parte 2 taka -->
                        <button type="submit" class="btn btn-primary">
                            <i class="typcn typcn-document btn-icon-prepend"></i>
                            Edit
                        </button>
                        <a href="<?= base_url('kompras_item') ?>" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<?= $this->endSection() ?>