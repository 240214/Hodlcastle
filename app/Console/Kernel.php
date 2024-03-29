<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel{

	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands = [
		Commands\RunCampaign::class,
		Commands\RunCompany::class,
	];

	/**
	 * Define the application's command schedule.
	 *
	 * @param \Illuminate\Console\Scheduling\Schedule $schedule
	 * @return void
	 */
	protected function schedule(Schedule $schedule){
		$schedule->command('campaign:run')->everyMinute();
		#$schedule->command('company:run')->everyMinute();
		$schedule->command('company:run')->twiceDaily(1, 13);
		$schedule->command('training_reminder:run')->everyMinute();
		$schedule->command('delete_download_files:run')->everyMinute();
	}

	/**
	 * Register the commands for the application.
	 *
	 * @return void
	 */
	protected function commands(){
		$this->load(__DIR__.'/Commands');

		require base_path('routes/console.php');
	}
}
