<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahDataKelas" data-toggle="modal"
                data-target="#forModal">
                Tambah Kelas
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL ?>/kelas/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari kelas.." name="keyword" id="keyword"
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
            <h3>Daftar Kelas</h3>
            <ul class="list-group">
                <?php foreach ($data['kelas'] as $kelas): ?>
                    <li class="list-group-item">
                        <?= $kelas['nama_kelas']; ?>
                        <a class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');"
                            href="<?= BASEURL; ?>/kelas/hapus/<?= $kelas['id']; ?>">Hapus</a>
                        <!-- <a class="badge badge-success float-right ml-1 tampilModalUbahKelas"
                            href="<?= BASEURL; ?>/kelas/ubah/<?= $kelas['id']; ?>" data-toggle="modal"
                            data-target="#forModal" data-id="<?= $kelas['id']; ?>">Ubah</a> -->
                        <a class="badge badge-primary float-right ml-1"
                            href="<?= BASEURL; ?>/kelas/detail/<?= $kelas['id']; ?>">Detail</a>
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
                <h5 class="modal-title" id="judulModal">Tambah Kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/kelas/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama_kelas">Nama Kelas</label>
                        <input type="text" class="form-control" id="nama_kelas" name="nama_kelas">
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