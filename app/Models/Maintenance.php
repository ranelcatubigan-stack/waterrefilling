<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $fillable = [
        'maintenance_id',
        'employee_id',
        'supplier_id',
        'inventory_id',
        'equipment_name',
        'maintenance_type',
        'maintenance_date',
        'cost',
        'status',
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
