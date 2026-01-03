<?= $this->extend('layout\main') ?>
<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Update Vendas</h5>
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
                    <form action="<?= base_url('vendas/update') ?>" method="post">
                        <input type="hidden" name="id_vendas" value="<?= $vendas['id_vendas'] ?>">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="kode_vendas">
                                        <i class="fa-solid fa-barcode me-2"></i> Kode
                                    </label>
                                    <input type="text" class="form-control" id="basic-default-company" name="kode_vendas" value="<?= $vendas['kode_vendas'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="id_kostumer">
                                        <i class="fa-solid fa-user me-2"></i> Naran Kostumer
                                    </label>
                                    <select class="form-select" name="id_kostumer">
                                        <?php foreach ($kostumer as $row): ?>
                                            <option value="<?= $row['id_kostumer']; ?>" <?= $row['id_kostumer'] == $vendas['id_kostumer'] ? 'selected' : '' ?>><?= $row['naran_kostumer']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="data_vendas">
                                        <i class="fa-solid fa-calendar-days me-2"></i> Data Vendas
                                    </label>
                                    <input type="date" class="form-control" id="basic-default-company" name="data_vendas" value="<?= $vendas['data_vendas'] ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="total">
                                        <i class="fa-solid fa-money-bill-wave me-2"></i> Total
                                    </label>
                                    <input type="decimal" class="form-control" id="basic-default-company" name="total" value="<?= $vendas['total'] ?>">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="metodu_pagu">
                                        <i class="fa-solid fa-credit-card me-2"></i> Metodu Pagu
                                    </label>
                                    <select name="metodu_pagu" class="form-select">
                                        <option value="Tunai" <?= ($vendas['metodu_pagu'] == 'Tunai') ? 'selected' : '' ?>>Tunai</option>
                                        <option value="Transfer" <?= ($vendas['metodu_pagu'] == 'Transfer') ? 'selected' : '' ?>>Transfer</option>
                                        <option value="Kartaun" <?= ($vendas['metodu_pagu'] == 'Kartaun') ? 'selected' : '' ?>>Kartaun</option>
                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label class="form-label">
                                        <i class="fa-solid fa-info-circle me-2"></i> Estatutu
                                    </label>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="estatutu" id="membershipRadios1" value="Kompletu"
                                                    <?= $vendas['estatutu'] == 'Kompletu' ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="estatutuKompletu">
                                                    <i class="fa-solid fa-circle-check text-success me-1"></i> Kompletu
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="estatutu" id="membershipRadios2" value="Pendente" <?= $vendas['estatutu'] == 'Pendente' ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="estatutuPendente">
                                                    <i class="fa-solid fa-clock text-warning me-1"></i> Pendente
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="estatutu" id="membershipRadios3" value="Kanseladu" <?= $vendas['estatutu'] == 'Kanseladu' ? 'checked' : '' ?>>
                                                <label class="form-check-label" for="estatutuKaseladu">
                                                    <i class="fa-solid fa-circle-xmark text-danger me-1"></i> Kanseladu
                                                </label>
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
                        <a href="<?= base_url('vendas') ?>" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<?= $this->endSection() ?>