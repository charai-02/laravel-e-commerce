<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    
    public function commands(){
        return $this->hasMany(Command::class, "id_client");
    }
}
