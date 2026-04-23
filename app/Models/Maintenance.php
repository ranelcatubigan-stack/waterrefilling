<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $fillable = [
        'employee_id',
        'equipment_name',
        'maintenance_type',
        'start_date',
        'completion_date',
        'cost',
        'status',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }




}
