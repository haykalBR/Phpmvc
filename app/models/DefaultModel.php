<?php
/**
 * Created by PhpStorm.
 * User: haykelbr
 * Date: 04/11/19
 * Time: 14:12
 */

class DefaultModel extends DefaultModelRepository
{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

}