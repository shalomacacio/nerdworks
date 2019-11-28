<?php

namespace App\Presenters;

use App\Transformers\ContractTypeTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ContractTypePresenter.
 *
 * @package namespace App\Presenters;
 */
class ContractTypePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ContractTypeTransformer();
    }
}
