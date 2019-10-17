<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-09-26T13:04:22+01:00
# @Filename: 2019_09_26_120422_create_roles_table.php
# @Last modified by:   mo
# @Last modified time: 2019-09-26T13:05:30+01:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
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
        Schema::dropIfExists('roles');
    }
}
