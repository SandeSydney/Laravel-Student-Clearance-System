@extends('layouts.master')

@section('title')
    Admin | MSUSCI:SCS
@endsection

@section('navbar-brand')
    Dashboard
@endsection

@section('content')
    <div class="container">
        <div class="row m-1">
            <div class="col-sm-3 border rounded m-2" style="background-color: #2CA8FF">
                <h4><u>System Users</u></h4>
                <p>Population:</p>
            </div>
            <div class="col-sm-3 border rounded m-2" style="background-color: #2CA8FF">
                <h4><u>Finance Section</u></h4>
                <p>Population:</p>
            </div>
            <div class="col-sm-3 border m-2" style="background-color: #2CA8FF">
                <h4><u>Library Section</u></h4>
                <p>Population:</p>
            </div>
        </div>
        <div class="row m-1">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-3 border ml-4 mt-2 mb-2" >
                <h4><u>Manage Users</u></h4>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
