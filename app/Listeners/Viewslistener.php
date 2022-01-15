<?php

namespace App\Listeners;

use App\Events\ViewsEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class Viewslistener
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
    public function handle(ViewsEvent $event)
    {
        $this->viewers($event->course );
    }

    public function viewers($course){

        $course->views = $course->views + 1 ;

        $course ->save();
    }
}
