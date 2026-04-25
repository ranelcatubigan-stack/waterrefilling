<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Refilling - Inventory</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
    <div style="display: flex; gap: 10px; margin-bottom: 20px;">
        <a href="/suppliers" class="nav-bookmark">Suppliers</a>
        <a href="/employees" class="nav-bookmark">Employees</a>
        <a href="/inventories" class="nav-bookmark" style="background: var(--water-blue);">Inventories</a>
        <a href="/maintenances" class="nav-bookmark">Maintenances</a>
        <a href="/transactions" class="nav-bookmark">Transactions</a>
    </div>

    <h1>Water Refilling Inventory</h1>

    <form action="/inventories123" method="POST" class="product-form">
        @csrf
        <div class="form-group">
            <label>Item Name</label>
            <input type="text" name="item_name123" required>
        </div>

        <div class="form-group">
            <label>Quantity</label>
            <input type="number" name="quantity123" placeholder="0" required>
        </div>

        <div class="form-group">
            <label>Reorder Level</label>
            <input type="number" name="reorder_level123" placeholder="10" required>
        </div>
        
        <button type="submit" class="btn-submit">Add to Stock</button>
    </form>

    <hr style="border: 0; height: 1px; background: var(--bubble-glow); margin: 30px 0;">

    <table class="product-table" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>Stock Status</th>
                <th>Reorder Point</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td style="font-family: monospace;">#{{ $item->id }}</td>
                <td><strong>{{ $item->item_name }}</strong></td>
                <td>{{ $item->quantity }} units</td>
                <td>{{ $item->reorder_level }}</td>
                <td>
                    <a href="/inventories/{{ $item->id }}/edit" style="color: var(--water-blue); font-weight: 600;">Edit</a>
                    <form action="/inventories/{{ $item->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background:none; border:none; color: #ff7675; cursor:pointer; font-family: inherit; font-weight: 600;">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>