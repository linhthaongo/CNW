@extends('layout')
@section('content')
    <div class="contaniner">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('airplanes.index')}}"class="btn btn-primary float-end">Danh sách</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('airplanes.store')}}"method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Registration Number</strong>
                                <input type="text" name="title" class="form-control" placeholder="Nhập tiêu đề>
                                
                                                                 
                                
                            </div>
                            <div class="form-group">
                                <Strong>Model Number</Strong>
                                <input type="text" name="editor" class="form-control" placeholder="Nhập tên biên tập">
                            </div>
                            <div class="form-group">
                                <strong>Capacity</strong>
                                <input type="text" name="ISSN" class="form-control" placeholder="ISSN">
                            </div>
                        </div>
                    
                        
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection