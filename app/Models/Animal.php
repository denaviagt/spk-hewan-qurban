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
        return $this->criteriaAnimals->sum(function ($criteriaAnimal) {
            return $criteriaAnimal->normalizeMatrix($criteriaAnimal->criteria->criteriaAnimals->filter(function ($ca) {
                    return $ca->animal->animalType->id == $this->animalType->id;
                })) * ($criteriaAnimal->criteria->weight / 100);
        });
    }

    public function predicate() {
        $sumNormalized = $this->sumNormalized();
        if ($sumNormalized < 0.6) {
            return "Tidak Sah";
        }

        if ($sumNormalized >= 0.6 && $sumNormalized <= 0.85) {
            return "Sah";
        }

        if ($sumNormalized > 0.85) {
            return "Sah dan sangat baik";
        }
    }
}
