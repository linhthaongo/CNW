@extends('master')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container mt-5">
        <h1 class="text-primary mt-3 mb-4 text-center"><b>UPDATE STUDENT</b></h1>
        <div class="card">
            <div class="card-header">Update student</div>
            <div class="card-body">
                <form method="post" action="{{ route('students.update', $student->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label class="col-sm-2 col-label-form">program_id</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="txt_program_id">
                                @foreach ($programs as $program)
                                    <option value="{{ $program->id }}"
                                        @if ($student->program_id == $program->id) @selected(true) @endif>{{ $program->id }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-label-form">GivenNames</label>
                        <div class="col-sm-10">
                            <input type="text" name="txt_GivenNames" class="form-control"
                                value="{{ $student->GivenNames }}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-label-form">SurName</label>
                        <div class="col-sm-10">
                            <input type="text" name="txt_SurName" class="form-control" value="{{ $student->SurName }}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-label-form">Date_of_birth</label>
                        <div class="col-sm-10">
                            <input type="date" name="txt_Date_of_birth" class="form-control" value="{{ $student->Date_of_birth }}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-label-form">YearEnrolled</label>
                        <div class="col-sm-10">
                            <input type="number" min="2000" max="2099" name="txt_YearEnrolled" class="form-control" value="{{ $student->YearEnrolled }}" />
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('students.index') }}" class="btn btn-warning">Back</a>
                        <input type="submit" class="btn btn-primary" value="Save" />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection('content')
