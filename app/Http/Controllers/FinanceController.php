<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Finance;

class FinanceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('role:financeadmin');
    }

    public function index(){
        $finances = Finance::all();
        return view('finance.index')->with(['finances' => $finances]);
    }

    public function edit($id){

        // find the finance to edit using the id
        $finance = Finance::find($id);

        return view('finance.edit', compact('finance'));
    }

    public function store(Request $request){

        // validate the fields before submission
        $request->validate([
            'regNumber' => ['required','unique:finances','Exists:users','max:15'],
            'accBalance' => 'required',
        ]);

        // Submit the values to the database
        Finance::create($request->all());

        // go to the previous page with a session message
        return redirect()->back()->with(
            'message', 'Student Financials Inserted Successfully'
        );
    }
}
