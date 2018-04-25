<?php

namespace App\Listeners\Backend\Customer;

use App\Events\Backend\Customer\Customer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomerListener
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
     * @param  Customer  $event
     * @return void
     */
    public function handle(Customer $event)
    {
        //
    }
}
