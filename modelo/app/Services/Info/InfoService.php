<?php


namespace App\Services\Info;


use App\Models\Info\Info;
use App\Repositories\Info\InfoRepository;

class InfoService
{

    private $repository;

    /**
     * InfoService constructor.
     * @param InfoRepository $infoRepository
     */
    public function __construct(InfoRepository $infoRepository)
    {
        $this->repository = $infoRepository;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function findAll()
    {
        return $this->repository
            ->all()->last();
    }


    /**
     * @param array $request
     * @return Info
     */
    public function insert(array $request)
    {
        $info = new Info($request);
        $this->repository->save($info);
        return $info;
    }

}
