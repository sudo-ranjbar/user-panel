<?php
namespace App\Models\Contracts;

class PDO_Connection extends BaseModel
{

    private static $instance = null;
    private $stmt;

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
            $this->connection = new \PDO($dsn, $user, $pass, $options);
        } catch (\PDOException $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new PDO_Connection();
        }
        return self::$instance->connection;
    }

    # Create
    public function create(String $query)
    {
        $this->stmt = $this->connection->prepare($query);
    }

    # Read
    public function select(String $query)
    {
        $this->stmt = $this->connection->prepare($query);
    }

    # Update
    public function update(String $query)
    {
        $this->stmt = $this->connection->prepare($query);
    }

    # Delete
    public function delete(String $query)
    {
        $this->stmt = $this->connection->prepare($query);
    }

    // Bind Value
    public function bind($param, $value)
    {
        $this->stmt->bindParam($param, $value);
    }

    // Execute the prepared statment
    public function execute()
    {
        $this->stmt->execute();
    }

    // Get resualt set as array of object
    public function fetchAll()
    {
        $this->execute();
        return $this->stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Get single record as object
    public function fetch()
    {
        $this->execute();
        return $this->stmt->fetch(\PDO::FETCH_ASSOC);
    }

    // Get row count
    public function rowCount()
    {
        $this->execute();
        return $this->stmt->rowCount();
    }
}