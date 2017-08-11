<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedure;

class ListarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $procedures = Procedure::orderBy('name')->get();
      return view('listar.index')->with('procedures', $procedures);
    }

}
