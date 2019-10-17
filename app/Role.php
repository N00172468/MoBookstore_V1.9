<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-09-26T13:04:22+01:00
# @Filename: Role.php
# @Last modified by:   mo
# @Last modified time: 2019-09-26T13:36:52+01:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_role');
    }
}
