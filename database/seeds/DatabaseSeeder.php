<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-09-26T12:45:24+01:00
# @Filename: DatabaseSeeder.php
# @Last modified by:   John Carlo M. Ramos
# @Last modified time: 2019-11-19T14:32:47+00:00




use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PublishersTableSeeder::class);
        $this->call(BooksTableSeeder::class);
    }
}
