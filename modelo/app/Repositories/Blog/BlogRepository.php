<?php


namespace App\Repositories\Blog;


use App\Contracts\Repository\AbstractRepository;
use App\Models\Blog\Blog;

class BlogRepository extends AbstractRepository
{

    /**
     * UserRepository constructor.
     */
    public function __construct()
    {
        $this->setModel(Blog::class);
    }


}
