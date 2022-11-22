<?php

namespace App\Http\Controllers;

use App\Models\Entrenadore;
use Illuminate\Http\Request;

/**
 * Class EntrenadoreController
 * @package App\Http\Controllers
 */
class EntrenadoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrenadores = Entrenadore::paginate();

        return view('entrenadore.index', compact('entrenadores'))
            ->with('i', (request()->input('page', 1) - 1) * $entrenadores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrenadore = new Entrenadore();
        return view('entrenadore.create', compact('entrenadore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Entrenadore::$rules);

        $entrenadore = Entrenadore::create($request->all());

        return redirect()->route('entrenadores.index')
            ->with('success', 'Entrenadore created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entrenadore = Entrenadore::find($id);

        return view('entrenadore.show', compact('entrenadore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entrenadore = Entrenadore::find($id);

        return view('entrenadore.edit', compact('entrenadore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Entrenadore $entrenadore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entrenadore $entrenadore)
    {
        request()->validate(Entrenadore::$rules);

        $entrenadore->update($request->all());

        return redirect()->route('entrenadores.index')
            ->with('success', 'Entrenadore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $entrenadore = Entrenadore::find($id)->delete();

        return redirect()->route('entrenadores.index')
            ->with('success', 'Entrenadore deleted successfully');
    }
}
