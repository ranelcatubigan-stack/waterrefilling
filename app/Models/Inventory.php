<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventories';

    protected $fillable = [
        'item_name',
        'quantity',
        'reorder_level',
    ];

    public function inventory_transaction()
       {
        return $this->hasMany(Inventory_Transaction::class);
       }
}
