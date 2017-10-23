<?php
/**
 * Created by PhpStorm.
 * User: benjah
 * Date: 22/10/17
 * Time: 23:26
 */

require '../Connect.php';
require '../vendor/autoload.php';

use ModelMVC\Model\QuestManager;

$em = new QuestManager();
$quests = $em->findAll();

foreach ($quests as $quest)
{
    var_dump($quest);
}
