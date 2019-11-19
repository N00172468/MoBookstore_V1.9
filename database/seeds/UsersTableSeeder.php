<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-09-26T13:18:13+01:00
# @Filename: UsersTableSeeder.php
# @Last modified by:   John Carlo M. Ramos
# @Last modified time: 2019-11-19T15:42:19+00:00




use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_admin = Role::where('name', 'admin')->first();
      $role_user = Role::where('name', 'user')->first();

      $admin = new User();
      $admin->name = 'Mo Che';
      $admin->email = 'admin@mobookstore.ie';
      $admin->password = bcrypt('secret');
      $admin->save();
      $admin->roles()->attach($role_admin);


      $user = new User();
      $user->name = 'John Jones';
      $user->email = 'johnj@mobookstore.ie';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);

      factory(App\User::class, 20)->create()->each(function ($user) {
        $user->roles()->attach(Role::where('name', 'user')->first());
      });

    }
}
