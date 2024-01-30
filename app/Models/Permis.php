<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permis extends Model
{
    use HasFactory;
    public $timestamps=false;

    protected $fillable=[
        'type',
        'dateExperation',
        'etudiant_id',

    ];
    
    public function etudiant(){
        return $this->belongsTo(Etudiant::class);
    }
}
