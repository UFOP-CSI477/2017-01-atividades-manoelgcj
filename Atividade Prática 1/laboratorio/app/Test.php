<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['id', 'date', 'user_id', 'procedure_id'];
}
