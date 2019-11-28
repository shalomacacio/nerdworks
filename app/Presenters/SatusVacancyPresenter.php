<?php

namespace App\Presenters;

use App\Transformers\SatusVacancyTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class SatusVacancyPresenter.
 *
 * @package namespace App\Presenters;
 */
class SatusVacancyPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new SatusVacancyTransformer();
    }
}
