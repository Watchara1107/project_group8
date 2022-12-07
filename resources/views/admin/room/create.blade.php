@extends('layouts.back-end.master')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-9">
                    <h5 class="card-header">เพิ่มห้องพัก</h5>
                    <div class="card-body">
                        <div>
                            <form action="{{ route('room.insert') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="defaultFormControlInput" class="form-label mt-2">ชื่อห้องพัก</label>
                            <input type="text" name="name" class="form-control" id="defaultFormControlInput"
                                aria-describedby="defaultFormControlHelp" />
                            <label for="defaultFormControlInput" class="form-label mt-2">ราคา</label>
                            <input type="text" name="price" class="form-control" id="defaultFormControlInput"
                                aria-describedby="defaultFormControlHelp" />
                            <label for="defaultFormControlInput" class="form-label mt-2">ภาพห้องพัก</label>
                            <input type="file" name="image" class="form-control" id="defaultFormControlInput"
                                aria-describedby="defaultFormControlHelp" />
                            <input type="submit" class="btn btn-primary mt-4" value="บันทึก">
                            <a href="{{ route('room.index') }}" class="btn btn-danger mt-4 mx-2">ย้อนกลับ</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
