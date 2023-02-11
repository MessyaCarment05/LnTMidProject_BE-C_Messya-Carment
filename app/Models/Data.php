<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table='karyawan';
    protected $fillable = [
        'Name',
        'Age',
        'Address',
        'Telephone'
    ];
   
}
