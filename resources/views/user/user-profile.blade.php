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
            <div class="text-center mr-5">
                <img src="{{asset('/storage/images/'.Auth::user()->profileImage)}}" class="img-thumbnail border text-center" alt="Profile Image" width="70%" height="70%">
            </div>

            @else
            {{-- Default profile picture --}}
            <div class="text-center mr-5">
                <img src="{{asset('assets/img/default-avatar.png')}}" class="rounded-circle border" alt="Profile Image">
            </div>

            </form>
            @endif
            {{-- Choose profile image --}}
            <form action="/imageUpload" method="POST" class="p-1" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="file" name="image" class="mt-1 mb-1 text-center ml-5">
                    </div>
                    <div class="col-md-6">
                        <input type="submit" value="Upload" class="mt-1 mb-1 ml-5 text-center">
                    </div>
                </div>
            </form>

        </div>
        <div class="col-md-6 p-2 card-body">
            <div class="row">
                <div class="col-md-4 font-weight-bold">Name:</div>
                <div class="col-md-8">{{Auth::user()->name}}</div>
                <div class="col-md-4 font-weight-bold">Reg Number:</div>
                <div class="col-md-8">{{Auth::user()->regNumber}}</div>
                <div class="col-md-4 font-weight-bold">Email:</div>
                <div class="col-md-8">{{Auth::user()->email}}</div>
                <div class="col-md-4 font-weight-bold">Phone No.:</div>
                <div class="col-md-8">{{Auth::user()->phoneNumber}}</div>
                <div class="col-md-4 font-weight-bold">ID No.:</div>
                <div class="col-md-8">{{Auth::user()->IdNumber}}</div>
                <div class="col-md-4 font-weight-bold">Course:</div>
                <div class="col-md-8">{{Auth::user()->course}}</div>
                <div class="col-md-4 font-weight-bold">Gender:</div>
                <div class="col-md-8">{{Auth::user()->gender}}</div>
            </div>
        </div>
    </div>
    <div class="card-body text-center p-3">
        <a href="/edit" class="btn btn-success btn-lg">Edit Profile</a>
        <a href="" class="btn btn-danger btn-lg">Delete Account</a>
    </div>
</div>
@endsection
