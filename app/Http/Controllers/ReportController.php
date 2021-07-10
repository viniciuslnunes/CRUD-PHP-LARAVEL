<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.reports.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $search_mes = $request->search_mes;
        switch ($search_mes) {
            case 'day':
                # code...
                break;
            case 'week':
                # code...
                break;
            default:
                # code...
                break;
        }
        // if ($search_mes === "day") {
        //     $propostas = Proposta::with('cliente')
        //         ->whereMonth('created_at', $search_mes)
        //         ->where('user_id', '=', Auth::user()->id)
        //         ->paginate(7);
        // } else {
        //     $propostas = Proposta::with('cliente')
        //         ->where('cliente_id', 'like', '%' . $search_cliente . '%')
        //         ->where('status', 'like', '%' . $search_status . '%')
        //         ->where('user_id', '=', Auth::user()->id)
        //         ->paginate(7);
        // }
        return view('reports.index');
    }
}
