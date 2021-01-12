@extends('layouts.master')

@section('title')
    Finance | MSUSCI:SCS
@endsection

@section('navbar-brand')
    Dashboard
@endsection

@section('content')
    <div class="container">
        <div class="well pt-2">
            <h2>Finance Section</h2>
        </div>
        <hr>
        <x-alert />
        <div class="border">
            <form class="form-horizontal p-2" method="POST" action="/finance/store" style="background-color: #fdfdfd" role="form">
                @csrf
                <div class="form-group">
                    <label for="regNUmber" class="control-label col-sm-2">Admission Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="regNumber" name="regNumber" placeholder="CI/00001/020" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="accBalance" class="control-label col-sm-2">Student Balance</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="accBalance" name="accBalance" value="Ksh. " required>
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
        <hr>
        <div>
            <h4>Account Balances</h4>
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#finances">Click to View</button>
            <div id="finances" class="collapse flex">
                <ol>
                    @foreach ($finances as $finance)
                        <li>
                            {{ $finance->regNumber}} : {{ $finance->accBalance }} &nbsp;
                            <a href="{{'/finance/ '.$finance->id.'/edit'}}" class="btn btn-warning">Edit</a>
                        </li>
                    @endforeach
                </ol>
            </div>

        </div>
    </div>
@endsection

@section('scripts')

@endsection
