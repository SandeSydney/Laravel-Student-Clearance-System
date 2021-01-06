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
            <div class="col-sm-3 border m-2">
                <h4><u>System Users</u></h4>
                <p>Population:</p>
            </div>
            <div class="col-sm-3 border m-2">
                <h4><u>Finance Dept.</u></h4>
                <p>Population:</p>
            </div>
            <div class="col-sm-3 border m-2">
                <h4><u>Library Dept.</u></h4>
                <p>Population:</p>
            </div>
        </div>
        <div class="row m-1">
            <div class="col-sm-3 border m-2">
                <h4><u>Cleared students</u></h4>
                <p>Population:</p>
            </div>
            <div class="col-sm-3 border m-2">
                <h4><u>Pending Clearance</u></h4>
                <p>Population:</p>
            </div>
            <div class="col-sm-3 border m-2">
                <h4><u>Manage Users</u></h4>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
