<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-10-31T22:26:43+00:00
# @Filename: Publisher.php
# @Last modified by:   mo
# @Last modified time: 2019-10-31T22:30:07+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    public function books() {
        return $this->hasMany('App\Book');
    }
}
