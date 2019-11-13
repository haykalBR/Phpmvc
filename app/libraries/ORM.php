<?php
/**
 * Created by PhpStorm.
 * User: haykelbr
 * Date: 06/11/19
 * Time: 10:43
 */
class ORM {
    /**
     * @param $property
     * @return mixed
     */
    public function getColumnByProperty($property)
    {
    }
    private function where($filters = []){

    }
    public function limit($length, $start){

    }
    private function orderBy($sorting = []){}
    private function fetchAll($filters = [] ,$sorting = [], $length = null, $start = null){}
    public function findOneBy($filters = [])
    {
        return $this->fetch($filters);

    }
    public function find($id)
    {
    }
    public function findAll()
    {
    }
    public function persist(Model $model){

    }
    private function update(Model $model){

    }
    private function insert($model){

    }
    public function remove($model){

    }























}