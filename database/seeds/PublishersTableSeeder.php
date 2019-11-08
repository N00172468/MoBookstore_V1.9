<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-10-31T22:38:35+00:00
# @Filename: PublishersTableSeeder.php
# @Last modified by:   mo
# @Last modified time: 2019-10-31T22:41:54+00:00




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
        $publisher = new Publisher();
        $publisher->name = "O'Reilly Media";
        $publisher->address = "Sebastopol, CA, USA";
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = "Wrox Press";
        $publisher->address = "Birmingham, UK";
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = "New Riders";
        $publisher->address = "Berkeley, CA, USA";
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = "John Wiley";
        $publisher->address = "Chichester, UK";
        $publisher->save();
    }
}
