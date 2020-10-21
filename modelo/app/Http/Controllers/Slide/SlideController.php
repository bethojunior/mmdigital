<?php

namespace App\Http\Controllers\Slide;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Services\Slide\SlideService;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    private $service;

    /**
     * SlideController constructor.
     * @param SlideService $service
     */
    public function __construct(SlideService $service)
    {
        $this->service = $service;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $slides = $this->service
            ->getAll();
        return view('admin.slide')->with(['slides'=>$slides]);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function show()
    {
        return $this->service
            ->getAll();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        try{
            $insert = $this->service
                ->create($request->all());
        }catch (\Exception $exception){
            return redirect()->route('home.indexSlider')
                ->with('error', 'Erro ao inserir tag '.$exception->getMessage());
        }
        return redirect()->route('home.indexSlider')
            ->with('success', 'Blog inserido com sucesso');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        try{
            $response = $this->service
                ->delete($id);
        }catch (\Exception $exception){
            return ApiResponse::error('',$exception->getMessage());
        }

        return ApiResponse::success($response,'Slide excluido com sucesso');
    }
}
