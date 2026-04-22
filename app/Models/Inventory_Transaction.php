<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory_Transaction extends Model
{
    protected $table = 'inventory_transactions';

    protected $fillable = [
        'employee_id',
        'supplier_id',
        'inventory_id',
        'quantity',
        'transaction_type',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
}
