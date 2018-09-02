<?php

namespace App\Http\Controllers;

use App\Event;
use App\Hill;
use App\Http\Resources\EventResource;

class EventController extends Controller
{
    /**
     * Returns number of events
     * @param $count
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     *
     */
    public function show_count($count)
    {
        $events = Event::take($count)->get();
        $hills = Hill::get();

        $eventscount = count($events);
        $hillscount = count($hills);


        for($i = 0; $i < $eventscount; $i++) {
            $events[$i]->date = date('Y-m-d', strtotime($events[$i]->date));
            for ($j = 0; $j < $hillscount; $j++) {

                if($events[$i]->hill_id == $hills[$j]->id) {
                    $events[$i] = collect($events[$i])->merge(['hill' => $hills[$j]->hill]);
                    $events[$i] = collect($events[$i])->merge(['hill_image' => $hills[$j]->hill_image]);
                    break;
                }

            }
        }

       return EventResource::collection($events);
    }
}
