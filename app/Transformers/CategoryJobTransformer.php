<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\CategoryJob;

/**
 * Class CategoryJobTransformer.
 *
 * @package namespace App\Transformers;
 */
class CategoryJobTransformer extends TransformerAbstract
{
    /**
     * Transform the CategoryJob entity.
     *
     * @param \App\Entities\CategoryJob $model
     *
     * @return array
     */
    public function transform(CategoryJob $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
