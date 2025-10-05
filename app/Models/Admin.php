<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
   protected $fillable = [
        'email', 'username', 'password',
    ];

    public function isAdmin()
    {
        return true;
    }

    public function isSubAdmin()
    {
        return false;
    }
}
