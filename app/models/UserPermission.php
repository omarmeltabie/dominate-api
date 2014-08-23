<?php
/**
 * Created by PhpStorm.
 * User: Khaled Osama
 * Date: 8/23/14
 * Time: 8:58 PM
 */

class UserPermission extends Eloquent {

    protected $table = 'user_permissions';
    protected $fillable =array('user_id','permission_type');



    public function user(){

        return $this->belongsTo('User','user_id');
    }
} 