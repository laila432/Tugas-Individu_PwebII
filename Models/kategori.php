<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $guarded = ['id','created_at','upadated_at'];
    protected $table ='kategori';
}
