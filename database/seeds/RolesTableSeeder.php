<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-09-26T13:18:22+01:00
# @Filename: RolesTableSeeder.php
# @Last modified by:   mo
# @Last modified time: 2019-09-26T13:26:57+01:00




use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'An administrator user';
        $role_admin->save();

        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'An ordinary user';
        $role_user->save();
    }
}
