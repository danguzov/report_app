<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    protected $fillable = [
        'theme_number',
        'theme_name'
        ];

    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}
