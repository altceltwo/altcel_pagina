<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cobro extends Model
{
  protected $fillable = ['datetime','transnumber','phonenumber','qty','autono','responsecode','descriptioncode'];
}
