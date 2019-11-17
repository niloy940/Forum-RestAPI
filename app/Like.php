<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reply;

class Like extends Model
{
    protected $fillable = ['user_id'];

    public function reply()
    {
        return $this->belongsTo(Reply::class);
    }
}
