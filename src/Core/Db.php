<?php


namespace AYakovlev\Core;


use AYakovlev\Exception\DbException;
use PDO;

class Db
{
    /**
     * @var Db $instance
     */
    private static $instance;
    private PDO $pdo;

    public function getPdo(): PDO
    {
        return $this->pdo;
    }
    // part of singleton (private constructor)
    private function __construct()
    {
        $dbOptions = (require '../config/settings.php')['db'];

        try {
        $this->pdo = new PDO('mysql:host=' . $dbOptions['host'] . ';dbname=' . $dbOptions['dbname'],
            $dbOptions['user'],
            $dbOptions['password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->exec('SET NAMES UTF8');
        } catch (\PDOException $e) {
            throw new DbException('Ошибка при подключении к базе данных: ' . $e->getMessage());
        }
    }

    public function query(string $sql, array $params = [], string $className = 'stdClass'): ?array
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);
        //var_dump($sth->fetchAll());

        if (false === $result) {
            return null;
        }

        return $sth->fetchAll(PDO::FETCH_CLASS, $className);
    }

    // simple singleton for Db call, without clone and copy
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getLastInsertId(): int
    {
        return (int) $this->pdo->lastInsertId();
    }
}
