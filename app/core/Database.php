<?php

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;
    private $dbh;
    private $stmt;

    public function __construct()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->db_name}";

        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
        return $this;
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
        return $this;
    }

    public function execute()
    {
        $this->stmt->execute();
    }

    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll();
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch();
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

    public function beginTransaction()
    {
        $this->dbh->beginTransaction();
    }

    public function commit()
    {
        $this->dbh->commit();
    }

    public function rollback()
    {
        $this->dbh->rollBack();
    }

    public function getLastInsertedId()
    {
        return $this->dbh->lastInsertId();
    }

    public function binds($data)
    {
        $type = null;

        foreach ($data as $key => $v) {
            if (is_int($v)) {
                $type = PDO::PARAM_INT;
            } else if (is_bool($v)) {
                $type = PDO::PARAM_BOOL;
            } else if (is_null($v)) {
                $type = PDO::PARAM_NULL;
            } else {
                $type = PDO::PARAM_STR;
            }
            $this->stmt->bindValue($key, $v, $type);
        }
        return $this;
    }

}
