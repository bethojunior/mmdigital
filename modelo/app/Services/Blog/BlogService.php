<?php


namespace App\Services\Blog;


use App\Models\Blog\Blog;
use App\Repositories\Blog\BlogRepository;
use Illuminate\Support\Facades\DB;

class BlogService
{
    private $repository;

    /**
     * BlogService constructor.
     * @param BlogRepository $repository
     */
    public function __construct(BlogRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function getAll(){
        return $this->repository->all()->sortDesc();
    }

    /**
     * @param array $request
     * @return Blog
     * @throws \Exception
     */
    public function create(array $request)
    {
        try{
            DB::beginTransaction();

            $data = [
                'title'   => $request['title'],
                'content' => $request['content'],
            ];

            $blog = new Blog($data);

            if (isset($request['image'])) {
                $filename =
                    \Storage::disk('public')->putFile($blog->id, $request['image']);

                $blog->image = $filename;
            }

            $blog->save();

            DB::commit();

        }catch (\Exception $exception){
            DB::rollBack();
            throw $exception;
        }
        return $blog;
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     * @throws \Exception
     */
    public function delete($id)
    {
        try{
            DB::beginTransaction();
            $result = $this->repository->find($id);
            $result->delete();
            DB::commit();
        }catch (\Exception $exception){
            DB::rollBack();
            throw $exception;
        }

        return $result;
    }



}
