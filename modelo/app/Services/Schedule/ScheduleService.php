<?php


namespace App\Services\Schedule;


use App\Models\Schedule\Schedule;
use App\Repositories\Schedule\ScheduleRepository;

class ScheduleService
{


    private $repository;

    /**
     * ScheduleService constructor.
     * @param ScheduleRepository $scheduleRepository
     */
    public function __construct(ScheduleRepository $scheduleRepository)
    {
        $this->repository = $scheduleRepository;
    }


    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function findAll()
    {
        return $this->repository
            ->all()->sortDesc();
    }

    /**
     * @param array $params
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function update(array $params)
    {
        $result = $this->repository->find($params['id']);

        $result->update($params);

        return $result;
    }

    /**
     * @param array $request
     * @return Schedule
     */
    public function insert(array $request)
    {
        $schedule = new Schedule($request);
        $this->repository->save($schedule);
        return $schedule;
    }


}
