<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Inventory Transaction</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/sean_style.css') }}">
</head>

<body>

<div class="container mt-4">

  <h1>Edit a Transaction</h1>

  <form action="/transactions/{{ $tran->id }}" method="POST" class="product-form">
    @csrf
    @method('PUT')

    <div class="form-group" style="max-width: 260px; margin-bottom: 20px;">
      <label for="category">Employee Name: </label>
      <select name="t_employee_id" id="category" class="form-select-styled">
        <option value="">Employee Name</option>
        @foreach ($emp as $e)
          <option value="{{ $e->id }} " {{ $tran->employee_id == $e->id ? 'selected' : '' }}>{{ $e->first_name }}</option>
        @endforeach
      </select>
    </div>


    <div class="form-group" style="max-width: 260px; margin-bottom: 20px;">
      <label for="category">Item Name: </label>
      <select name="t_inventory_id" id="category" class="form-select-styled">
        <option value="">Item Name</option>
        @foreach ($inv as $i)
          <option value="{{ $i->id }}" {{ $tran->inventory_id == $i->id ? 'selected' : '' }}>{{ $i->item_name }}</option>
        @endforeach
      </select>
    </div>

        <div class="form-group" style="max-width: 260px; margin-bottom: 20px;">
      <label for="category">Supplier: </label>
      <select name="t_supplier_id" id="category" class="form-select-styled">
        <option value="">Supplier</option>
        @foreach ($sup as $s)
          <option value="{{ $s->id }}" {{ $tran->supplier_id == $s->id ? 'selected' : '' }}>{{ $s->supplier_name }}</option>
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
      <input type="text" id="name" name="t_quantity" value="{{ $tran->quantity   }}">
    </div>
    
        <div class="form-group" style="max-width: 360px; margin-bottom: 20px;">
      <label for="name">Date</label>
      <input type="date" id="name" name="t_date" value="{{ $tran->date }}">
    </div>

        <div class="form-group" style="max-width: 360px; margin-bottom: 20px;">
      <label for="name">Notes</label>
      <input type="text" id="name" name="t_notes" value="{{ $tran->notes }}">
    </div>

    <button type="submit" class="btn-submit">Update Transaction</button>
    <a href="/transactions" class="btn-cancel">Cancel</a>

  </form>

  <hr>


</div>

</body>
</html>