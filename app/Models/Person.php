<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $table = 'Person';
    protected $primaryKey = 'personID';

    use HasFactory;
    protected $fillable = ['name', 'age', 'nationalityID', 'birthDate'];

    public $timestamps = false;
}
