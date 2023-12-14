<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
    // protected $timestemp=false;
    public $timestamps = false;
    protected $table="etudiants";
    protected $fillable=[
        'nom',
        'prenom',
        'profile',
        
    ];
    // public function store($data)
    // {
    //     return Etudiant::create($this->createData($data));
    // }

}
