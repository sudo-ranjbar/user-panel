<?php
namespace App\Models\Contracts;

class PDO_Connection extends BaseModel
{

    private static $instance = null;
    private $pdo;

    private function __construct()
    {
        $host    = 'localhost';
        $db      = 'user_panel';
        $user    = 'root';
        $pass    = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES => false,
        ];
        try {
            $this->pdo = new \PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new PDO_Connection();
        }
        return self::$instance->pdo;
    }

    # Create
    public function create()
    {

    }

    # Read
    public function get()
    {

    }

    # Update
    public function update()
    {

    }

    # Delete
    public function delete()
    {

    }

}