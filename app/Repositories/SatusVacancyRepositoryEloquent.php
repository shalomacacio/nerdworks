<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SatusVacancyRepository;
use App\Entities\StatusVacancy;
use App\Validators\SatusVacancyValidator;

/**
 * Class SatusVacancyRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class SatusVacancyRepositoryEloquent extends BaseRepository implements SatusVacancyRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return StatusVacancy::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return SatusVacancyValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
