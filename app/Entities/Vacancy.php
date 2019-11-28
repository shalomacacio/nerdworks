<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Illuminate\Support\Str;

/**
 * Class Vacancy.
 *
 * @package namespace App\Entities;
 */
class Vacancy extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'id',
      'title',
      'description',
      'number_vacancies',
      'user_id',
      'dt_publish',
      'dt_expire',
      'requirements',
      'benefities',
      'contract_types',
      'note',
      'contact',
      'email',
      'status_vacancies_id',
    ];

    //Mutators
    public function setCodVacancyAttributes(){
      $this->attributes['cod_vacancy'] = Str::slug( 'Tesete Teste'  , '-');
    }

    //Relationships
    public function contractType(){
      return $this->belongsTo("App\Entities\ContractType");
    }

    public function user(){
      return $this->belongsTo("App\Entities\User");
    }

    public function city(){
      return $this->belongsTo("App\Entities\City");
    }

}
