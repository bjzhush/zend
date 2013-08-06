<?php
class IndexController extends Boot_ControllerBase
{

    public function indexAction()
    {
        $db = parent::getdb();
        $some = $db->fetchAll('select * from chromeurllog limit 10');

    }


}

