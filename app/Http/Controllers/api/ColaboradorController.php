<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Imports\ColaboradorImport;
use App\Models\ModelsColaborador;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ColaboradorController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return "batendo ok __invoke";
    }

    public function getAll(){
        return ModelsColaborador::all();
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function import(Request $request) 
    {
        Excel::import(new ColaboradorImport, $request->file('colaborador'));

        return back();
    }
}
