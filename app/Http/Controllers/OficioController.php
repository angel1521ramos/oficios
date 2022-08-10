<?php

namespace App\Http\Controllers;

use App\Models\Oficio;
use App\Http\Requests\Oficio as OficioRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OficioController extends Controller
{
    protected $oficio;
    public function __construct(Oficio $oficio)
    {
        $this->oficio = $oficio;
    }


    public function index()
    {
        $oficio = Oficio::all();
        return view('templates.content.oficio.index', compact('oficio'));
    }


    public function create()
    {
        return view('templates.content.oficio.create');
    }


    public function store(OficioRequests $request)
    {
        $oficio = $this->oficio->create($request->all());
        if ($request->documento !== null) {
            $documentoNombre = $request->file('documento')->getClientOriginalName();
            $documento = $request->file('documento')->store('public/' . $request->noOficio . ' - ' . $request->noOficio);
            $url = Storage::url($documento);
            Oficio::where('id', $oficio->id)->update([
                'documento' => $url,
                'documentoNombre' => $documentoNombre
            ]);
        }

        return $this->index();
    }


    public function show(Oficio $oficio)
    {
        //return view('templates.content.oficio.show', compact('oficio'));
    }


    public function edit(Oficio $oficio)
    {
        return view('templates.content.oficio.edit', compact('oficio'));
    }


    public function update(OficioRequests $request, Oficio $oficio)
    {
        $oficio->update($request->all());
        if ($request->documento !== null) {
            $documentoNombre = $request->file('documento')->getClientOriginalName();
            $documento = $request->file('documento')->store('public/' . $request->noOficio . ' - ' . $request->noOficio);
            $url = Storage::url($documento);
            Oficio::where('id', $oficio->id)->update([
                'documento' => $url,
                'documentoNombre' => $documentoNombre
            ]);
        }
        return $this->index();
    }


    public function destroy(Oficio $oficio)
    {
        //
    }

    public function estatus(Request $request, Oficio $oficio)
    {
        if ($request->estatus == 'pendiente') {
            $oficio->update([
                'estatus' => 'revisado'
            ]);
        }else {
            $oficio->update([
                'estatus' => 'pendiente'
            ]);
        }
        
        return back();
    }
}
