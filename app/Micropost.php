<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
 protected $fillable = ['content'];

    /**
     * この投稿を所有するユーザ。（ Userモデルとの関係を定義）
     */
    public function user() //単一ユーザーが
    {
        return $this->belongsTo(User::class);
    }
    
    public function favorites_users()
    {
        //この投稿をお気に入りしたユーザー
        return $this->belongsToMany(User::class, 'favorites', 'micropost_id', 'micropost_id')->withTimestamps();
    }
}
