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
                        <a href="{{route('journal.index')}}"class="btn btn-primary float-end">Danh sách journal</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('journal.update' , $journal->id)}}"method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Tiêu đề</strong>
                                <input type="text" value="{{$journal->title}}" name="title" class="form-control" placeholder="Nhập tiêu đề">
                            </div>
                            <div class="form-group">
                                <Strong>Biên tập viên</Strong>
                                <input type="text" value="{{$journal->editor}}" name="editor" class="form-control" placeholder="Nhập họ tên">
                            </div>
                            <div class="form-group">
                                <strong>ISSN</strong>
                                <input type="text" value="{{$journal->ISSN}}" name="ISSN" class="form-control">
                            </div>
                        </div>
                            <div class="form-group">
                                <strong>Ngày phát hành</strong>
                                <input type="date" value="{{$journal->date}}" name="date" class="form-control" placeholder="Nhap dia chi">
                            </div>
                        
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Lưu</button>
                </form>
            </div>
        </div>
    </div>
@endsection