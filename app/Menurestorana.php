<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menurestorana extends Model
{
    protected $fillable = ['imgpath','restoranID','jelo','cijena'];
    protected $primaryKey = 'idjela';
}
