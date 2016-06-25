<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
	protected $visible = ['id', 'title', 'body', 'views', 'time', 'category_id'];
	protected $appends = ['time'];

	public function category()
    {
    	return $this->belongsTo(Category::class);
    }

	public function getTimeAttribute()
	{
		return $this->created_at->timestamp;
	}
}
