<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
///**
// * The attributes that are mass assignable.
// *
// * @var array<int, string>
// */


//info
    protected $fillable = ["name", "text", "created_at", "updated_at"];
}

