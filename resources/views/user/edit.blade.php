@extends('./layouts/user')

@section('navbar-brand')
    Edit Profile
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form class="m-2 p-2" method="POST" action="/update" style="background-color: #fdfdfd">
                    @csrf
                    @method('patch')

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="regNumber" class="col-md-4 col-form-label text-md-right">{{ __('Admission Number') }}</label>

                        <div class="col-md-6">
                            <input id="regNumber" type="text" class="form-control @error('regNumber') is-invalid @enderror" name="regNumber" value="{{ Auth::user()->regNumber }}" required>

                            @error('regNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="IdNumber" class="col-md-4 col-form-label text-md-right">{{ __('ID Number') }}</label>

                        <div class="col-md-6">
                            <input id="IdNumber" type="text" class="form-control @error('IdNumber') is-invalid @enderror" name="IdNumber" value="{{ Auth::user()->IdNumber }}" required>

                            @error('IdNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                        <div class="col-md-6">
                            <input id="phoneNumber" type="text" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" value="{{ Auth::user()->phoneNumber }}" required>

                            @error('phoneNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="text-center p-3">
                        <a href="/user-profile" class="btn btn-warning mr-2">Cancel</a>
                        <input class="btn btn-success" type="submit" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
