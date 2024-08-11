@extends('layouts.app')

@section('content')

<div class="container"><br>
    <h1 class="text-center mb-4">Edit Student Details</h1>

    <form action="{{ route('Student-update', [$students->id]) }}" method="POST" class="shadow p-4 rounded">
        @csrf
        {{ method_field('PUT') }}

        <div class="mb-3">
            <label for="student_name" class="form-label">Student Name</label>
            <input type="text" class="form-control" id="student_name" name="student_name" value="{{ $students->student_name }}" />
            @error('student_name')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="class_teacher_id" class="form-label">Class Teacher</label>
            <select class="form-control" id="class_teacher_id" name="class_teacher_id" required>
                <option value="">Select Teacher</option>
                @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}"
                        {{ old('class_teacher_id', $students->class_teacher_id) == $teacher->id ? 'selected' : '' }}>
                        {{ $teacher->name }}
                    </option>
                @endforeach
            </select>
            @error('class_teacher_id')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>        

        <div class="mb-3">
            <label for="class" class="form-label">Class</label>
            <input type="text" class="form-control" id="class" name="class" value="{{ $students->class }}" />
            @error('class')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="admission_date" class="form-label">Admission Date</label>
            <input type="date" class="form-control" id="admission_date" name="admission_date" value="{{ $students->admission_date }}" />
            @error('admission_date')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="yearly_fees" class="form-label">Yearly Fees</label>
            <input type="number" class="form-control" id="yearly_fees" name="yearly_fees" value="{{ $students->yearly_fees }}" />
            @error('yearly_fees')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary w-100" >Add Student</button>
    </form>
</div>

@endsection
