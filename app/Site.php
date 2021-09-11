<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 *
 * @package App
 * @property string $title
*/
class Site extends Model
{
    use SoftDeletes;
    protected $table = 'sites';
    protected $fillable = ['site'];

    public static function boot()
    {
        parent::boot();
        
        Site::observe(new \App\Observers\UserActionsObserver);
    }

}
