<?php
/**
 * Created by PhpStorm.
 * User: benjah
 * Date: 22/10/17
 * Time: 23:29
 */

namespace ModelMVC\Model;

class Pdo
{
    protected $pdo;

    /**
     * Pdo constructor.
     */
    public function __construct()
    {
        $this->pdo = new \PDO(DSN,
            USERNAME,
            PASSWORD,
            [ \PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION ]);
    }
}
