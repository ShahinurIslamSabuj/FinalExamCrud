@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Employee</div>

                <div class="card-body">
                    <!-- Edit Form -->
                    <form method="POST" action="{{ route('update', $data->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="employee_id">Employee ID:</label>
                            <input type="text" class="form-control" id="employee_id" name="employee_id" value="{{ $data->employee_id }}" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="{{ $data->phone }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ $data->email }}" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ $data->address }}" required>
                        </div>

                        <div class="form-group">
                            <label for="salary">Salary:</label>
                            <input type="number" class="form-control" id="salary" name="salary" value="{{ $data->salary }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
