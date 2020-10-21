<?php


namespace App\Repositories\Slide;


use App\Contracts\Repository\AbstractRepository;
use App\Models\Slide\Slide;

class SlideRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->setModel(Slide::class);
    }

}
