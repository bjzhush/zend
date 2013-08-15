<?php
class Base_Registry extends Zend_Registry
{
    /**
     * getDb 
     * 
     * @static
     * @access public
     * @return Zend_Db_Table::getDefaultAdapter
     */
    public static function getDb($table = NULL) {
        if (is_null($table)) {
            if (!self::isRegistered('getDefaultAdapter')) {
                self::set('getDefaultAdapter', Zend_Db_Table::getDefaultAdapter());
            }
            return self::get('getDefaultAdapter');
        } else {
            $table = 'Db_'.$table;
            if (!self::isRegistered($table)) {
                self::set($table, new $table());
            }
            return self::get($table);
        }
    }
}
