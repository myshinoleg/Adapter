<?php

namespace Adapter;

/**
 * Class PostgresSQL
 * @package Adapter
 */
class PostgresSQL extends AbstractAdapter implements \IAdapter
{
    /**
     * @var object
     */
    public $connection;

    /**
     * @param        $table
     * @param string $colums
     * @param string $where
     * @param string $order
     * @param string $limit
     *
     * @return mixed|void
     */
    public function select($table, $colums = '*', $where = '', $order = '', $limit = '')
    {
        // TODO реализация подготовки select запроса
    }

    /**
     * @param       $table
     * @param array $bind
     *
     * @return mixed|void
     */
    public function insert($table, array $bind)
    {
        // TODO реализация подготовки insert запроса
    }

    /**
     * @param        $table
     * @param array  $bind
     * @param string $where
     *
     * @return mixed|void
     */
    public function update($table, array $bind, $where = '')
    {
        // TODO реализация подготовки update запроса
    }

    /**
     * @param        $table
     * @param string $where
     *
     * @return mixed|void
     */
    public function delete($table, $where = '')
    {
        // TODO реализация подготовки delete запроса
    }

    /**
     * Создает новое подключение к БД, если его нет
     * @param $config
     * @throws \Exception
     */
    protected function initConnection(array $config)
    {
        if ($this->connection)
        {
            return;
        }

        try
        {
            $this->connection = new \PDO(
                $config['dns'],
                $config['username'],
                $config['password']
            );
        }
        catch (\PDOException $e)
        {
            throw new \Exception($e->getMessage(), $e->getCode(), $e);
        }
    }
}
