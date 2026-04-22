<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Supplier</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
  <h1>Edit Supplier</h1>

  <form action="/suppliers/{{ $item->id }}" method="POST" class="product-form">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label>Supplier Name:</label>
      <input type="text" name="supplier_name123" value="{{ $item->supplier_name }}">
    </div>

    <div class="form-group">
      <label>Contact Number:</label>
      <input type="text" name="contact_number123" value="{{ $item->contact_number }}">
    </div>

    <div class="form-group">
      <label>Email Address:</label>
      <input type="email" name="email_address123" value="{{ $item->email_address }}">
    </div>

    <div class="form-group">
      <label>Business Address:</label>
      <input type="text" name="address123" value="{{ $item->address }}">
    </div>

    <button type="submit" class="btn-submit">Update Record</button>
  </form>

  <div style="text-align: center; margin-top: 20px;">
    <a href="/suppliers" style="color: var(--deep-ocean); text-decoration: none; font-weight: 600;">← Return to List</a>
  </div>
</div>
  
</body>
</html>