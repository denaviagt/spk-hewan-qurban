<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'user_id', 'image'];

    public function animalType()
    {
        return $this->belongsTo(AnimalType::class);
    }

    public function criteriaAnimals()
    {
        return $this->hasMany(CriteriaAnimal::class);
    }

    public function sumNormalized()
    {
        return $this->criteriaAnimals->map(function ($criteriaAnimal) {
            return $criteriaAnimal->normalizeMatrix($criteriaAnimal->criteria->criteriaAnimals->filter(function ($ca) {
                    return $ca->animal->animalType->id == $this->animalType->id;
                })) * ($criteriaAnimal->criteria->weight / 100);
        })->sum();
    }
}
