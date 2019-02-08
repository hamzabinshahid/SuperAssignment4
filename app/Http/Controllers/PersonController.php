<?php

namespace App\Http\Controllers;

use App\Person;
use App\Room;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function sum()
    {
        $sum = DB::select('select ')
        return $sum;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('people');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Room $room)
    {
        $request->validate([
            'name'=>'required',
            'phone'=> 'required',
            'dob'=> 'required',
            'city'=> 'required',
            'cnic' => 'required',
            'institute' => 'required'
        ]);
            $person = Person::create($request->all());
            return redirect('/')->with('success', 'People has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        return view('edit-person', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $request->validate([
            'name'=>'required',
            'phone'=> 'required',
            'dob'=> 'required',
            'city'=> 'required',
            'cnic' => 'required',
            'institute' => 'required'
        ]);
        $person->update($request->all());
            return redirect('/')->with('success', 'People has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person->delete();
        return redirect('/')->with('success', 'People has been Deleted');
    }
}
