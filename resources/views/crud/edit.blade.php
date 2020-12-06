<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Crud</title>
    <!-- ALL CSS FILES  -->
    <link rel="stylesheet" href="{{asset('crud/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('crud/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('crud/assets/css/responsive.css')}}">
</head>
<body>



<div class="wrap ">
    <a class="btn btn-sm btn-primary" href="{{url('crud-all')}}">All Data</a>
    <div class="card shadow">
        <div class="card-body">
            <h3>Update {{$edit_student->name . "'s"}} Data</h3>

            @include('validation')

            <form action="{{url('crud-add')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <label for="">Name</label>
                    <input name="name" class="form-control" type="text" value="{{$edit_student ->name}}">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input name="email" class="form-control" type="text" value="{{$edit_student ->email}}">
                </div>
                <div class="form-group">
                    <label for="">Cell</label>
                    <input name="cell" class="form-control" type="text" value="{{$edit_student ->cell}}">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input name="uname" class="form-control" type="text" value="{{$edit_student ->uname}}">
                </div>
                <div class="form-group">
                    <img style="width: 200px;" src="{{URL::to('/')}}/media/students/{{$edit_student ->photo}}" alt="">
                    <input type="hidden" name="old_photo" value="{{$edit_student ->photo}}">
                </div>
                <div class="form-group">
                    <label for="">Photo</label>
                    <input name="new_photo" class="form-control" type="file">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
<br>
<br>
<br>
<br>








<!-- JS FILES  -->
<script src="{{asset('crud/assets/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('crud/assets/js/popper.min.js')}}"></script>
<script src="{{asset('crud/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('crud/assets/js/custom.js')}}"></script>
</body>
</html>
