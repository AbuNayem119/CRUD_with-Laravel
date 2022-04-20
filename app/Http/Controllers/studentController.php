<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentController extends Controller
{
    /**
     * Student Management....
     */

    /**
     * All Studdent....
     */
    public function index()
    {
        $data = Student::all();
        return view('student.index', [
            'all_data'      => $data,
        ]);
    }

    /**
     * Delete Studdent....
     */
    public function destroy($id)
    {
        $data = Student::find($id);
        $data -> delete();
        return back() -> with('success','data Delete successfully !');
    }

    /**
     * Create Studdent....
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Edit Studdent....
     */
    public function edit($id)
    {
        $data = Student::find($id);
        return view('student.edit', [
            'all_data'      => $data,
        ]);
    }

    /**
     * Update Student....
     */
    public function update( Request $request , $id)
    {

        

        $update_data = Student::find($id);
        $update_data -> name = $request -> name;
        $update_data -> email = $request -> email;
        $update_data -> cell = $request -> cell;
        $update_data -> address = $request -> address;
        $update_data -> update();

        return back() -> with('success','data Updated successfully !');

    }


    /**
     * Show Studdent....
     */
    public function show($id)
    {
        $data = Student::find($id);
        return view('student.show', [
            'all_data' => $data,
        ]);
    }

    /**
     * Store Studdent....
     */
    public function store( Request $request )
    {

        if ( $request -> hasFile('image') ) {
            $img = $request -> file('image');
            $unique_img = md5(time().rand()).".". $img -> getClientOriginalExtension();
            $img -> move( public_path('media/student/') , $unique_img);
        }

        Student::create([

            'name'     =>  $request -> name,
            'email'    =>  $request -> email,
            'cell'     =>  $request -> cell,
            'address'  =>  $request -> address,
            'image'  =>  $unique_img,

        ]);
        return back() -> with('success','data sent successfully !');
    }























}
