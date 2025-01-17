<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
	protected $fillable = ['question', 'answer', 'is_answered', 'name', 'email'];

	protected $casts = [
		'question' => 'array',
		'answer'   => 'array',
	];
}
