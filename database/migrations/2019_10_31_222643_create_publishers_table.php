<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-10-31T22:26:43+00:00
# @Filename: 2019_10_31_222643_create_publishers_table.php
# @Last modified by:   mo
# @Last modified time: 2019-10-31T22:27:53+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublishersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publishers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('address', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publishers');
    }
}
