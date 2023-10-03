<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahDataGuru" data-toggle="modal"
                data-target="#forModal">
                Tambah Guru
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL ?>/guru/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari guru.." name="keyword" id="keyword"
                        autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Guru</h3>
            <ul class="list-group mb-5">
                <?php foreach ($data['guru'] as $guru): ?>
                    <li class="list-group-item">
                        <?= $guru['nama_guru']; ?>
                        <a class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');"
                            href="<?= BASEURL; ?>/guru/hapus/<?= $guru['id']; ?>">Hapus</a>
                        <a class="badge badge-success float-right ml-1 tampilModalUbahGuru"
                            href="<?= BASEURL; ?>/guru/ubah/<?= $guru['id']; ?>" data-toggle="modal" data-target="#forModal"
                            data-id="<?= $guru['id']; ?>">Ubah</a>
                        <a class="badge badge-primary float-right ml-1"
                            href="<?= BASEURL; ?>/guru/detail/<?= $guru['id']; ?>">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/guru/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama_guru">Nama Guru</label>
                        <input type="text" class="form-control" id="nama_guru" name="nama_guru">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>