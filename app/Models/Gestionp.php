<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gestionp extends Model
{
    use HasFactory;
    protected $fillable = [
        'region',
        'efp',
        'annexe',
        'corps',
        'nomprenom',
        'cin',
        'genre',
        'datenaissance',
        'age',
        'tel',
        'email',
        'situationfamiliale',
        'fonction',
        'statut',
        'ppr',
        'mode',
        'niveau',
        'filiere',
        'modules',
        'nbheuresparsemaine',
        'daterecrutement',
        'gradeentree',
        'gradeactuel',
        'dernierdiplome',
        'specialite',
        'observations',
    ];
}
