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
            <div class="col-sm-3 border rounded m-2 text-center" style="background-color: #2CA8FF">
                <h4><u>System Users</u></h4>
                <p>Population: &nbsp; {{ $users->count() }}</p>

                {{-- Trigger the Modal --}}
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#usersDetails">View Details</button>

                {{-- Modal --}}
                <div class="modal fade" id="usersDetails" role="dialog">
                    <div class="modal-dialog">

                    {{-- Modal content --}}
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">System Users</h4>
                        </div>
                        <div class="modal-body">
                            <ol>
                                @foreach ($users as $user)
                                    <li class="text-left">
                                        {{ $user->name}} &nbsp; : {{ $user->email }}
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3 border rounded m-2 text-center" style="background-color: #2CA8FF">
                <h4><u>Finance Section</u></h4>
                <p>Population: &nbsp; {{ $finances->count() }}</p>

                {{-- Trigger the Modal --}}
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#financeDetails">View Details</button>

                {{-- Modal --}}
                <div class="modal fade" id="financeDetails" role="dialog">
                    <div class="modal-dialog">

                    {{-- Modal content --}}
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Finance Clearance List</h4>
                        </div>
                        <div class="modal-body">
                            <ol>
                                @foreach ($finances as $finance)
                                    <li class="text-left">
                                        {{ $finance->regNumber}} &nbsp; : {{ $finance->accBalance }}
                                    </li>
                                @endforeach
                            </ol>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-3 border m-2 text-center" style="background-color: #2CA8FF">
                <h4><u>Library Section</u></h4>
                <p>Population: &nbsp; {{ $libraries->count() }}</p>

                {{-- Trigger the Modal --}}
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#libraryDetails">View Details</button>

                {{-- Modal --}}
                <div class="modal fade" id="libraryDetails" role="dialog">
                    <div class="modal-dialog">

                        {{-- Modal content --}}
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Library Clearance List</h4>
                            </div>
                            <div class="modal-body">
                                <ol>
                                    @foreach ($libraries as $library)
                                        <li class="text-left">
                                            {{ $library->regNumber}} &nbsp; : {{ $library->libStatus }}
                                        </li>
                                    @endforeach
                                </ol>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row m-1">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-3 border ml-4 mt-2 mb-2 text-center" >
                <h4><u>Manage Users</u></h4>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
