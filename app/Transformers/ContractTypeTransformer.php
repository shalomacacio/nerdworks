<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\ContractType;

/**
 * Class ContractTypeTransformer.
 *
 * @package namespace App\Transformers;
 */
class ContractTypeTransformer extends TransformerAbstract
{
    /**
     * Transform the ContractType entity.
     *
     * @param \App\Entities\ContractType $model
     *
     * @return array
     */
    public function transform(ContractType $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
