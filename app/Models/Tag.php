<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function slug(): Attribute{
        return Attribute::make(
            get: fn () => strtolower(str_replace(' ', '-', $this->name))
        );
    }
}
