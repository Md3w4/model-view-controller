<?php

class Siswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getAllSiswa();
        $data['jurusan'] = $this->model('Jurusan_model')->getAllJurusan();
        $data['kelas'] = $this->model('Kelas_model')->getAllKelas();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getSiswaById($id);
        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Siswa_model')->tambahDataSiswa($_POST) > 0) {
            Flasher::setFlash('Data siswa ', 'berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('Data siswa ', 'gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Siswa_model')->hapusDataSiswa($id) > 0) {
            Flasher::setFlash('Data siswa ', 'berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('Data siswa ', 'gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Siswa_model')->getSiswaById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Siswa_model')->ubahDataSiswa($_POST) > 0) {
            Flasher::setFlash('Data siswa ', 'berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('Data siswa ', 'gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/siswa');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Siswa';
        $data['siswa'] = $this->model('Siswa_model')->cariDataSiswa();
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

}