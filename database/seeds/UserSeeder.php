<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->fname = 'Admin';
        $user->email = 'admin@lms.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->assignRole('Super_User');
    }
}
