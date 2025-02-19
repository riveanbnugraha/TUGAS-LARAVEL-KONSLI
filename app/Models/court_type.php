<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class court_type extends Model
{
    public function court() {
        // return $this->belongsTo(court_type::class, 'court_type_id');
    }

    use HasFactory;
}
