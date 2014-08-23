<?php
/**
 * Created by PhpStorm.
 * User: Khaled Osama
 * Date: 8/23/14
 * Time: 7:17 PM
 */

 $tables =array("users","messages","user_info","user_permissions","notifications","message_user");

foreach($tables as $table)
{

    exec("php artisan migrate:make create_".$table."_table --create=".$table);
}