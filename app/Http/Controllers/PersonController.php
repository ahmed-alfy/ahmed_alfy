<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    // create form/page
    // bind it to [Person] table from database with a binding source
    // Add all fields with retrive command
    // insert some fields
    // make the nationality field use Search Edit Lookup edit and the nationalityID as the value field
    // insert data navigator controls
    // 	<<  <  |  >  >>
    // save 3 persons

    public function create()
    {
        return view('person.create');
    }
    public function store(PersonRequest $request)
    {

        // return $request->all();

        Person::create([
            'name' => $request->name,
            'age' => $request->age,
            'nationalityID'  => $request->nationalityID,
            'birthDate'  => $request->birthDate,
        ]);

        return redirect()->route('welcome');
    }

    public function view($id){
        $person = Person::findOrFail($id);
        return view('person.fill',with(['person'=>$person]));
    }
}
