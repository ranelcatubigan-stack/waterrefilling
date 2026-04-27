<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Maintenance Records</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/sean_style.css') }}">
</head>

<body>


<div class="container mt-4">
<div class="mb-3">
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
    <a class="nav-link active" href="/maintenances">Maintenance</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/transactions">Inventory Transactions</a>
  </li>
</ul>
</div>

  <h1>Add a Maintenance Record</h1>

  <form action="/maintenances123" method="POST" class="product-form">
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



        <div class="form-group" style="max-width: 360px; margin-bottom: 20px;">
      <label for="name">Equipment Name: </label>
      <input placeholder="Water Tank" type="text" id="name" name="m_equipment_name" >
    </div>

            <div class="form-group" style="max-width: 260px; margin-bottom: 20px;">
      <label for="category">Type: </label>
      <select name="m_maintenance_type" id="category" class="form-select-styled">
        <option> DAMAGE </option>
        <option>ROUTINE</option>
      </select>
    </div>
    
        <div class="form-group" style="max-width: 360px; margin-bottom: 20px;">
      <label for="name">Start Date</label>
      <input type="date" id="name" name="m_start_date" >
    </div>

        <div class="form-group" style="max-width: 360px; margin-bottom: 20px;">
      <label for="name">Completion Date</label>
      <input type="date" id="name" name="m_completion_date" >
    </div>

        <div class="form-group" style="max-width: 360px; margin-bottom: 20px;">
      <label for="name">Cost</label>
      <input placeholder="₱ 1500" type="text" id="name" name="m_cost" >
    </div>

            <div class="form-group" style="max-width: 260px; margin-bottom: 20px;">
      <label for="category">Type: </label>
      <select name="m_status" id="category" class="form-select-styled">
        <option> PENDING </option>
        <option>COMPLETE</option>
      </select>
    </div>

    <button type="submit" class="btn-submit">Save Maintenance Record</button>

  </form>

  <hr>

  <p class="section-label">All Maintenance Records</p>

  <table class="product-table">
    <thead>
      <tr>
        <th style="width: 60px;">ID</th>
        <th>Employee Name</th>
        <th>Equipment Name</th>
        <th>Maintenance Type</th>
        <th>Start Date</th>
        <th>Completion Date</th>
        <th>Cost</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($mains as $m)
      <tr>
        <td class="td-id">{{ $m->id }}</td>
        <td><span class="category-badge">{{ $m->employee->first_name }}</span></td>
        <td class="td-name">{{ $m->equipment_name }}</td>
        <td class="td-name">{{ $m->maintenance_type }}</td>
        <td class="td-name">{{ $m->start_date }}</td>
        <td class="td-name">{{ $m->completion_date }}</td>
        <td class="td-name">₱ {{ $m->cost }}</td>
        <td class="td-name">{{ $m->status }}</td>
        
        <td>
          <a class="btn-edit" href="/maintenances/{{ $m->id }}/maintenancesedit">Edit</a>
          <form action="/maintenances/{{ $m->id }}" method="POST" style="display:inline;">
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