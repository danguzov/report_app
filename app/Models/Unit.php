<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_number',
        'unit_name'
    ];

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    public function outcome()
    {
        return $this->belongsToMany(Outcome::class);
    }
}
