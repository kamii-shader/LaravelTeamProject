<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'user_id', 'portofolio_id', 'amount',
    ];

    // Relasi dengan user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan campaign
    public function portofolio()
    {
        return $this->belongsTo(Portofolio::class);
    }
}
