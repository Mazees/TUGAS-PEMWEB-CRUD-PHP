<?php
class Database
{
    private $host = "localhost";
    private $user = "madaputra";
    private $pass = "madapemwebdb";
    private $db = "data_mahasiswa";
    protected $connection;
    public function __construct()
    {
        try {
            $this->connection = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        } catch (\Throwable $th) {
            die("Gagal terhubung dengan database!" . mysqli_connect_error());
        }
    }
}

class Mahasiswa extends Database
{
    public function getAllMahasiswa()
    {
        $result = mysqli_query($this->connection, "SELECT * FROM mahasiswa ORDER BY id DESC");
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    public function getMahasiswa($id)
    {
        $result = mysqli_query($this->connection, "SELECT * FROM mahasiswa WHERE id = $id");
        return mysqli_fetch_assoc($result);
    }
    public function insertMahasiswa($nama, $npm, $prodi, $fakultas)
    {
        $result = mysqli_query($this->connection, "INSERT INTO mahasiswa(nama, npm, prodi, fakultas) VALUES('$nama', '$npm', '$prodi', '$fakultas')");
        return $result;
    }
    public function updateMahasiswa($id, $nama, $npm, $prodi, $fakultas)
    {
        $result = mysqli_query($this->connection, "UPDATE mahasiswa SET nama = '$nama', npm = '$npm', prodi = '$prodi', fakultas = '$fakultas' WHERE id = $id");
        return $result;
    }
    public function deleteMahasiswa($id)
    {
        $result = mysqli_query($this->connection, "DELETE FROM mahasiswa WHERE id = $id");
        return $result;
    }
}
$mhs = new Mahasiswa();
?>