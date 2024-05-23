<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    public function index()
    {
        $AnakCount = Anak::countAnak();

        return view('index', compact('AnakCount'));
    }
}
