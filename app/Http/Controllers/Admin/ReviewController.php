<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-11-08T14:33:43+00:00
# @Filename: ReviewController.php
# @Last modified by:   mo
# @Last modified time: 2019-11-08T15:01:43+00:00




namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Review;
use Auth;

class ReviewController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('role:admin');
        // $this->middleware('role:moderator');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $rid)
    {

        Auth::user()->authorizeRoles(['admin', 'moderator']);

        $review = Review::findOrFail($rid);

        $review->delete();

        return redirect()->route('admin.books.show', $id);
    }
}
