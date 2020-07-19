<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
  protected $fillable =['name','mobile_no','email','amount','message','paymentId','token','status'];
}
