<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriteriaAnimal extends Model
{
    use HasFactory;

    protected $fillable = ['value', 'criteria_id', 'score'];

    public function criteria()
    {
        return $this->belongsTo(Criteria::class);
    }

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }

    public function normalizeMatrix($criterialAnimals) {
        $type = $this->criteria->type;
        if ('benefit' == strtolower($type)) {
            return $this->score/$criterialAnimals->max('score');
        }

        return $criterialAnimals->min('score')/$this->score;
    }
}
