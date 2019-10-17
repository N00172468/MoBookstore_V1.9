<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-09-26T14:01:55+01:00
# @Filename: HomeController.php
# @Last modified by:   mo
# @Last modified time: 2019-09-26T14:17:58+01:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function index()
    {
      return view('admin.home');
    }
}
