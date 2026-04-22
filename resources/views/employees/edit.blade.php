<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
    <h1>Update Employee</h1>

    <form action="/employees/{{ $item->id }}" method="POST" class="product-form">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name123" value="{{ $item->first_name }}">
        </div>

        <div class="form-group">
            <label for="middle_name">Middle Name:</label>
            <input type="text" id="middle_name" name="middle_name123" value="{{ $item->middle_name }}">
        </div>

        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name123" value="{{ $item->last_name }}">
        </div>

        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username123" value="{{ $item->username }}">
        </div>

        <div class="form-group">
            <label for="role">Role:</label>
            <select id="role" name="role123">
                <option value="user" {{ $item->role === 'user' ? 'selected' : '' }}>User</option>
                <option value="staff" {{ $item->role === 'staff' ? 'selected' : '' }}>Staff</option>
            </select>
        </div>
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