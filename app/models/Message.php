<?php
/**
 * Created by PhpStorm.
 * User: Khaled Osama
 * Date: 8/23/14
 * Time: 8:56 PM
 */

class Message extends Eloquent {

    protected $table = 'messages';
    protected $fillable =array('subject','body','sender_id','status');



    public function sender(){

        return $this->belongsTo('User','sender_id');
    }

    public function recipients(){

        return $this->belongsToMany('User','message_user','message_id','user_id');
    }
} 