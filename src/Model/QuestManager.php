<?php
/**
 * Created by PhpStorm.
 * User: benjah
 * Date: 22/10/17
 * Time: 23:30
 */

namespace ModelMVC\Model;


class QuestManager extends Pdo
{
    public function findAll()
    {
        $req = "SELECT * FROM quest";
        $statement = $this->pdo->query($req);

        return $statement->fetchAll(\PDO::FETCH_CLASS, Quest::class);
    }
}
