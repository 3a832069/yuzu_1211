<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function index()
    {
        $data = DB::table('tickets')->get();;
        return view('index', ['ticket' => $data]);
    }
}
