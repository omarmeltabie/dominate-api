<?php

class User extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('hashed_password');

    protected $fillable =array('email','username','hashed_password','active','ip','online_at');

    public function notifications()
    {
        return $this->hasMany('Notification', 'user_id');
    }

    public function permissions()
    {
        return $this->hasMany('UserPermission', 'user_id');
    }

    public function sentMessages()
    {
        return $this->hasMany('Message', 'sender_id');
    }

    public function receivedMessages(){

        return $this->belongsToMany('Message','message_user','user_id','message_id');
    }

    public function info()
    {
        return $this->hasOne('UserInfo', 'user_id');
    }


}
