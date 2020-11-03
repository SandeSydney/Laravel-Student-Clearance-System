@extends('./layouts/user')

@section('navbar-brand')
    User Profile
@endsection

@section('content')
<div class="card border p-4 mt-1 mb-1">
    <div class="card-body row col-sm-8">
        <div class="cols text-right pr-3">
            <img src="{{asset('assets/img/default-avatar.png')}}" class="rounded-circle border img-fluid" alt="Responsive image">
        </div>
        <div class="cols p-2 card-body">
            <div>Name: Simiyu Sydney</div>
            <div>Adm: CI/00121/016</div>
            <div>Email: sandesydney02@gmail.com</div>
            <div>Phone No.: 0728124585</div>
            <div>ID No.: 34641101</div>
            <div>Course: Bachelor of Science in Information Technology</div>
            <div>Gender: Male</div>
        </div>
    </div>
    <div class="card-body text-center p-3">
        <a href="" class="btn btn-success btn-lg">Edit Profile</a>
        <a href="" class="btn btn-danger btn-lg">Delete Account</a>
    </div>
</div>
@endsection
