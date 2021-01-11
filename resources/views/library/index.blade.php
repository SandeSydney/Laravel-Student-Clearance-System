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
        <x-alert />
        <div class="border">
            <form class="form-horizontal p-2" method="POST" action="/library/store" style="background-color: #fdfdfd" role="form">
                @csrf
                <div class="form-group">
                    <label for="regNUmber" class="control-label col-sm-2">Admission Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="regNumber" name="regNumber" placeholder="CI/00001/020" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="libStatus" class="control-label col-sm-2">Library Status</label>
                    <div class="col-sm-10">
                        <input id="libStatus" type="radio" name="libStatus" value="Cleared" required> Cleared <br>
                        <input id="libStatus" type="radio" name="libStatus" value="Not Cleared" checked required> Not Cleared <br>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8 text-center">
                        <button type="reset" class="btn btn-warning mr-2">Refresh</button>
                        <button type="submit" class="btn btn-success ml-2">Submit</button>
                    </div>
                </div>
            </form>
            <hr>
            <div>
                <h4>Student Library Statuses</h4>
                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#libraries">Click to View</button>
                <div id="libraries" class="collapse flex">
                    <ol>
                    @foreach ($libraries as $library)
                        <li>
                            {{ $library->regNumber}} : {{ $library->libStatus }} &nbsp;
                            <a href="{{'/library/ '.$library->id.'/edit'}}" class="btn btn-warning">Edit</a>
                        </li>
                    @endforeach
                </ol>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
