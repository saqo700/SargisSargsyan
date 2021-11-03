<?php

namespace App\Listeners;

use App\Events\UserCreatedEvant;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserCreatedListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserCreatedEvant $event)
    {
        \Log::info('USER_CREATED_LISTNER', [
            'user_id' => $event->user->id,
            'email' => $event->user->email,
        ]);
        \Log::info('Sending user email...');
    }
}
