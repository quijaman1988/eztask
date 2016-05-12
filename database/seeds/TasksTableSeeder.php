<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user_id = \App\User::where('name','=','Manuel')->pluck('id')->first();
      DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Pay the Electricity Bill',
        'user_id' =>$user_id,
        'priority' => 'Urgent',
        'type' => 'Billing',
        'date' => '2016-05-26',
      ]);

      $user_id = \App\User::where('name','=','Manuel')->pluck('id')->first();
      DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Go to the Dentist',
        'user_id' =>$user_id,
        'priority' => 'Urgent',
        'type' => 'Personal',
        'date' => '2016-05-31',
        'status' => 'Complete'
      ]);

      $user_id = \App\User::where('name','=','Manuel')->pluck('id')->first();
      DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Finish P4',
        'user_id' =>$user_id,
        'priority' => 'Urgent',
        'type' => 'School',
        'date' => '2016-06-14',
      ]);

      $user_id = \App\User::where('name','=','Manuel')->pluck('id')->first();
      DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Buy mom a present',
        'user_id' =>$user_id,
        'priority' => 'Urgent',
        'type' => 'Family',
        'date' => '2016-07-14',
        'status' => 'Complete'
      ]);

      $user_id = \App\User::where('name','=','Manuel')->pluck('id')->first();
      DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Book a Flight for Cancun',
        'user_id' =>$user_id,
        'priority' => 'High',
        'type' => 'Leisure',
        'date' => '2016-08-29',

      ]);
    }
}
