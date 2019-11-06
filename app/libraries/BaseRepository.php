<?php
/**
 * Created by PhpStorm.
 * User: haykelbr
 * Date: 04/11/19
 * Time: 11:22
 */
class BaseRepository extends ORM
{

    /**
     * @param $className
     * @return mixed
     */
    public function findAll($className){
        return true;

    }
    /**
     * @param $id
     * @param $className
     * @return bool
     */
    public function find($className,$id){

    }
    public function findBy($className,array $criteria, array $orderBy = null, $limit = null, $offset = null){
    }
    public function findOneBy($className,array $criteria){

    }
    /**
     * @param $className
     * @param $id
     * @return bool
     */
    public function delete($className,$id){

    }

}