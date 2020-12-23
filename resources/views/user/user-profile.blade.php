@extends('./layouts/user')

@section('navbar-brand')
    User Profile
@endsection

@section('content')

{{-- Show the session message using component created --}}
<x-alert/>

<div class="card border p-4 mt-1 mb-1">
    <div class="card-body row">
        <div class="col-md-6 ">
            {{-- Check if the profileImage is present, provide a default value --}}
            @if(Auth::user()->profileImage)
            {{-- profile image --}}
            <img src="{{asset('/storage/images/'.Auth::user()->profileImage)}}" class="img-thumbnail border text-center m-auto" alt="Profile Image" width="70%" height="70%">
            @else
            {{-- Default profile picture --}}
            <img src="{{asset('assets/img/default-avatar.png')}}" class="rounded-circle border text-center" alt="Profile Image">
            </form>
            @endif
            {{-- Choose profile image --}}
            <form action="/imageUpload" method="POST" class="p-1" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="file" name="image" class="p-1 text-left">
                    </div>
                    <div class="col-md-6">
                        <input type="submit" value="Upload" class="p-1 ml-1 text-left">
                    </div>
                </div>
            </form>

        </div>
        <div class="col-md-6 p-2 card-body">
            <div class="row">
                <div class="col-md-2 font-weight-bold">Name:</div>
                <div class="col-md-10">Simiyu Sydney</div>
                <div class="col-md-2 font-weight-bold">Adm:</div>
                <div class="col-md-10">CI/00121/016</div>
                <div class="col-md-2 font-weight-bold">Email:</div>
                <div class="col-md-10">sandesydney02@gmail.com</div>
                <div class="col-md-2 font-weight-bold">Phone No.:</div>
                <div class="col-md-10">0728124585</div>
                <div class="col-md-2 font-weight-bold">ID No.:</div>
                <div class="col-md-10">34641101</div>
                <div class="col-md-2 font-weight-bold">Course:</div>
                <div class="col-md-10">Bachelor of Science in Information Technology</div>
                <div class="col-md-2 font-weight-bold">Gender:</div>
                <div class="col-md-10">Male</div>
            </div>
        </div>
    </div>
    <div class="card-body text-center p-3">
        <a href="" class="btn btn-success btn-lg">Edit Profile</a>
        <a href="" class="btn btn-danger btn-lg">Delete Account</a>
    </div>
</div>
@endsection
