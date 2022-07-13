<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Criteria;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count_criterias = Criteria::count();
        $count_animals  = Animal::count();
     
        return view('dashboard.index', compact('count_criterias', 'count_animals'));
    }
}