<?php

namespace App\Presenters;

use App\Transformers\VacancyTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class VacancyPresenter.
 *
 * @package namespace App\Presenters;
 */
class VacancyPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new VacancyTransformer();
    }
}
