<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'properity_id',
        'id',
       'image_name',
];







    public function image()
    {
        return $this->belongsTo(Properity::class);
    }
}
