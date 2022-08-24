<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Models\User;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cars.index', ['cars' => Car::with('user')->paginate(20)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create', ['users' => User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        return redirect()->route('cars.index', ['car' => Car::create($request->validated())])
            ->with('success', 'Car Created Successfully');
    }
}
