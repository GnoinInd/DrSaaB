<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senddata extends Model
{
    use HasFactory;
    protected $table = 'send_datas';
    protected $fillable = ['fname', 'lname', 'email', 'mobile'];

}