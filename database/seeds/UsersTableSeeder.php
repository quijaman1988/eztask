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
      $user = \App\User::firstOrCreate(['email' => 'jill@harvard.edu']);
      $user->first_name = 'Jill';
      $user->last_name = 'Jones';
      $user->email = 'jill@harvard.edu';
      $user->password = \Hash::make('helloworld');
      $user->save();

      $user = \App\User::firstOrCreate(['email' => 'jamal@harvard.edu']);
      $user->first_name = 'Jamal';
      $user->last_name = 'Williams';
      $user->email = 'jamal@harvard.edu';
      $user->password = \Hash::make('helloworld');
      $user->save();

      $user = \App\User::firstOrCreate(['email' => 'quijaman1988@gmail.com']);
      $user->first_name = 'Manuel';
      $user->last_name = 'Quijano';
      $user->email = 'quijaman1988@harvard.edu';
      $user->password = \Hash::make('password');
      $user->save();
    }
}
