<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTableController extends Controller
{
    public function datatable() {
        return view('partial.datatable');
    }
}
