<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-10-31T22:34:13+00:00
# @Filename: 2019_10_31_223413_add_publisher_id_to_books_table.php
# @Last modified by:   mo
# @Last modified time: 2019-10-31T22:37:41+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPublisherIdToBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('publisher');
            $table->bigInteger('publisher_id')->unsigned();

            $table->foreign('publisher_id')->references('id')->on('publishers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign('publisher_id');
            $table->dropColumn('publisher_id');
            $table->string('publisher');
        });
    }
}
