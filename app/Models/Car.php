<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Routing\Loader\ProtectedPhpFileLoader;

class Car extends Model
{
    use HasFactory;
    Protected $fillable =[
        'title',
        'description',
        'published',
    ];
}
