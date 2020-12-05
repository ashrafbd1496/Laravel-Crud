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
        <div class="card-body single-student">
            <img class="shadow" src="{{URL::to('/')}}/media/students/{{$single_student->photo}}" alt="">
            <h2>Md Ashraf Uddin</h2>
            <table class="table">
                <tr>
                    <td>Name</td>
                    <td>{{$single_student->name}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{$single_student->email}}</td>
                </tr>
                <tr>
                    <td>Cell</td>
                    <td>{{$single_student->cell}}</td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>{{$single_student->uname}}</td>
                </tr>

            </table>
        </div>
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
