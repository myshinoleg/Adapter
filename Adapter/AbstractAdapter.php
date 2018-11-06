<?php

namespace Adapter;

/**
 * Class AbstractAdapter
 * @package Adapter
 */
abstract class AbstractAdapter
{
    /**
     * Массив с настройками подключения
     * @var array
     */
    protected $config = array();

    public function __construct(array $config)
    {
        $this->initConnection($config);
    }

    /**
     * @param $config
     *
     * @return mixed
     */
    abstract protected function initConnection(array $config);
}
