<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

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
        $schedule->command('cache:clear')->everyTwoMinutes();
        $schedule->command('route:clear')->everyTwoMinutes();
        $schedule->command('config:cache')->everyThreeMinutes();
        $schedule->command('config:clear')->everyTwoMinutes();
        $schedule->command('view:cache')->everyThreeMinutes();
        $schedule->command('view:clear')->everyTwoMinutes();
        $schedule->command('optimize:clear')->everyTwoMinutes();
        $schedule->command('optimize')->everyMinute();
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
