<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-10-31T22:38:35+00:00
# @Filename: PublishersTableSeeder.php
# @Last modified by:   mo
# @Last modified time: 2019-11-14T13:49:45+00:00




use Illuminate\Database\Seeder;
use App\Publisher;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Publisher::class, 15)->create();
    }
}
