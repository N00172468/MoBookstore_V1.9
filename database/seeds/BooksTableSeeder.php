<?php
# @Author: John Carlo M. Ramos
# @Date:   2019-11-19T14:28:05+00:00
# @Email:  !!!!!---CTRL + ALT + C = Colour Picker---!!!!!
# @Last modified by:   John Carlo M. Ramos
# @Last modified time: 2019-11-19T14:41:34+00:00




use Illuminate\Database\Seeder;
use App\Publisher;

class BooksTableSeeder extends Seeder
{
  private $amountOfPublishers = 0;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->amountOfPublishers = Publisher::count();

      factory(App\Book::class, 50)->create([
        'publisher_id' => function() {
          return mt_rand(1, $this->amountOfPublishers);
        }
      ]);
    }
}
