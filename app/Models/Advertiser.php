<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertiser extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'national_id',
        'id_photo',
        'bank_account',
        
];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


   /**
         * Get all of the comments for the Properity
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function properity(): HasMany
        {
            return $this->hasMany(Properity::class);
        }
}
