<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function Author()
	{
		return $this->belongsTo('App\Models\User', 'author_id', 'id');
	}
}
