<?php


namespace App\Repositories\Info;


use App\Contracts\Repository\AbstractRepository;
use App\Models\Info\Info;

class InfoRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->setModel(Info::class);
    }



}
