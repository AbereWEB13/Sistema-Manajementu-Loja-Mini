<?= $this->extend('layout\main') ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Aumenta Sub Kategoria</h5>
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
                    <form action="<?= base_url('subkategoria/store') ?>" method="post">

                        <div class="mb-3">
                            <label class="form-label" for="naran_kategoria">
                                <i class="fa-solid fa-tag me-2"></i> Naran Kategoria
                            </label>
                            <select class="form-select" name="id_kategoria">
                                <?php foreach ($kategoria as $key => $row): ?>
                                    <option value="<?= $row['id_kategoria']; ?>"><?= $row['naran_kategoria']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="naran_subkategoria">
                                <i class="fa-solid fa-tags me-2"></i> Sub Kategoria
                            </label>
                            <input type="text" class="form-control" id="naran_subkategoria" name="naran_subkategoria" placeholder="Sub Kategoria ..." value="<?= old('naran_subkategoria') ?>">
                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="deskrisaun">
                                <i class="fa-solid fa-align-left me-2"></i> Deskrisaun
                            </label>
                            <textarea class="form-control" id="deskrisaun" name="deskrisaun" rows="5" placeholder="Deskrisaun ..."><?= old('deskrisaun') ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="typcn typcn-document btn-icon-prepend"></i>
                            Submit
                        </button>
                        <a href="<?= base_url('subkategoria') ?>" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <?= $this->endSection() ?>