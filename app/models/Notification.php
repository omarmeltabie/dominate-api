<?php
/**
 * Created by PhpStorm.
 * User: Khaled Osama
 * Date: 8/23/14
 * Time: 8:59 PM
 */

class Notification extends Eloquent {

    protected $table = 'notifications';
    protected $fillable =array('user_id','description','link');


    public function user(){

        return $this->belongsTo('User','user_id');
    }
}



