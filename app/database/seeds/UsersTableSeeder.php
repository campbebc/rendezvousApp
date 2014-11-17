<?php
 
class UsersTableSeeder extends Seeder {
 
    public function run()
    {
        // our array of user objects to create - just one in this case
      $users = array(
          array(
              'username' => 'campbebc',
              'email' => 'bccampbell2223@gmail.com',
              'fname' => 'Benjamin',
              'lname' => 'Campbell',
              'number' => '7043026050',
              'password' => Hash::make('password'),

              'username' => 'username',
              'email' => 'bccampbell2223@gmail.com',
              'fname' => 'Benjamin',
              'lname' => 'Campbell',
              'number' => '1234567890',
              'password' => Hash::make('password'),
          )
      );
 
      DB::table('users')->insert($users);
    }
 
}