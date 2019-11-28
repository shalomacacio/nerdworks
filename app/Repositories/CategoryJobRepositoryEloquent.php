<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CategoryJobRepository;
use App\Entities\CategoryJob;
use App\Validators\CategoryJobValidator;

/**
 * Class CategoryJobRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CategoryJobRepositoryEloquent extends BaseRepository implements CategoryJobRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CategoryJob::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return CategoryJobValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
