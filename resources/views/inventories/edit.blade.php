<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Inventory Item</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
    <h1>Update Inventory Item</h1>

    <form action="/inventories/{{ $item->id }}" method="POST" class="product-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="item_name">Item Name:</label>
            <input type="text" id="item_name" name="item_name123" value="{{ $item->item_name }}">
        </div>

        <div class="form-group">
            <label for="quantity">Current Quantity:</label>
            <input type="number" id="quantity" name="quantity123" value="{{ $item->quantity }}">
        </div>

        <div class="form-group">
            <label for="reorder_level">Reorder Level:</label>
            <input type="number" id="reorder_level" name="reorder_level123" value="{{ $item->reorder_level }}">
        </div>

        <button type="submit" class="btn-submit">Update Inventory</button>
    </form>

    <div style="text-align: center; margin-top: 30px;">
        <hr style="border: 0; height: 1px; background: var(--bubble-glow); margin-bottom: 20px;">
        <a href="/inventories" style="color: var(--deep-ocean); text-decoration: none; font-weight: 600;">← Back to Inventory</a>
    </div>
</div>
  
</body>
</html>