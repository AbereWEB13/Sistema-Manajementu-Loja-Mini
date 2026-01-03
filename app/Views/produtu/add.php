<?= $this->extend('layout\main') ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Aumenta Produtu</h5>
                </div>

                <div class="card-body">
                    <?php if (session()->getFlashdata('errors')): ?>
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                    Error: <?= esc($error) ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url('produtu/store') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="row">
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label class="form-label" for="kode_produtu">
                                        <i class="fa-solid fa-barcode me-2"></i> Kode
                                    </label>
                                    <input type="text" class="form-control" id="kode_produtu" name="kode_produtu" placeholder="Kode ..." value="<?= old('kode_produtu') ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="naran_produtu">
                                        <i class="fa-solid fa-box-open me-2"></i> Naran Produtu
                                    </label>
                                    <input type="text" class="form-control" id="naran_produtu" name="naran_produtu" placeholder="Naran Produtu ..." value="<?= old('naran_produtu') ?>">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="naran_kategoria">
                                        <i class="fa-solid fa-tag me-2"></i> Naran Kategoria</label>
                                    <select class="form-select" name="id_kategoria">
                                        <?php foreach ($kategoria as $key => $row): ?>
                                            <option value="<?= $row['id_kategoria']; ?>"><?= $row['naran_kategoria']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="naran_subkategoria">
                                        <i class="fa-solid fa-tags me-2"></i> Sub Kategoria</label>
                                    <select class="form-select" name="id_subkategoria">
                                        <?php foreach ($subkategoria as $key => $row): ?>
                                            <option value="<?= $row['id_subkategoria']; ?>"><?= $row['naran_subkategoria']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="presu_modal">
                                        <i class="fa-solid fa-money-bill-wave me-2"></i> Presu Modal
                                    </label>
                                    <input type="decimal" class="form-control" id="presu_modal" name="presu_modal" placeholder="$" value="<?= old('presu_modal') ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="presu_vendas">
                                        <i class="fa-solid fa-money-bill-trend-up me-2"></i> Presu Vendas
                                    </label>
                                    <input type="decimal" class="form-control" id="presu_vendas" name="presu_vendas" placeholder="$" value="<?= old('presu_vendas') ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="stok">
                                        <i class="fa-solid fa-boxes-stacked me-2"></i> Stok
                                    </label>
                                    <input type="number" class="form-control" id="stok" name="stok" placeholder="" value="<?= old('stok') ?>" min="0" step="1">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="image">
                                        <i class="fa-solid fa-image me-2"></i> Imajen
                                    </label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="image" name="image" placeholder="Choose Image">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="typcn typcn-document btn-icon-prepend"></i>
                            Submit
                        </button>
                        <a href="<?= base_url('produtu') ?>" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <?= $this->endSection() ?>