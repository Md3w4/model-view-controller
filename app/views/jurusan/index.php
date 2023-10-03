<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash() ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahDataJurusan" data-toggle="modal"
                data-target="#forModal">
                Tambah Jurusan
            </button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL ?>/jurusan/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari jurusan.." name="keyword" id="keyword"
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
            <h3>Daftar Jurusan</h3>
            <ul class="list-group mb-5">
                <?php foreach ($data['jurusan'] as $jurusan): ?>
                    <li class="list-group-item">
                        <?= $jurusan['nama_jurusan']; ?>
                        <a class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin?');"
                            href="<?= BASEURL; ?>/jurusan/hapus/<?= $jurusan['id']; ?>">Hapus</a>
                        <!-- <a class="badge badge-success float-right ml-1 tampilModalUbahJurusan"
                            href="<?= BASEURL; ?>/jurusan/ubah/<?= $jurusan['id']; ?>" data-toggle="modal"
                            data-target="#forModal" data-id="<?= $jurusan['id']; ?>">Ubah</a> -->
                        <a class="badge badge-primary float-right ml-1"
                            href="<?= BASEURL; ?>/jurusan/detail/<?= $jurusan['id']; ?>">Detail</a>
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
                <h5 class="modal-title" id="judulModal">Tambah Jurusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/jurusan/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama_jurusan">Nama Jurusan</label>
                        <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan">
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