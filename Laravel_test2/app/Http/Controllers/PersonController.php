<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $items = Person::all();
        return view('data', ['items' => $items]);
    }

    public function add()
    {
        return view('index');
    }

    public function create(Request $request)
    {
        // $this->validate($request, Person::$rules);
        $form = $request->all();
        Person::create($form);
        return redirect('thanks');
    }

    public function thanks()
    {
        return view('thanks');
    }
}
