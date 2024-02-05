<?php

namespace App\Http\Controllers;

use App\Models\Disco;
use App\Models\Genero;
use App\Models\Formato;
use Illuminate\Http\Request;

/**
 * Class DiscoController
 * @package App\Http\Controllers
 */
class DiscoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $discos = Disco::paginate();

        return view('disco.index', compact('discos'))
            ->with('i', (request()->input('page', 1) - 1) * $discos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disco = new Disco();
        $formatos=Formato::pluck('nombre','id');
        $generos=Genero::pluck('nombre','id');
        return view('disco.create', compact('disco','formatos','generos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Disco::$rules);

        $disco = Disco::create($request->all());

        return redirect()->route('discos.index')
            ->with('success', 'Disco created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disco = Disco::find($id);

        return view('disco.show', compact('disco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disco = Disco::find($id);
        $formatos=Formato::pluck('nombre','id');
        $generos=Genero::pluck('nombre','id');
        return view('disco.edit', compact('disco','formatos','generos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Disco $disco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disco $disco)
    {
        request()->validate(Disco::$rules);

        $disco->update($request->all());

        return redirect()->route('discos.index')
            ->with('success', 'Disco updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $disco = Disco::find($id)->delete();

        return redirect()->route('discos.index')
            ->with('success', 'Disco deleted successfully');
    }
}
