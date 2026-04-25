<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Water Refilling - Suppliers</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
  <div style="display: flex; gap: 10px; margin-bottom: 20px;">
      <a href="/inventories" class="nav-bookmark" style="background: var(--water-blue);">Inventories</a>
      <a href="/suppliers" class="nav-bookmark">Suppliers</a>
      <a href="/employees" class="nav-bookmark">Employees</a>
      <a href="/maintenances" class="nav-bookmark">Maintenances</a>
        <a href="/transactions" class="nav-bookmark">Transactions</a>
  </div>

  <h1>Water Station Suppliers</h1>

  
  <form action="/suppliers123" method="POST" class="product-form">
    @csrf

    <div class="form-group">
      <label for="supplier_name">Supplier Name:</label>
      <input type="text" id="supplier_name" name="supplier_name123" placeholder="e.g. Pure Stream Plastics" required>
    </div>

    <div class="form-group">
      <label for="contact_number">Contact Number:</label>
      <input type="text" id="contact_number" name="contact_number123" placeholder="09XX-XXX-XXXX" required>
    </div>

    <div class="form-group">
      <label for="email_address">Email Address:</label>
      <input type="email" id="email_address" name="email_address123" placeholder="contact@supplier.com" required>
    </div>

    <div class="form-group">
      <label for="address">Business Address:</label>
      <input type="text" id="address" name="address123" required>
    </div>
    
    <button type="submit" class="btn-submit">Register Supplier</button>
  </form>

  <hr style="border: 0; height: 1px; background: var(--bubble-glow); margin: 30px 0;">

  <table class="product-table" style="width: 100%; border-collapse: collapse;">
    <thead>
      <tr>
        <th>ID</th>
        <th>Supplier</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Location</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($items as $item)
      <tr>
        <td>#{{ $item->id }}</td>
        <td><strong>{{ $item->supplier_name }}</strong></td>
        <td>{{ $item->contact_number }}</td>
        <td>{{ $item->email_address }}</td>
        <td>{{ $item->address }}</td>
        <td>
          <a href="/suppliers/{{ $item->id }}/edit" style="color: var(--water-blue);">Edit</a>
          <form action="/suppliers/{{ $item->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" style="background:none; border:none; color: #ff7675; cursor:pointer;">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>