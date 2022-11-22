<?php

namespace App\Http\Controllers;

use App\Models\Afiliado;
use App\Models\Entrenadore;
use App\Models\Sede;
use Illuminate\Http\Request;

/**
 * Class AfiliadoController
 * @package App\Http\Controllers
 */
class AfiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $afiliados = Afiliado::paginate();

        return view('afiliado.index', compact('afiliados'))
            ->with('i', (request()->input('page', 1) - 1) * $afiliados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $afiliado = new Afiliado();
        $sede= Sede::pluck('nombre', 'id');
        $entrenadore=Entrenadore::pluck('nombre', 'id');
        return view('afiliado.create', compact('afiliado','sede','entrenadore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Afiliado::$rules);

        $afiliado = Afiliado::create($request->all());

        return redirect()->route('afiliados.index')
            ->with('success', 'Afiliado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $afiliado = Afiliado::find($id);

        return view('afiliado.show', compact('afiliado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $afiliado = Afiliado::find($id);

        return view('afiliado.edit', compact('afiliado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Afiliado $afiliado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Afiliado $afiliado)
    {
        request()->validate(Afiliado::$rules);

        $afiliado->update($request->all());

        return redirect()->route('afiliados.index')
            ->with('success', 'Afiliado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $afiliado = Afiliado::find($id)->delete();

        return redirect()->route('afiliados.index')
            ->with('success', 'Afiliado deleted successfully');
    }
}
