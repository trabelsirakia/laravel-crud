@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Student Details</h2>
    <table class="table">
        <tr>
            <th>ID</th>
            <td>{{ $student->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $student->studname }}</td>
        </tr>
        <tr>
            <th>Course</th>
            <td>{{ $student->course }}</td>
        </tr>
        <tr>
            <th>Fee</th>
            <td>{{ $student->fee }}</td>
        </tr>
    </table>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
