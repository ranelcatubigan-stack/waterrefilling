<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory Transaction</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/sean_style.css') }}">
</head>

<body>

<div class="container mt-4">

<div class="mb-4">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link"  href="/employees">Employees</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/inventories">Inventory</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/suppliers">Suppliers</a>
  </li>
    <li class="nav-item">
    <a class="nav-link " href="/maintenances">Maintenance</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="/transactions">Inventory Transactions</a>
  </li>
</ul>
</div>

  <h1>Add a Transaction</h1>

  <form action="/transactions123" method="POST" class="product-form">
    @csrf

    <div class="form-group" style="max-width: 260px; margin-bottom: 20px;">
      <label for="category">Employee Name: </label>
      <select name="employee_id" id="category" class="form-select-styled">
        <option value="">Employee Name</option>
        @foreach ($emps as $e)
          <option value="{{ $e->id }}">{{ $e->first_name }}</option>
        @endforeach
      </select>
    </div>


    <div class="form-group" style="max-width: 260px; margin-bottom: 20px;">
      <label for="category">Item Name: </label>
      <select name="inventory_id" id="category" class="form-select-styled">
        <option value="">Item Name</option>
        @foreach ($invs as $i)
          <option value="{{ $i->id }}">{{ $i->item_name }}</option>
        @endforeach
      </select>
    </div>

        <div class="form-group" style="max-width: 260px; margin-bottom: 20px;">
      <label for="category">Supplier: </label>
      <select name="supplier_id" id="category" class="form-select-styled">
        <option value="">Supplier</option>
        @foreach ($sups as $s)
          <option value="{{ $s->id }}">{{ $s->supplier_name }}</option>
        @endforeach
      </select>
    </div>

        <div class="form-group" style="max-width: 260px; margin-bottom: 20px;">
      <label for="category">Type: </label>
      <select name="t_type" id="category" class="form-select-styled">
        <option> IN </option>
        <option>OUT</option>
      </select>
    </div>



        <div class="form-group" style="max-width: 360px; margin-bottom: 20px;">
      <label for="name">Quantity</label>
      <input type="text" id="name" name="t_quantity" >
    </div>
    
        <div class="form-group" style="max-width: 360px; margin-bottom: 20px;">
      <label for="name">Date</label>
      <input type="date" id="name" name="t_date" >
    </div>

        <div class="form-group" style="max-width: 360px; margin-bottom: 20px;">
      <label for="name">Notes</label>
      <input type="text" id="name" name="t_notes" >
    </div>

    <button type="submit" class="btn-submit">Save Transaction</button>

  </form>

  <hr>

  <p class="section-label">All Inventory Transactions</p>

  <table class="product-table">
    <thead>
      <tr>
        <th style="width: 60px;">ID</th>
        <th>Employee Name</th>
        <th>Item Name</th>
        <th>Supplier</th>
        <th>Type</th>
        <th>Quantity</th>
        <th>Date</th>
        <th>Notes</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($trans as $t)
      <tr>
        <td class="td-id">{{ $t->id }}</td>
        <td><span class="category-badge">{{ $t->employee->first_name }}</span></td>
        <td><span class="category-badge">{{ $t->inventory->item_name }}</span></td>
        <td><span class="category-badge">{{ $t->supplier->supplier_name }}</span></td>
        <td class="td-name">{{ $t->type }}</td>
        <td class="td-name">{{ $t->quantity }}</td>
        <td class="td-name">{{ $t->date }}</td>
        <td class="td-name">{{ $t->notes }}</td>
        
        <td>
          <a class="btn-edit" href="/transactions/{{ $t->id }}/transactionsedit">Edit</a>
          <form action="/transactions/{{ $t->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn-delete" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>

</body>
</html>