<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'registrationDate',
        'rollNo',
        'class',
        'gender',
        'mobileNumber',
        'parentsName',
        'parentsMobileNumber',
        'dateOfBirth',
        'bloodGroup',
        'address',
        'upload',
    ];
}