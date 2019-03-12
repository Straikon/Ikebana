<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\DB;
use App\Documento;
use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    public function index()
    {
      //$docs = DB::table('documentos')->get();
      //->where('id', '>', '1')
      //->onWhere('dirigido', 'Samuel')
      //->where('envia', 'Pedro')
      //->get()
      $docs = Documento::all();

      return view('documentos.documentosIndex', compact('docs'));
      //where(['docs => $docs']);
    }
}
