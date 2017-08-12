<?php

namespace Viper\Database;

use PDO;

/**
 * Builds query for database.
 */
class QueryBuilder
{
    /**
     * Instance of PDO.
     *
     * @var PDO
     */
    protected $pdo;

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Select all from table.
     *
     * @param string $table
     */
    public function selectAll($table)
    {
        $statment = $this->pdo->prepare("SELECT * FROM {$table}");
        $statment->execute();

        return $tasks = $statment->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * Insert values into table.
     *
     * @param string $table      table name
     * @param array  $parameters array ["column" => "value" ...]
     */
    public function insert($table, $parameters)
    {
        //get all columns
        $columns = array_keys($parameters);

        //create placeholders for every param
        $placeHolders = array_map(function ($param) {
            return ':'.$param;
        }, $columns);

        //create query
        $query = sprintf('INSERT INTO %s (%s) values (%s)',
            $table,
            implode(',', $columns),
            implode(',', $placeHolders)
            );
        $statment = $this->pdo->prepare($query);

        try {
            $statment->execute($parameters);
        } catch (PDOexception $e) {
            die('Something went wrong!');
        }
    }
}
