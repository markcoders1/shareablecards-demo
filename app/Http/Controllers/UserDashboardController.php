<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class UserDashboardController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('dashboard.index');
    }
}
