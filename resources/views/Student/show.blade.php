@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Student Details</h2>
                <a class="btn btn-primary" href="{{ route('Student-table') }}">Back</a>
            </div>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <strong>Student Name:</strong>
                <p>{{ $student->student_name }}</p>
            </div><br>
            <div class="form-group">
                <strong>Class Teacher:</strong>
                <p>{{ $student->teacher->name }}</p>
            </div><br>
            <div class="form-group">
                <strong>Class:</strong>
                <p>{{ $student->class }}</p>
            </div><br>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <strong>Admission Date:</strong>
                <p>{{ date('d-m-Y', strtotime($student->admission_date)) }}</p>
            </div><br>
            <div class="form-group">
                <strong>Yearly Fees:</strong>
                <p>{{ number_format($student->yearly_fees, 2) }} USD</p>
            </div><br>
        </div>
    </div>

</div>
@endsection
