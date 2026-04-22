<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
class InventoryController extends Controller
{
     public function index()
    {
        $intentories = Inventory::all();
        return view('Inventories.index', ['items' => $intentories]);
    }

    public function store(Request $request)
    {
        Inventory:: create([
            'item_name' => $request->item_name123,
            'quantity' => $request->quantity123,
            'reorder_level' => $request->reorder_level123,
        ]);
        return redirect('/inventories');
    }

    
    public function edit($id)
    {
        $inventories = Inventory::findorfail($id);
        return view('inventories.edit', ['item' => $inventories]);
    }
    public function update(Request $request, $id)
    {
        $inventories = Inventory::findorfail($id);
        $inventories->update([
            'item_name' => $request->item_name123,
            'quantity' => $request->quantity123,
            'reorder_level' => $request->reorder_level123,
        ]);

        return redirect('/inventories');
    }
        public function destroy($id)
        {
            $inventories = Inventory::findorfail($id);
            $inventories->delete();
            return redirect('/inventories');
        }
}
