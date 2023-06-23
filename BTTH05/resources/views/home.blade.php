@extends('layouts.base')
<!-- triển khai title-->

@section('title','Articles Details')

@section('main')
<div class="row mt-12">
    
    <div class="container px-8 text-center">
    <h1 class="text-uppercase ">Articles Details</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã</th>
      <th scope="col">Tiêu đề</th>
      <th scope="col">Tên bài hát</th>
      <th scope="col">Mã thể loại</th>
      <th scope="col">Mã tác giả</th>
      <th scope="col">Tóm tắt</th>
      <th scope="col">Hình ảnh</th>
      
    </tr>
  </thead>
  <tbody>
            @foreach($articles as $article)
            <tr>
                <th scope="row">{{$article->ma_bviet}}</th>
                <td>{{$article->tieude}}</td>
                <td>{{$article->ten_bhat}}</td>
                <td>{{$article->ma_tloai}}</td>
                <td>{{$article->tomtat}}</td>
                <td>{{$article->noidung}}</td>
                <td>{{$article->m_tgia}}</td>
             
                <td><img src="{{$article->hinhanh}}" class="card-img-top" alt="..."></td>
                <td>
                    <form method="post" action="{{ route('articles.show', $article->ma_bviet) }}">
                        @csrf
                        @method('DELETE')
                        <a href="" class="btn btn-warning btn-sm">Edit</a>
                        <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                    </form>

                </td>

            </tr>
            @endforeach
        </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    </div>
    
</div>
