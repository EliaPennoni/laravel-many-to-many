<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'price',
        'description',
        'image',
        'type_id'
    ];
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

}
