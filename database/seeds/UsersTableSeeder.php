<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // reset the users table
      DB::statement('SET FOREIGN_KEY_CHECKS=0');
      DB::table('users')->truncate();

      // generate 3 users/author
      DB::table('users')->insert([
          [
              'name' => "Chrstine Thogori",
              'slug' => 'chrstine-thogori',
              'email' => "thogori@test.com",
              'password' => bcrypt('secret')
          ],
          [
              'name' => "Jane Doe",
              'slug' => 'jane-doe',
              'email' => "janedoe@test.com",
              'password' => bcrypt('secret')
          ],
          [
              'name' => "Victor Njonge",
              'slug' => 'victor-njonge',
              'email' => "vic@test.com",
              'password' => bcrypt('secret')
          ],
      ]);
    }
}
