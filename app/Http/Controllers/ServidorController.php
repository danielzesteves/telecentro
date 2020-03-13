<?php

namespace App\Http\Controllers;

use App\Clases\HandlerFile;
use App\Repositories\ServidorRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServidor;
use App\Servidor;

class ServidorController extends Controller
{
    private $repository;

    public function __construct(ServidorRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response($this->repository->all(), 200);
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
    public function store(StoreServidor $request, HandlerFile $handler)
    {
        $request->merge(["ext"=>$request->file('file')->extension()]);
        $servidor = $this->repository->create($request->all());
        $handler->saveFile($request->file('file'),$servidor->id);
        return response($this->repository->all(), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->repository->find($id);
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
    public function update(Request $request, $id, HandlerFile $handler)
    {
        Servidor::find($id)->update($request->all());
        if ($request->hasFile('file')) {
            $handler->saveFile($request->file('file'),$id);
        }
        return response($this->repository->all(), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->delete($id);
        return response($this->repository->all(), 200);
    }
}
