<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'contact'];

    protected $rules = [
        'name' => 'required|string|min:5',
        'contact' => 'required|unique:contacts,contact|min:9',
        'email' => 'required|email|unique:contacts,email',
    ];
}
