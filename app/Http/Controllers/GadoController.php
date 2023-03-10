<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

<?php

namespace App\Http\Controllers;

use App\Models\Gado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Knp\Component\Pager\PaginatorInterface;

class GadoController extends Controller
{
    public function index(PaginatorInterface $paginator, Request $request)
    {
        $query = Gado::query()->naoAbatidos();

        if ($request->has('codigo')) {
            $query->codigo($request->get('codigo'));
        }

        if ($request->has('leite_maior_que')) {
            $query->leiteMaiorQue($request->get('leite_maior_que'));
        }

        if ($request->has('leite_menor_que')) {
           
