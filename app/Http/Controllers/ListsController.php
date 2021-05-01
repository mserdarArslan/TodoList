<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Todolist;

class ListsController extends Controller
{
    public function index()
    {
        $lists = Todolist::all();
        return view('lists')->with('lists', $lists);
    }

    public function create()
    {
        return view('lists.create');
    }

    public function store(ListFormRequest $request)
    {
        $list = new Todolist(array(
            'name' => $request->get('name'),
            'description' => $request->get('description')
        ));

        $list->save();

        return Redirect::route('lists.create')
            ->with('message', 'Your list has been created!');
    }
}