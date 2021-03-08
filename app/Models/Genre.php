<?php

namespace App\Models;

use App\Http\Controllers\MembreController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    public function membres(){
        return $this->hasMany(Membre::class);
    }
}
