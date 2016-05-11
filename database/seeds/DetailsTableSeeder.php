<?php

use Illuminate\Database\Seeder;

class DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task_id = \App\Task::where('name','=','Pay the Electricity Bill')->pluck('id')->first();
          DB::table ('details')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'url_to_picture' => 'http://www.uswitch.com/gas-electricity/guides/assets/images/gas-electricity/guides/energy-guides/electricity-comparison.jpg',
          'comment' =>'On May 20th I need to pay the electricity bill. I will pay it online
          to avoid problems',
          'task_id' =>  $task_id,

        ]);

        $task_id = \App\Task::where('name','=','Go to the Dentist')->pluck('id')->first();
          DB::table ('details')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'url_to_picture' => 'http://www.cfah.org/images/features/V5I3DentalCare.jpg',
          'comment' =>'On May 29th I have an appointment with th dentist. I will get several
          cavities removed',
          'task_id' =>  $task_id,

        ]);

        $task_id = \App\Task::where('name','=','Finish P4')->pluck('id')->first();
          DB::table ('details')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'url_to_picture' => 'http://www.sovereigngrace.net/Art/Complete280.png',
          'comment' =>'I have to finish Project 4 by May 4th. I will be a joy to complete it',
          'task_id' =>  $task_id,

        ]);

        $task_id = \App\Task::where('name','=','Buy mom a present')->pluck('id')->first();
          DB::table ('details')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'url_to_picture' => 'http://www.sovereigngrace.net/Art/Complete280.png',
          'comment' =>'Moms birthday is coming up. I have to make sure I buy her
          a very nice present. Pereferable some jewelry',
          'task_id' =>  $task_id,

        ]);

        $task_id = \App\Task::where('name','=','Book a Flight for Cancun')->pluck('id')->first();
          DB::table ('details')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
          'url_to_picture' => 'https://aquaworld.com.mx/en/wp-content/uploads/sites/2/2015/09/healthy-trip-to-cancun.jpg',
          'comment' =>'Due to our two year anniversary, I have to book a flight to Cancun
          for my girlfriend and I.',
          'task_id' =>  $task_id,

        ]);
    }
}
