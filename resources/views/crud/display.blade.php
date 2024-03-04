@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Employee List</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $employee)
                        <tr>
                            <td>{{ $employee->employee_id }}</td>
                            <td>{{ $employee->name }}</td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->address }}</td>
                            <td>{{ $employee->salary }}</td>
                            <td>
                                <a href="{{ route('edit', $employee->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <!-- Add delete button or other actions as needed -->
                                <form action="{{ route('delete', $employee->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button>Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
