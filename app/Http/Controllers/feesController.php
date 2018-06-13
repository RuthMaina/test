<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;
use Illuminate\Support\Facades\Input;

class feesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Ruth.search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Save to the database
         // Validate form
        $this -> validate($request, [
            'amount'=>'required|integer',
            'student'=>'required|integer',
            'dop'=>'required|date'
        ]);

      // Instance of fees
      $fees = new Fees;

      // fetch data from fees
      $fees->amount = request('amount');
      $fees->studentNo = request('student');
      $fees->dop = request('dop');

      // save data
      $fees->save();

      // return to Home
      return redirect('/');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // Displays the search results
        $input = request('studentNo');
        if ($input != ''){
            $id = Fees::where('studentNo','LIKE', '%'.$input.'%')->get();

            if (count($id) > 0){
                return view('Ruth.search')->withDetails($id)->withQuery($input);
            }
        } return view('Ruth.search')->withMessage('No record found');
    }

    public function totalFees() {
        $fees=Fees::all();
        return view('Ruth.fees', ['fees'=>$fees]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
