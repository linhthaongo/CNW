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
        <h1 class="text-primary mt-3 mb-4 text-center"><b>ADD STUDENT</b></h1>
        <div class="card">
            <div class="card-header">Add Student</div>
            <div class="card-body">
                <form method="post" action="{{ route('students.store') }}">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-label-form">program_id</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="txt_program_id">
                                @foreach ($programs as $program)
                                    <option value="{{ $program->id }}">{{ $program->id }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-label-form">GivenNames</label>
                        <div class="col-sm-10">
                            <input type="text" name="txt_givenNames" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-label-form">SurName</label>
                        <div class="col-sm-10">
                            <input type="text" name="txt_surName" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-label-form">Date_of_birth</label>
                        <div class="col-sm-10">
                            <input type="date" name="txt_Date_of_birth" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-label-form">YearEnrolled</label>
                        <div class="col-sm-10">
                            <input type="number" min="2002" max="2099" name="txt_YearEnrolled" class="form-control" />
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('students.index') }}" class="btn btn-warning">Back</a>
                        <input type="submit" class="btn btn-primary" value="Add" />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection('content')
