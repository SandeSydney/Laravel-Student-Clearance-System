<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Library;

class LibraryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('role:libraryadmin');
    }

    public function index(){
        $libraries = Library::all();
        return view('library.index')->with(['libraries' => $libraries]);
    }

    // Edit the students' library status
    public function edit($id){

        // find the finance to edit using the id
        $library = Library::find($id);

        return view('library.edit')->with(['library' => $library]);
    }

    // store the library details of the student
    public function store(Request $request){

        // validate the fields before submission
        $request->validate([
            'regNumber' => ['required','unique:libraries','Exists:users','max:15'],
            'libStatus' => 'required',
        ]);

        // Submit the values to the database
        Library::create($request->all());

        // go to the previous page with a session message
        return redirect()->back()->with(
            'message', 'Student Library Status Inserted Successfully'
        );
    }
}
