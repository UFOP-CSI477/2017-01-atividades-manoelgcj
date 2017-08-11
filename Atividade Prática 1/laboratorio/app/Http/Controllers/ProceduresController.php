<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedure;
use Illuminate\Support\Facades\Auth;

class ProceduresController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $procedures = Procedure::orderBy('name')->get();
      return view('procedures.index')->with('procedures', $procedures);
    }

    public function indexa()
    {
      $procedures = Procedure::orderBy('name')->get();
      return view('listar.index')->with('procedures', $procedures);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $user = Auth::user();
      if ($user->type==1){
        return view('procedures.create');
      }
      else {
        return redirect('/');
      }
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Procedure::create( $request->all() );
      return redirect('/procedures');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Procedure $procedure)
    {
        return view('procedures.show')->with('procedure', $procedure);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Procedure $procedure)
    {
        return view('procedures.edit')->with('procedure', $procedure);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procedure $procedure)
    {
        $procedure->name = $request->name;
        $procedure->price = $request->price;
        $procedure->save();
        return redirect('/procedures');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procedure $procedure)
    {
        $procedure->delete();
        return redirect('/procedures');
    }
}
