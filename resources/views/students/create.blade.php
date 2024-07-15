@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Student</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="studname">Name:</label>
            <input type="text" name="studname" class="form-control" id="studname">
        </div>
        <div class="form-group">
            <label for="course">Course:</label>
            <input type="text" name="course" class="form-control" id="course">
        </div>
        <div class="form-group">
            <label for="fee">Fee:</label>
            <input type="text" name="fee" class="form-control" id="fee">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
