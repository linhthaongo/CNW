@extends('layout')
@section('content')
    <div class="contaniner">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm tạp chí</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('journal.index')}}"class="btn btn-primary float-end">Danh sách tạp chí</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('journal.store')}}"method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Tiêu đề</strong>
                                <input type="text" name="title" class="form-control" placeholder="Nhập tiêu đề>
                                
                                                                 
                                
                            </div>
                            <div class="form-group">
                                <Strong>Tên biên tập</Strong>
                                <input type="text" name="editor" class="form-control" placeholder="Nhập tên biên tập">
                            </div>
                            <div class="form-group">
                                <strong>ISSN</strong>
                                <input type="text" name="ISSN" class="form-control" placeholder="ISSN">
                            </div>
                        </div>
                    
                            <div class="form-group">
                                <strong>Ngày phát hành</strong>
                                <input type="date" name="date" class="form-control" placeholder="Nhập ngày phát hành">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection