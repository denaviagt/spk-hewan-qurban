<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;

    public function criteriaAnimals()
    {
        return $this->hasMany(CriteriaAnimal::class);
    }
}
