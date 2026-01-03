<?= $this->extend('layout\main') ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Update Vendas Item</h5>
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
                    <form action="<?= base_url('vendas_item/update') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <input type="hidden" name="id_vendas_item" value="<?= $vendas_item['id_vendas_item'] ?>">
                        <div class="row">

                            <div class="col-md-6"> <!-- Kolom pertama -->
                                <div class="mb-3">
                                    <label class="form-label" for="id_vendas">
                                        <i class="fa-solid fa-barcode me-2"></i> Kode Vendas
                                    </label>
                                    <select class="form-select" name="id_vendas">
                                        <?php foreach ($vendas as $row): ?>
                                            <option value="<?= $row['id_vendas']; ?>" <?= $row['id_vendas'] == $vendas_item['id_vendas'] ? 'selected' : '' ?>><?= $row['kode_vendas']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="id_produtu">
                                        <i class="fa-solid fa-box-open me-2"></i> Naran Produtu
                                    </label>
                                    <select class="form-select" name="id_produtu">
                                        <?php foreach ($produtu as $row): ?>
                                            <option value="<?= $row['id_produtu']; ?>" <?= $row['id_produtu'] == $vendas_item['id_produtu'] ? 'selected' : '' ?>><?= $row['naran_produtu']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6"> <!-- Kolom Kedua -->
                                <div class="mb-3">
                                    <label class="form-label" for="presu_vendas">
                                        <i class="fa-solid fa-money-bill-wave me-2"></i> Presu Vendas
                                    </label>
                                    <input type="decimal" class="form-control" id="basic-default-company" name="presu_vendas" value="<?= $vendas_item['presu_vendas'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="kuantidade">
                                        <i class="fa-solid fa-boxes-stacked me-2"></i> Kuantidade
                                    </label>
                                    <input type="number" class="form-control" id="basic-default-company" name="kuantidade" value="<?= $vendas_item['kuantidade'] ?>" min="0" step="1">
                                </div>
                            </div>
                        </div>
                        <!-- parte 2 taka -->
                        <button type="submit" class="btn btn-primary">
                            <i class="typcn typcn-document btn-icon-prepend"></i>
                            Edit
                        </button>
                        <a href="<?= base_url('vendas_item') ?>" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<?= $this->endSection() ?>