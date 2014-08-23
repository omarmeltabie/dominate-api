<?php
/**
 * Created by PhpStorm.
 * User: Khaled Osama
 * Date: 8/23/14
 * Time: 8:54 PM
 */

class UserInfo extends Eloquent {


    protected $table = 'user_info';
    protected $fillable =array('user_id','role','address','contact_number');


    public function user(){

        return $this->belongsTo('User','user_id');
    }

} 