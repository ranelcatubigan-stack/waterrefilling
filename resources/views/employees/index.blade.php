<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="container">
  <div style="display: flex; gap: 10px; margin-bottom: 20px;">
      <a href="/inventories" class="nav-bookmark" style="background: var(--water-blue);">Inventories</a>
      <a href="/suppliers" class="nav-bookmark" style="background: var(--water-blue);">Suppliers</a>
      <a href="/employees" class="nav-bookmark" style="background: var(--water-blue);">Employees</a>
      <a href="/maintenances" class="nav-bookmark" style="background: var(--water-blue);">Maintenances</a>
        <a href="/transactions" class="nav-bookmark" style="background: var(--water-blue);">Transactions</a>
  </div>

    <h1>Employees</h1>

    <form action="/employees123" method="POST" class="product-form">
        @csrf
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name123" placeholder="Enter first name" required>
        </div>

        <div class="form-group">
            <label>Middle Name</label>
            <input type="text" name="middle_name123" placeholder="Enter middle name">
        </div>

        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name123" placeholder="Enter last name" required>
        </div>

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username123" placeholder="Enter username" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password123" placeholder="Enter password" required>
        </div>

        <div class="form-group">
            <label>Role</label>
            <select name="role123" required>
                <option value="staff">Staff</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <button type="submit" class="btn-submit">Add Employee</button>
    </form>

    <hr style="border: 0; height: 1px; background: var(--bubble-glow); margin: 30px 0;">

    <table class="product-table" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td style="font-family: monospace;">#{{ $item->id }}</td>
                <td><strong>{{ $item->first_name }}</strong></td>
                <td>{{ $item->middle_name }}</td>
                <td>{{ $item->last_name }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->role }}</td>
                <td>
                    <a href="/employees/{{ $item->id }}/edit" style="color: var(--water-blue); font-weight: 600;">Edit</a>
                    <form action="/employees/{{ $item->id }}" method="POST" style="display:inline;">
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