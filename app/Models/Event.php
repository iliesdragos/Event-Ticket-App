<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $fillable = ['id','titlu', 'descriere', 'imagine', 'data_ora', 'adresa', 'pret_bilet', 'sponsori', 'parteneri', 'contact'];

}
