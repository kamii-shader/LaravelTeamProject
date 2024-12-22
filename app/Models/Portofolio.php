<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
