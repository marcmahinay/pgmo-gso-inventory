<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function transactions() {
        return $this->belongsToMany('App\Transaction')
            ->withPivot('id','quantity','unit_cost','total_cost','balance_quantity','balance_unit_cost','balance_total_cost');
    }

    public function uom() : BelongsTo
    {
        return $this->belongsTo(UOM::class);
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


}
