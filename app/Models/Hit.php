<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hit extends Model
{
    use HasFactory;
    protected $table = "hit";

    protected $fillable = [
        'page',
        'ip_address',
    ];
}
