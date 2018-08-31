<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class useraddr extends Model
{
     protected $table = 'useraddr';
    protected $fillable = [
        'user_id', 'addr_line1','addr_line2','addr_line3','addr_line4' ,'city','district','pin','mob_no','addr_name',
    ];
     public $timestamps = true;
}
