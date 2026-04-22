<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'username',
        'password',
        'role',
    ];

    public function inventory_transaction()
       {
        return $this->hasMany(InventoryTransaction::class);
       }

}
