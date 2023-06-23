@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quản lý tạp chí</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('airplanes.create')}}" class=" btn btn-primary float-end">Thêm mới</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (Session::has('thongbao'))
                    <div class="alert alert-success">
                        {{Session::get('thongbao')}}
                    </div>
                    
                @endif
                <table class="table table-bordered">
                     <thead>
                        <tr>
                            <th>Registration Number</th>
                            <th>Model Number</th>
                            <th>Capacity</th>
                            <th>Action</th>
                            
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($airplane as $item)
                            <tr>
                                <td>{{$item->RegistrationNumber}}</td>
                                <td>{{$item->ModelNumber}}</td>
                                <td>{{$item->Capacity}}</td>
                            
                                <td>
                                    <form action="{{route('airplanes.destroy',$item->RegistrationNumber)}}" method="POST">
                                        <a href="{{route("airplanes.edit", $item->RegistrationNumber)}}" class="btn btn-info">Sửa</a>
                                        <a href="{{route("airplanes.show", $item->RegistrationNumber)}}" class="btn btn-info">Xem</a>
                                        @csrf
                                        {{-- <button tybe="submit" class="btn btn-danger">xoa</button> --}}
                                        <!-- Modal trigger button -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalRegistrationNumber">
                                          Xóa
                                        </button>
                                        
                                        <!-- Modal Body -->
                                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                        <div class="modal fade" id="modalRegistrationNumber" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" RegistrationNumber="modalTitleRegistrationNumber">Xác nhận xóa?</h5>
                                                            
                                                    </div>
                                                    <div class="modal-body">
                                                        Bạn có chắc muốn xóa không?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Xác nhận</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <!-- Optional: Place to the bottom of scripts -->
                                        <script>
                                            const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
                                        
                                        </script>

                                    </form>
                                </td>
                            </tr>
                            
                            
                        @endforeach
                     </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection