<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-10-17T14:11:23+01:00
# @Filename: PageController.php
# @Last modified by:   mo
# @Last modified time: 2019-10-17T15:55:50+01:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
      return view('welcome');
    }

    public function about() {
      return view('about');
    }
}
