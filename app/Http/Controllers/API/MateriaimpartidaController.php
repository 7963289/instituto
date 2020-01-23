<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Materiaimpartida;
use Illuminate\Http\Request;
use App\Http\Resources\MateriaimpartidaResource;


class MateriaimpartidaController extends Controller
{

    protected $fillable = ['docente', 'grupo','materia'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MateriaimpartidaResource::collection(Materiaimpartida::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materiaimpartida = Materiaimpartida::create(json_decode($request->getContent(), true));

        return new Materiaimpartida($materiaimpartida);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materiaimpartida  $materiaimpartida
     * @return \Illuminate\Http\Response
     */
    public function show(Materiaimpartida $materiaimpartida)
    {
        return new MateriaimpartidaResource($materiaimpartida);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materiaimpartida  $materiaimpartida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materiaimpartida $materiaimpartida)
    {
        $materiaimpartida->update(json_decode($request->getContent(), true));
        return new MateriaimpartidaResource($materiaimpartida);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materiaimpartida  $materiaimpartida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materiaimpartida $materiaimpartida)
    {
        $materiaimpartida->delete();
    }
}
