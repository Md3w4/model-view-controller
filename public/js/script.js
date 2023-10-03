$(function () {
  // Tambah Data Siswa
  $(".tombolTambahDataSiswa").on("click", function () {
    $("#judulModal").html("Tambah Data Siswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#nama").val("");
    $("#absen").val("");
    $("#kelas").val("");
    $("#jurusan").val("");
    $("#id").val("");
  });

  // Ubah Data Siswa
  $(".tampilModalUbahSiswa").on("click", function () {
    $("#judulModal").html("Ubah Data Siswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/11rpl'25/phpmvc/public/siswa/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/11rpl'25/phpmvc/public/siswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#absen").val(data.absen);
        $("#kelas").val(data.kelas);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });

  // Tambah Data Jurusan
  $(".tombolTambahDataJurusan").on("click", function () {
    $("#judulModal").html("Tambah Data Jurusan");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#nama_jurusan").val("");
    $("#id").val("");
  });

  // Ubah Data Jurusan
  $(".tampilModalUbahJurusan").on("click", function () {
    $("#judulModal").html("Ubah Data Jurusan");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/11rpl'25/phpmvc/public/jurusan/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/11rpl'25/phpmvc/public/jurusan/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama_jurusan").val(data.nama_jurusan);
        $("#id").val(data.id);
      },
    });
  });

  // Tambah Data Kelas
  $(".tombolTambahDataKelas").on("click", function () {
    $("#judulModal").html("Tambah Data Kelas");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#nama_kelas").val("");
    $("#id").val("");
  });

  // Ubah Data Kelas
  $(".tampilModalUbahKelas").on("click", function () {
    $("#judulModal").html("Ubah Data Kelas");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/11rpl'25/phpmvc/public/kelas/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/11rpl'25/phpmvc/public/kelas/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama_kelas").val(data.nama);
        $("#id").val(data.id);
      },
    });
  });

  // Tambah Data Guru
  $(".tombolTambahDataGuru").on("click", function () {
    $("#judulModal").html("Tambah Data Guru");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#nama_guru").val("");
    $("#id").val("");
  });

  // Ubah Data Guru
  $(".tampilModalUbahGuru").on("click", function () {
    $("#judulModal").html("Ubah Data Guru");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/11rpl'25/phpmvc/public/guru/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/11rpl'25/phpmvc/public/guru/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama_guru").val(data.nama_guru);
        $("#id").val(data.id);
      },
    });
  });
});
