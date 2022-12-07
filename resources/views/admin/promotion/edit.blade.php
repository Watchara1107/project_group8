@extends('layouts.back-end.master')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-9">
                    <h5 class="card-header">แก้ไขโปรโมชั่น</h5>
                    <div class="card-body">
                        <div>
                            <form action="{{ url('/admin/promotion/update/'.$pro->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="defaultFormControlInput" class="form-label mt-2">ชื่อโปรโมชั่น</label>
                                <input type="text" name="name" class="form-control" id="defaultFormControlInput"
                                    aria-describedby="defaultFormControlHelp" value="{{ $pro->name }}" />
                                <label for="defaultFormControlInput" class="form-label mt-2">ราคา</label>
                                <input type="text" name="price" class="form-control" id="defaultFormControlInput"
                                    aria-describedby="defaultFormControlHelp" value="{{ $pro->price }}" />
                                <label for="defaultFormControlInput" class="form-label mt-2">ภาพโปรโมชั่น</label>
                                <input type="file" name="image" class="form-control" id="defaultFormControlInput"
                                    aria-describedby="defaultFormControlHelp"value="{{ $pro->image }}" />
                                <div class="row mt-4 ml-2">
                                    <img src="{{ asset('admin/upload/promotion/'.$pro->image) }}" width="120px" height="120px" alt="">
                                </div>
                                <input type="submit" class="btn btn-primary mt-4" value="อัพเดท">
                                <a href="{{ route('promotion.index') }}" class="btn btn-danger mt-4 mx-2">ย้อนกลับ</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
