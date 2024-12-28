<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'groom_name',
        'bride_name',
        'locations',
        'date',
        'phone',
        'email',
        'main_color',
        'secondary_color'
    ];

    protected function casts(): array
    {
        return [
            'locations' => 'array',
        ];
    }

}
