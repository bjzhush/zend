<?php
class IndexController extends Base_ControllerBase
{

    public function indexAction()
    {
        $db = Base_Registry::getDb();
        $all =  $db->fetchAll('select * from user');
        var_dump($all);
        exit;

    }


}

