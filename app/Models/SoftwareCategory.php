<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoftwareCategory extends Model
{
    use HasFactory;
    protected $guard =['id'];

    public function softwares(){
        return $this->hasMany(Softwares::class);
    }
}
