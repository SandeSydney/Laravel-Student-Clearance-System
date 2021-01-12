@extends('layouts.editor')

@section('content')
<div class="container">
    <div>
        <a class="btn btn-warning " href="/finance">Back</a>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Edit Finances') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('finance.update', $finance->id) }}">
                        @csrf
                        @method('patch')

                        <div class="form-group row">
                            <label for="regNumber" class="col-md-4 col-form-label text-md-right">{{ __('Admission Number') }}</label>

                            <div class="col-md-6">
                                <input id="regNumber" type="text" class="form-control @error('regNumber') is-invalid @enderror" name="regNumber" value="{{ $finance->regNumber }}" required>

                                @error('regNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="accBalance" class="col-md-4 col-form-label text-md-right">{{ __('Account Balance') }}</label>

                            <div class="col-md-6">
                                <input id="accBalance" type="text" class="form-control @error('accBalance') is-invalid @enderror" name="accBalance" value="{{ $finance->accBalance }}" required>

                                @error('accBalance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

