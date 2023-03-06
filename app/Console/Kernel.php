<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel; 
use Illuminate\Support\Facades\DB;

use App\Models\Event;


class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        //$schedule->job(new SendMailStatisticPost)->dailyAt('1:00');;
        $schedule->call(function() {
            // $event = Event::latest()->first();
            // if($event['one'] == 0) {
            //     $event->update(['one' => '1', 'two' => '1', 'three' => '1']);
            // }
            $event = Event::orderBy('id', 'DESC')->first();
            if(isset($event) && $event->one == 0 && $event->two == 0 && $event->three == 0) {
                $event->one   = rand(1,6);
                $event->two   = rand(1,6);
                $event->three = rand(1,6);
                $event->save();
            }
            // tinh toan cho nhung nguoi da dat dung.
            // eat string , send boolean

            Event::insert(['one' => '0', 'two' => '0', 'three' => '0', 'created_at'=> date('Y-m-d H:i:s')]); 
        })->everyFiveMinutes(); 
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
