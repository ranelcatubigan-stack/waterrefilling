<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Maintenance Records</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/sean_style.css') }}">
</head>

<body>


<div class="container mt-4">

  <h1>Update Maintenance Record</h1>

  <form action="/maintenances/{{ $main->id }}" method="POST" class="product-form">
    @csrf
    @method('PUT')

    <div class="form-group" style="max-width: 260px; margin-bottom: 20px;">
      <label for="category">Employee Name: </label>
      <select name="employee_id" id="category" class="form-select-styled">
        <option value="">Employee Name</option>
        @foreach ($emp as $e)
          <option value="{{ $e->id }}" {{ $main->employee_id == $e->id }} ? 'selected' : ''> {{ $e->first_name }}</option>
        @endforeach
      </select>
    </div>



        <div class="form-group" style="max-width: 360px; margin-bottom: 20px;">
      <label for="name">Equipment Name: </label>
      <input type="text" id="name" name="m_equipment_name" value="{{ $main->equipment_name }}">
    </div>

            <div class="form-group" style="max-width: 260px; margin-bottom: 20px;">
      <label for="category">Type: </label>
      <select name="m_maintenance_type" id="category" class="form-select-styled" value="{{ $main->type }}">
        <option> DAMAGE </option>
        <option>ROUTINE</option>
      </select>
    </div>
    
        <div class="form-group" style="max-width: 360px; margin-bottom: 20px;">
      <label for="name">Start Date</label>
      <input type="date" id="name" name="m_start_date" value="{{ $main->start_date }}">
    </div>

        <div class="form-group" style="max-width: 360px; margin-bottom: 20px;">
      <label for="name">Completion Date</label>
      <input type="date" id="name" name="m_completion_date" value="{{ $main->completion_date }}">
    </div>

        <div class="form-group" style="max-width: 360px; margin-bottom: 20px;">
      <label for="name">Cost</label>
      <input type="text" id="name" name="m_cost" value="{{ $main->cost }}" >
    </div>

            <div class="form-group" style="max-width: 260px; margin-bottom: 20px;">
      <label for="category">Status: </label>
      <select name="m_status" id="category" class="form-select-styled" value="{{ $main->status }}">
        <option> PENDING </option>
        <option>COMPLETE</option>
      </select>
    </div>

    <button type="submit" class="btn-submit">Update Maintenance Record</button>
<a href="/maintenances" class="btn-cancel">Cancel</a>
  </form>

  <hr>

</div>

</body>
</html>