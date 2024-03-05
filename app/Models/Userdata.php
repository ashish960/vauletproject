<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdata extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phoneno',
        'password',
    ];  

    
    use HasFactory;
    protected $table ="userdatas";
    protected $primary="id";


}
