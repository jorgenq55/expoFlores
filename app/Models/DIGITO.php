<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DIGITO extends Model
{
    //use HasFactory;
    protected $table="DIGITO";
    protected $primaryKey="NUMERODIGI";

    public $timestamps = false;
}
