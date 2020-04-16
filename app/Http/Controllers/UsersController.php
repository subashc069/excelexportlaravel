<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Exports\UsersExport;
use App\Exports\UsersExportView;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users = User::all();
        return view("users.index", compact('users'));
    }

    public function export()
    {   
        return Excel::download(new UsersExport, 'Users.xlsx');
    }

    public function export_view()
    {   
        return Excel::download(new UsersExportView, 'Users_view_'.now()->toDateString().'.pdf');
    }

    public function export_format($format)
    {   
        $extension = strtolower($format);
        if(in_array($format, ['Mpdf', 'Dompdf', 'Tcpdf'])) $extension = 'pdf';
        return Excel::download(new UsersExportView, 'Users_view_'.$extension, $format);
    }

    public function export_sheets()
    {   
        return Excel::download(new UsersExportView, 'Users_view_'.now()->toDateString().'.pdf');
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
}
