<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Vacancy;

/**
 * Class VacancyTransformer.
 *
 * @package namespace App\Transformers;
 */
class VacancyTransformer extends TransformerAbstract
{
    /**
     * Transform the Vacancy entity.
     *
     * @param \App\Entities\Vacancy $model
     *
     * @return array
     */
    public function transform(Vacancy $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
