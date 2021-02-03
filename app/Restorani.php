<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restorani extends Model
{
    protected $fillable = ['naziv','grad','adresa','email','telefon'];
}
