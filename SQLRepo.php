<?php

require_once 'IRepository.php';

class SQLRepo implements IRepository
{
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect(getenv('DB_IP'), getenv('DB_USER'), getenv('DB_PASSWORD'), getenv('DB_NAME'), getenv('DB_PORT'));
    }

    public function getAllColors()
    {
        $stmt = $this->conn->prepare('SELECT * FROM color');
        $stmt->execute();
        $stmt->bind_result($id, $colorName);

        $content = [];
        while ($stmt->fetch()) {
            array_push($content, $colorName);
        }

        $stmt->close();
        $this->conn->close();

        return $content;
    }

    public function getColorById($id)
    {
        $stmt = $this->conn->prepare('SELECT * FROM color WHERE id =?');
        $stmt->bind_param('i', $id);

        $stmt->execute();
        $stmt->bind_result($id, $colorName);

        $color = null;
        while ($stmt->fetch()) {
            $color = $colorName;
        }

        $stmt->close();
        $this->conn->close();

        return $color;
    }
}
