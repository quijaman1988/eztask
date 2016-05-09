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
      $user_id = \App\User::where('last_name','=','Quijano')->pluck('id')->first();
      DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Pay the Electricity Bill',
        'user_id' =>$user_id,
        'priority' => 'Urgent',
        'type' => 'Billing',
        'date' => 'May 20th 2016',
      ]);

      $user_id = \App\User::where('last_name','=','Quijano')->pluck('id')->first();
      DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Go to the Dentist',
        'user_id' =>$user_id,
        'priority' => 'Urgent',
        'type' => 'Personal',
        'date' => 'May 29th 2016',
      ]);

      $user_id = \App\User::where('last_name','=','Quijano')->pluck('id')->first();
      DB::table('tasks')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'name' => 'Finish P4',
        'user_id' =>$user_id,
        'priority' => 'Urgent',
        'type' => 'School',
        'date' => 'May 14th 2016',
      ]);
    }
}
