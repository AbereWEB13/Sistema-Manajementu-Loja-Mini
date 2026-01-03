<?= $this->extend('layout\main') ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Update Produtu</h5>
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
                    <form action="<?= base_url('produtu/update') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <input type="hidden" name="id_produtu" value="<?= $produtu['id_produtu'] ?>">


                        <div class="row">

                            <!-- parte 1 loke -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="kode_produtu">
                                        <i class="fa-solid fa-barcode me-2"></i> Kode
                                    </label>
                                    <input type="text" class="form-control" id="basic-default-company" name="kode_produtu" value="<?= $produtu['kode_produtu'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="naran_produtu">
                                        <i class="fa-solid fa-box-open me-2"></i> Naran Produtu
                                    </label>
                                    <input type="text" class="form-control" id="basic-default-company" name="naran_produtu" value="<?= $produtu['naran_produtu'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="naran_kategoria">
                                        <i class="fa-solid fa-tag me-2"></i> Naran Kategoria</label>
                                    <select class="form-select" name="id_kategoria">
                                        <?php foreach ($kategoria as $row): ?>
                                            <option value="<?= $row['id_kategoria']; ?>" <?= $row['id_kategoria'] == $produtu['id_kategoria'] ? 'selected' : '' ?>><?= $row['naran_kategoria']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="naran_subkategoria">
                                        <i class="fa-solid fa-tags me-2"></i> Sub Kategoria</label>
                                    <select class="form-select" name="id_subkategoria">
                                        <?php foreach ($subkategoria as $row): ?>
                                            <option value="<?= $row['id_subkategoria']; ?>" <?= $row['id_subkategoria'] == $produtu['id_subkategoria'] ? 'selected' : '' ?>><?= $row['naran_subkategoria']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <!-- parte 1 taka -->

                            <!-- parte 2 loke  -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="presu_modal">
                                        <i class="fa-solid fa-money-bill-wave me-2"></i> Presu Modal
                                    </label>
                                    <input type="decimal" class="form-control" id="basic-default-company" name="presu_modal" value="<?= $produtu['presu_modal'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="presu_vendas">
                                        <i class="fa-solid fa-money-bill-trend-up me-2"></i> Presu Vendas
                                    </label>
                                    <input type="decimal" class="form-control" id="basic-default-company" name="presu_vendas" value="<?= $produtu['presu_vendas'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="stok">
                                        <i class="fa-solid fa-boxes-stacked me-2"></i> Stok </label>
                                    <input type="number" class="form-control" id="stok" name="stok" value="<?= $produtu['stok']; ?>" min="0" step="1">
                                </div>


                                <div class="mb-3">
                                    <label class="form-label" for="image"> <i class="fa-solid fa-image me-2"></i> Imajen
                                    </label>
                                    <div class="mb-3">
                                        <?php if (!empty($produtu['image'])) : ?>
                                            <img id="image-preview" src="<?= base_url('uploads/' . $produtu['image']) ?>" width="110" height=110" class="mb-2" />
                                        <?php else : ?>
                                            <img id="image-preview" src="<?= base_url('uploads/default.png') ?>" width="100" height="100" class="mb-2" />
                                        <?php endif; ?>
                                        <input type="file" name="image" id="image-upload" class="form-control">
                                        <input type="hidden" name="old_image" value="<?= $produtu['image'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- parte 2 taka -->
                        <button type="submit" class="btn btn-primary">
                            <i class="typcn typcn-document btn-icon-prepend"></i>
                            Edit
                        </button>
                        <a href="<?= base_url('produtu') ?>" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<?= $this->endSection() ?>