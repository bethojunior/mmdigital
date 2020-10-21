<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Models\Blog\Blog;
use App\Services\Blog\BlogService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $service;

    /**
     * BlogController constructor.
     * @param BlogService $blogService
     */
    public function __construct(BlogService $blogService)
    {
        $this->service = $blogService;
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function insert()
    {
        $blogs = $this->service->getAll();
        return view('admin.blog')
            ->with(['blogs' => $blogs]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $blogs = $this->service->getAll();
        return view('admin.listblogs')
            ->with(['blogs' => $blogs]);
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
            return redirect()->route('home.listBlog')
                ->with('error', 'Erro ao inserir tag '.$exception->getMessage());
        }
        return redirect()->route('home.listBlog')
            ->with('success', 'Blog inserido com sucesso');
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

    public function show(blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        //
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

        return ApiResponse::success($response,'Blog excluida com sucesso');
    }

}
