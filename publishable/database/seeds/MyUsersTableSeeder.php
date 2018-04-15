<?php

use Illuminate\Database\Seeder;
use Miri92\Mycms\Models\User;
use Miri92\Mycms\Models\UserMeta;

class MyUsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {

            $user = User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
            ]);

            $role_meta_value = array(
                'role_id' => 1,
                'role_name' => 'Admin'
            );
            $role_meta_value = serialize($role_meta_value);
            $user_meta = new UserMeta([
                'meta_key' => 'role',
                'meta_value' => $role_meta_value,
            ]);
            $user->UserMeta()->save($user_meta);
        }
    }
}
