@extends('./layouts/user')

@section('navbar-brand')
    Clearance Form
@endsection

@section('content')
    <div class="border">
        <div class="text-center pt-2 font-weight-light">Kindly fill the clearance form below with correct details</div>
        <form class="p-2 text-body">
            @csrf
            <fieldset class="p-2 border" style="background-color: #fdfdfd">
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="studentName">Student Name</label>
                        <input type="text" class="form-control" id="studentName" required>
                    </div>
                    {{-- <div class="form-group col-md-4">
                        <label for="accBalance">Fees Balance</label>
                        <input type="number" class="form-control" id="accBalance" required>
                    </div> --}}
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="admNumber">Admission Number</label>
                        <input type="text" class="form-control" id="admNumber" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="startYear">Admission Year</label>
                        <input type="date" class="form-control" id="startYear" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="endYear">Completion Year</label>
                        <input type="date" class="form-control" id="endYear" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="idNumber">National ID Number</label>
                        <input type="number" class="form-control" id="idNumber" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="phoneNumber">Phone Number</label>
                        <input type="tel" placeholder="0712-345-678" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" class="form-control" id="phoneNumber" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8 text-wrap">
                        <label for="course">Course</label>
                        <select id="inputState" class="form-control">
                        <option class="form-control text-wrap" selected>Bachelor of Science in Information Technology</option>
                        <option class="form-control" selected>Bachelor of Science in Computer Science</option>
                        <option class="form-control" selected>Bachelor of Science in Computer Technology</option>
                        <option class="form-control" selected>Bachelor of Science in Information Computer Technology Management</option>
                        </select>
                    </div>
                    {{-- <div class="form-group col-md-2"></div> --}}
                    {{-- <div class="form-group col-md-4">
                        <label for="libStatus">Library Status</label>
                        <input type="text" class="form-control" id="libStatus" required>
                    </div> --}}
                </div>
                <div class="text-center">
                    <button type="reset" class="btn btn-warning">Cancel</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </fieldset>
        </form>
    </div>
@endsection
