<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    //
    protected $table = "shippers";
    protected $guarded = [];
    protected $primaryKey="ShipperId";
}
