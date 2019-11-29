<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Company.
 *
 * @package namespace App\Entities;
 */
class Company extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =
    [
      'company_name',
      'register_number',
      'logo',
      'contact',
      'email',
      'site',
      'facebook',
      'twitter',
      'linkedin',
      'instagram',
      'flg_active',
      'user_id'
    ];


    public function user(){
      return $this->belongsTo("App\Entities\User");
    }

}
