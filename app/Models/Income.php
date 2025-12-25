<?php

namespace App\Models;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> a6d3d53c5192b656f7e2a41485fdda9aec9afe65
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
<<<<<<< HEAD
      protected $table = 'incomes';
      protected $fillable = [
        'user_id',
        'user_id_fk',
        'amt',
=======
    use HasFactory;

    protected $table = 'incomes'; // Table name

    protected $fillable = [
        'user_id',
        'user_id_fk',
        'amt',       // your table has 'amt' column too
>>>>>>> a6d3d53c5192b656f7e2a41485fdda9aec9afe65
        'amount',
        'remarks',
        'ttime',
        'level',
        'rname',
        'fullname',
        'invest_id',
<<<<<<< HEAD
        'credit_type',    
=======
        'credit_type',
>>>>>>> a6d3d53c5192b656f7e2a41485fdda9aec9afe65
    ];
}
