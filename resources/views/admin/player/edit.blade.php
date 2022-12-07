@extends('layouts.back-end.master')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-9">
                    <h5 class="card-header">แก้ไขเครื่องเล่น</h5>
                    <div class="card-body">
                        <div>
                            <form action="{{ url('/admin/player/update/'.$play->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="defaultFormControlInput" class="form-label mt-2">ชื่อเครื่องเล่น</label>
                                <input type="text" name="name" class="form-control" id="defaultFormControlInput"
                                    aria-describedby="defaultFormControlHelp" value="{{ $play->name }}" />
                                <label for="defaultFormControlInput" class="form-label mt-2">ราคา</label>
                                <input type="text" name="price" class="form-control" id="defaultFormControlInput"
                                    aria-describedby="defaultFormControlHelp" value="{{ $play->price }}" />
                                <label for="defaultFormControlInput" class="form-label mt-2">ภาพเครื่องเล่น</label>
                                <input type="file" name="image" class="form-control" id="defaultFormControlInput"
                                    aria-describedby="defaultFormControlHelp"value="{{ $play->image }}" />
                                <div class="row mt-4 ml-2">
                                    <img src="{{ asset('admin/upload/player/'.$play->image) }}" width="120px" height="120px" alt="">
                                </div>
                                <input type="submit" class="btn btn-primary mt-4" value="อัพเดท">
                                <a href="{{ route('player.index') }}" class="btn btn-danger mt-4 mx-2">ย้อนกลับ</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
