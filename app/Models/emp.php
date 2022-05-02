<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emp extends Model
{
   protected $table = 'employee';
   protected $primaryKey = 'id';
   protected $fillable = ['name','city','phone'];
}
