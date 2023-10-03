<?php

class Guru_model
{
    private $table = 'guru';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllGuru()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getGuruById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataGuru($data)
    {
        $query = "INSERT INTO guru
                    VALUES
                    ('', :nama_guru)";


        $this->db->query($query);
        $this->db->bind('nama_guru', $data['nama_guru']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataGuru($id)
    {
        $query = "DELETE FROM guru WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataGuru($data)
    {
        $query = "UPDATE guru SET
                    nama_guru = :nama_guru
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama_guru', $data['nama_guru']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataGuru()
    {
        $keyword = $_POST['keyword'];
        $query = 'SELECT * FROM guru WHERE nama_guru LIKE :keyword';
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}