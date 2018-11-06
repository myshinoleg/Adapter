<?php
/**
 * Class Adapter
 */
class Adapter
{
    /**
     * @var IAdapter
     */
    protected $adapter;

    /**
     * @var array
     */
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
        $this->initAdapter();
    }

    /**
     * Инициализация адаптера в зависимости БД
     * @throws Exception
     */
    public function initAdapter()
    {
        if (!isset($this->config['adapter']))
        {
            throw new Exception('Не указано имя адаптера');
        }

        $adapterName = $this->config['adapter'];

        $className = 'Adapter' . '\\' . $adapterName;

        if (class_exists($className))
        {
            $this->adapter = new $className($this->config);
        }
        else
        {
            throw new Exception('Класса адаптера ' . $adapterName . 'не существует');
        }
    }

    /**
     * @param        $table
     * @param string $colums
     * @param string $where
     * @param string $order
     * @param string $limit
     *
     * @return mixed
     */
    public function select($table, $colums = '*', $where = '', $order = '', $limit = '')
    {
        return $this->adapter->select($table, $colums, $where, $order, $limit);
    }

    /**
     * @param        $table
     * @param array  $bind
     * @param string $where
     *
     * @return mixed
     */
    public function update($table, array $bind, $where = '')
    {
        return $this->adapter->update($table, $bind, $where);
    }

    /**
     * @param        $table
     * @param string $where
     *
     * @return mixed
     */
    public function delete($table, $where = '')
    {
        return $this->adapter->delete($table, $where);
    }

    /**
     * @param       $table
     * @param array $bind
     *
     * @return mixed
     */
    public function insert($table, array $bind)
    {
        return $this->adapter->insert($table, $bind);
    }
}
