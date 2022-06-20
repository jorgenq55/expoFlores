<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RESTRICCION extends Model
{
    //use HasFactory;
    protected $table="RESTRICCION";
    protected $primaryKey="CODIGORES";
    protected $fillable = ['NUMERODIGI', 'NOMBREDIA', 'H_INIC', 'H_FIN'];

    public $timestamps = false;

}
