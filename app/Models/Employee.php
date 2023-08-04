<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function transactionsMorph() {
        return $this->morphMany('App\Models\Transaction', 'transactable');
    }

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}
