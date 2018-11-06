<?php
/**
 * Interface IAdapter
 */
interface IAdapter
{
    /**
     * @param        $table
     * @param string $colums
     * @param string $where
     * @param string $order
     * @param string $limit
     *
     * @return mixed
     */
    public function select($table, $colums = '*', $where = '', $order = '', $limit = '');

    /**
     * @param       $table
     * @param array $bind
     *
     * @return mixed
     */
    public function insert($table, array $bind);

    /**
     * @param        $table
     * @param array  $bind
     * @param string $where
     *
     * @return mixed
     */
    public function update($table, array $bind, $where = '');

    /**
     * @param        $table
     * @param string $where
     *
     * @return mixed
     */
    public function delete($table, $where = '');
}
