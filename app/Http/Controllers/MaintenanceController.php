<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'maintenances.index',
            [
                'maintenances' => Maintenance::with(['user', 'car'])
                    ->where('due_date', '>=', date('Y-m-d'))
                    ->orderBy('due_date')
                    ->paginate(25)
            ]
        );
    }
}
