<?= $this->extend('layout\main') ?>

<?= $this->section('content') ?>

<div id="flash" data-flash="<?= session()->getFlashdata('flash'); ?>"></div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="section-header-button">
                        <a href="<?= base_url('kostumer/add') ?>" class="btn btn-outline-primary">
                            <i class="bx bx-plus"></i> Aumenta Kostumer
                        </a>
                        <a href="<?= base_url('kostumer/print'); ?>" class="btn btn-outline-secondary ms-2">
                            <i class="bx bx-printer"></i> Print
                        </a>
                    </div>
                </div>

                <!-- BODY -->
                <div class="card-body">

                    <!-- SEARCH & SHOW ENTRIES -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label>
                                Show
                                <select id="showEntries"
                                    class="form-select form-select-sm d-inline-block w-auto">
                                    <option value="5" selected>5</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                </select>
                                entries
                            </label>
                        </div>
                        <div class="col-md-6 text-end">
                            <label>Search</label>
                            <input type="text" id="searchInput"
                                class="form-control form-control-sm d-inline-block w-50"
                                placeholder="">

                        </div>
                    </div>
                    <!-- END SEARCH AND SHOW ENTRIES -->
                    <div class="card-body">
                        <div class="container-fluid px-4">
                            <table class="table" id="tabel">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="text-center"> No
                                        </th>
                                        <th>Naran Kostumer</th>
                                        <th>Email</th>
                                        <th>Numeru Telemovel</th>
                                        <th>Enderesu</th>

                                        <th class="text-center">Asaun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($kostumer as $key => $row) : ?>
                                        <tr>
                                            <td><?= ++$key ?></td>
                                            <td><?= $row['naran_kostumer'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['telemovel'] ?></td>
                                            <td><?= $row['enderesu'] ?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                        <i class="icon-base bx bx-dots-vertical-rounded"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?= base_url('kostumer/edit/' . $row['id_kostumer']) ?>"><i class=" icon-base bx bx-edit-alt me-1"></i> Hadia</a>
                                                        <a class="dropdown-item" id="btn-hamos" href="<?= base_url('/kostumer/delete/' . $row['id_kostumer']) ?>"><i class="icon-base bx bx-trash me-1"></i> Apaga</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- INFO & PAGINATION -->
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div id="tableInfo" class="text-muted small">
                                Showing 0 to 0 of 0 entries
                            </div>
                            <nav>
                                <ul class="pagination pagination-sm mb-0" id="pagination"></ul>
                            </nav>
                        </div>
                        <!-- END INFO & PAGINATION -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>