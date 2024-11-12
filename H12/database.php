<?php
class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";  // Perbaiki tanda petik yang hilang
    private $database = "prakwebdb";
    public $conn;

    public function __construct()  // Perbaiki __construct
    {
        // Membuat koneksi ke database
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}
?>
