<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory_Transaction;
use App\Models\Inventory;
use App\Models\Supplier;
use App\Models\Employee;

class Inventory_TransactionController extends Controller
{
    public function transactionsindex()
    {
        $transactions = Inventory_Transaction::all();
        $employees = Employee::all();
        $inventorys = Inventory::all();
        $suppliers = Supplier::all();
        


        return view('transactions.transactionsindex',
         [ 'trans' => $transactions,
            'emps' => $employees,
            'invs' => $inventorys,
            'sups' => $suppliers
         ]);
    }

    public function  transactionsstore(Request $request)
    {
        Inventory_Transaction::create([
            'employee_id' => $request->employee_id,
            'inventory_id' => $request->inventory_id,
            'supplier_id' => $request->supplier_id,
            'type' => $request->t_type,
            'quantity' => $request->t_quantity,
            'date' => $request->t_date,
            'notes' => $request->t_notes

        ]);
        return redirect('/transactions');
    } 

        public function transactionsedit($id){

    $transaction = Inventory_Transaction::findOrFail($id);
    $employee = Employee::all();
    $inventory= Inventory::all();
    $supplier = Supplier::all();

    return view('transactions.transactionsedit', ['tran' => $transaction,
            'emp' => $employee,
            'inv' => $inventory,
            'sup' => $supplier]);
    }

    public function transactionsupdate(Request $request, $id){

    $transaction = Inventory_Transaction::findOrFail($id);

    $transaction -> update ([

            'employee_id' => $request->t_employee_id,
            'inventory_id' => $request->t_inventory_id,
            'supplier_id' => $request->t_supplier_id,
            'type' => $request->t_type,
            'quantity' => $request->t_quantity,
            'date' => $request->t_date,
            'notes' => $request->t_notes

    ]);

    return redirect('/transactions');
    }

    public function transactionsdestroy($id){

    $transaction = Inventory_Transaction::findOrFail($id);

    $transaction -> delete();

    return redirect('/transactions');

    }


 
    
}

