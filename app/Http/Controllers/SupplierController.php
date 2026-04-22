<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('suppliers.index', ['items' => $suppliers]);
    }

    public function store(Request $request)
    {
        Supplier:: create([
            'supplier_name' => $request->supplier_name123,
            'contact_number' => $request->contact_number123,
            'email_address' => $request->email_address123,
            'address' => $request->address123,
        ]);
        return redirect('/suppliers');
    }

    
    public function edit($id)
    {
        $suppliers = Supplier::findorfail($id);
        return view('suppliers.edit', ['item' => $suppliers]);
    }
    public function update(Request $request, $id)
    {
        $suppliers = Supplier::findorfail($id);
        $suppliers->update([
            'supplier_name' => $request->supplier_name123,
            'contact_number' => $request->contact_number123,
            'email_address' => $request->email_address123,
            'address' => $request->address123,      

        ]);

        return redirect('/suppliers');
    }
        public function destroy($id)
        {
            $suppliers = Supplier::findorfail($id);
            $suppliers->delete();
            return redirect('/suppliers');
        }
}
