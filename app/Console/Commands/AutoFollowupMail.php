<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Mail\followupmail;
use App\Models\User;

class AutoFollowupMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        // $users = User::whereDay('created_at', now()->day)->get();
        // $date = Carbon::createFromFormat('Y.m.d', $users);
        
        $users = User::whereDate('created_at', Carbon::today())->get();       
        
        $daysToAdd = 3;
        $date = $users->addDays($daysToAdd);        
        // dd($date);

        
  
        if ($users->count() > 0) {
            foreach ($users as $key => $user) {
                $email = $user->email;
                Mail::to($email)->send(new followupmail($user));
            }
        }
  
        return 0;
        // return Command::SUCCESS;
    }
}
