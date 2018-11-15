<?php

namespace App\Http\Controllers;

use App\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $loans = loan::all();
        $schedule = $loans[0]->getPaymentSchedule();


        return view ('loans/index',['loans' => $loans, 'schedule' =>$schedule]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->flash();
        $loans = new Loan();
        $loans->fill($request->all());
        $schedule = $loans->getPaymentSchedule();

        return view ('loans/index',['loans' => $loans, 'schedule' =>$schedule]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function show(loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function edit(loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, loan $loan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(loan $loan)
    {
        //
    }
}
