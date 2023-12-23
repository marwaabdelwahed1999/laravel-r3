<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Symfony\Component\Routing\Loader\ProtectedPhpFileLoader;

class Car extends Model
{
    use HasFactory,softDeletes;
    Protected $fillable =[
        'title',
        'description',
        'published',
        'image'
    ];
}
