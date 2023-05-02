<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function transactable() {
        return $this->morphTo();
    }

    public function items() {
        return $this->belongsToMany('App\Item')
            ->withPivot('id','quantity','unit_cost','total_cost','balance_quantity','balance_unit_cost','balance_total_cost');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
