<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable =['name','project','adForm','template','description','number','status','principalPM','principalRD'];


}
