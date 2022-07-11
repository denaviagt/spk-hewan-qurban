<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id'];

    public function animalType()
    {
        return $this->belongsTo(AnimalType::class);
    }

    public function criteriaAnimals()
    {
        return $this->hasMany(CriteriaAnimal::class);
    }
}
