@extends('layouts.back-end.master')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="card">
            <h5 class="card-header">โปรโมชั่น</h5>
            <div class="table-responsive text-nowrap">
                <a href="{{ route('promotion.create') }}" class="btn btn-success mx-3 mt-4"><i class='bx bxs-plus-circle'></i>
                    เพิ่มข้อมูล</a>
                <table class="table mt-4">
                    <thead class="table-dark">
                        <tr>
                            <th>ลำดับที่</th>
                            <th>ชื่อโปรโมชั่น</th>
                            <th>ราคา</th>
                            <th>รูปภาพ</th>
                            <th>จัดการ</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                       @foreach ($promotion as $pro)
                       <tr>
                        <td>{{ $pro->id }}</td>
                        <td>{{ $pro->name }}</td>
                        <td>{{ $pro->price }}</td>
                        <td>
                            <img src="{{ asset('admin/upload/promotion/'.$pro->image) }}" width="80px" height="80px" alt="">
                        </td>
                        <td>
                          <a href="{{ url('admin/promotion/edit/'.$pro->id) }}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                          <a href="{{ url('admin/promotion/delete/'.$pro->id) }}" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>

@endsection
