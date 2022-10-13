<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model {
    use HasFactory;

    public function cars() {
        return $this->hasManyThrough(Cars::class, Color::class);
    }
}

