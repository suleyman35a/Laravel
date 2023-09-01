<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvisorAdminController extends Controller
{
    public function index() {
        return view('backend.advisor.pages.index');
     }
}
