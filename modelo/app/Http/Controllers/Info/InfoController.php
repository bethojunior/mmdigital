<?php

namespace App\Http\Controllers\Info;

use App\Http\Controllers\Controller;
use App\Services\Info\InfoService;
use Illuminate\Http\Request;

class InfoController extends Controller
{

    private $service;

    /**
     * InfoController constructor.
     * @param InfoService $infoService
     */
    public function __construct(InfoService $infoService)
    {
        $this->service = $infoService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $infos = $this->service
            ->findAll();
        return view('admin.info')->with(['infos' => $infos]);
    }

    public function insert(Request $request)
    {
        try{
            $insert = $this->service
                ->insert($request->all());
        }catch (\Exception $exception){
            return redirect()->route('home.about')
                ->with('error', 'Erro ao inserir informações '.$exception->getMessage());
        }
        return redirect()->route('home.about')
            ->with('success', 'Informações inseridas com sucesso');
    }

}
