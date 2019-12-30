<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{

    protected $table = 'jenis_motor';
    protected $primaryKey = 'idmotor';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $guarded = ['idmotor'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
        
    }