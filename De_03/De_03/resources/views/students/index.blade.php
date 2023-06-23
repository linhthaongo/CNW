@extends('master')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <div class="container mt-5">
        <h1 class="text-primary mt-3 mb-4 text-center"><b>STUDENT</b></h1>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col col-md-11"><b>Student Data</b></div>
                    <div class="col col-md-1">
                        <a href="{{ route('students.create') }}" class="btn btn-success btn-sm float-end">Add</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>#</th>
                        <th>program_id</th>
                        <th>GivenNames</th>
                        <th>SurName</th>
                        <th>Date_of_birth</th>
                        <th>YearEnrolled</th>
                        <th>action</th>
                    </tr>
                    @if (count($data) > 0)
                        @php
                            $dem = 0;
                        @endphp
                        @foreach ($data as $row)
                            @php
                                $dem += 1;
                            @endphp
                            <tr>
                                <td>{{ $dem }}</td>
                                <td>{{ $row->program_id }}</td>
                                <td>{{ $row->GivenNames }}</td>
                                <td>{{ $row->SurName }}</td>
                                <td>{{ $row->Date_of_birth }}</td>
                                <td>{{ $row->YearEnrolled }}</td>

                                <td>
                                    <form method="post" action="{{ route('students.destroy', $row->id) }}">
                                        @csrf 
                                        @method('DELETE') {{-- tạo ra trường ẩn trong form chứa phương thức HTTP DELETE --}}
                                        <a href="{{ route('students.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center">No Data Found</td>
                        </tr>
                    @endif
                </table>
                {!! $data->links() !!}  
            </div>
        </div>
    </div>
@endsection
