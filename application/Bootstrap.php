<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    public function _initAutoload()
    {
        $loader = Zend_Loader_Autoloader::getInstance();
        //or for multiple namespaces
        $loader->registerNamespace(array('Db_', 'Base_'));
    }

}

