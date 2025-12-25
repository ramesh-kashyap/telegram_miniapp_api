<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
      protected $table = 'incomes';
      protected $fillable = [
        'user_id',
        'user_id_fk',
        'amt',
        'amount',
        'remarks',
        'ttime',
        'level',
        'rname',
        'fullname',
        'invest_id',
        'credit_type',    
    ];
}
