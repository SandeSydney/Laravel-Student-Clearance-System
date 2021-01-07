@extends('layouts.master')

@section('title')
    Library | MSUSCI:SCS
@endsection

@section('navbar-brand')
    Dashboard
@endsection

@section('content')
    <div class="container">
        <div class="well pt-2">
            <h2>Library Section</h2>
        </div>
        <hr>
        <div class="border">
            <form class="form-horizontal p-2" action="" style="background-color: #fdfdfd" role="form">
                @csrf
                <div class="form-group">
                    <label for="regNUmber" class="control-label col-sm-2">Admission Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="regNumber" placeholder="CI/00001/020" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="accBalance" class="control-label col-sm-2">Cleared</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="accBalance" placeholder="Key in 1 for Yes, 0 for No" required>
                    </div>

                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8 text-center">
                        <button type="reset" class="btn btn-warning mr-2">Refresh</button>
                        <button type="submit" class="btn btn-success ml-2">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
