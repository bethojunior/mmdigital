<?php

namespace App\Http\Controllers\Schedule;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Models\Schedule\Schedule;
use App\Services\Schedule\ScheduleService;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    private $service;

    /**
     * ScheduleController constructor.
     * @param ScheduleService $scheduleService
     */
    public function __construct(ScheduleService $scheduleService)
    {
        $this->service = $scheduleService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $schedules = $this->service
            ->findAll();
        return view('admin.schedule')->with(['schedules' => $schedules]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        try{
            $insert = $this->service
                ->insert($request->all());
        }catch (\Exception $exception){
            return ApiResponse::error($exception->getMessage(),'Contate o suporte');
        }
        return ApiResponse::success($insert,'Agendado com sucesso');
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
     * @param  \App\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(schedule $schedule)
    {
        //
    }


    public function edit(Request $request)
    {
        try{
            $insert = $this->service
                ->update($request->all());
        }catch (\Exception $exception){
            return ApiResponse::error($exception->getMessage(),'Contate o suporte');
        }
        return ApiResponse::success($insert,'Status atualizado com sucesso');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(schedule $schedule)
    {
        //
    }
}
