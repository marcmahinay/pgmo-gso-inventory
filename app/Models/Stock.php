<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    public function transactions() {
        return $this->belongsToMany('App\Transaction')
            ->withPivot('id','quantity','unit_cost','total_cost','balance_quantity','balance_unit_cost','balance_total_cost');
    }

    public function item() : BelongsTo
    {
        return $this->belongsTo(Item::class);
    }

}
