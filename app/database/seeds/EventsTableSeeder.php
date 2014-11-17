<?php
 
class EventsTableSeeder extends Seeder {
 
    public function run()
    {
        // our array of user objects to create - just one in this case
      $events = [
            [     
          
              'name' => 'ISAT Meeting',
              'description' => 'First ISAT meeting in the history of time.',
              'location' => 'ISAT 100',            
              'time' => '8:00 PM Decemeber 25, 2014',
              'created_at' => '2013-05-24 00:00:00',
              'updated_at' => '2013-05-24 00:00:00'
            ],
            [  
              'name' => 'ISAT Meeting 2',
              'description' => 'Second ISAT meeting in the history of time.',
              'location' => 'ISAT 100',            
              'time' => '8:00 PM Decemeber 26, 2014',
              'created_at' => '2013-05-25 00:00:00',
              'updated_at' => '2013-05-25 00:00:00'
            ]  
          ];
 
      DB::table('events')->insert($events);
    }
 
}