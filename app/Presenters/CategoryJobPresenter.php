<?php

namespace App\Presenters;

use App\Transformers\CategoryJobTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class CategoryJobPresenter.
 *
 * @package namespace App\Presenters;
 */
class CategoryJobPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CategoryJobTransformer();
    }
}
