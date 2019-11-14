<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-10-17T14:25:47+01:00
# @Filename: Book.php
# @Last modified by:   mo
# @Last modified time: 2019-11-08T14:10:54+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function publisher() {
        return $this->belongsTo('App\Publisher');
    }

    public function reviews()
    {
      return $this->hasMany('App\Review');
    }

}
