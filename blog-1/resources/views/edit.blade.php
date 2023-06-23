@extends('layout')
@section('content')
    <div class="contaniner">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sửa</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('airplanes.index')}}"class="btn btn-primary float-end">Danh sách journal</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('airplanes.update' , $item->RegistrationNumber)}}"method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                                <strong>Registration Number</strong>
                                <input type="text" value="{{$item->id}}" name="title" class="form-control" placeholder="Nhập tiêu đề">
                            </div>
                            <div class="form-group">
                                <strong>Model Number</strong>
                                <input type="text" value="{{$item->ModelNumber}}" name="title" class="form-control" placeholder="Nhập tiêu đề">
                            </div>
                            <div class="form-group">
                                <Strong>Capacity</Strong>
                                <input type="text" value="{{$item->Capacity}}" name="editor" class="form-control" placeholder="Nhập họ tên">
                            </div>
                            
                        
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection