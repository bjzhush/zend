<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    public function _initAutoload()
    {
        $loader = Zend_Loader_Autoloader::getInstance();

        // auto register all nameSpaces in library directory
        $handle = opendir(dirname(__DIR__).'/library/');
        $nameSpaceArray = array();
        while(($file = readdir($handle)) != FALSE) {
            if (is_dir(dirname(__DIR__).'/library/'.$file) && $file != '.' && $file !='..') {
                array_push($nameSpaceArray, $file.'_');
            }
        }
        $loader->registerNamespace($nameSpaceArray);

        // load helper
        Zend_Controller_Action_HelperBroker::addHelper(new Zend_Layout_Controller_Action_Helper_Layout);

    }

}

