<?php


namespace App\Services\Slide;


use App\Models\Blog\Blog;
use App\Models\Slide\Slide;
use App\Repositories\Blog\BlogRepository;
use App\Repositories\Slide\SlideRepository;
use Illuminate\Support\Facades\DB;

class SlideService
{
    private $repository;

    /**
     * SlideService constructor.
     * @param SlideRepository $repository
     */
    public function __construct(SlideRepository $repository)
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
     * @return Slide
     * @throws \Exception
     */
    public function create(array $request)
    {
        try{
            DB::beginTransaction();

            $data = [];

            $slide = new Slide($data);

            if (isset($request['image'])) {
                $filename =
                    \Storage::disk('public')->putFile($slide->id, $request['image']);

                $slide->image = $filename;
            }

            $slide->save();

            DB::commit();

        }catch (\Exception $exception){
            DB::rollBack();
            throw $exception;
        }
        return $slide;
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
