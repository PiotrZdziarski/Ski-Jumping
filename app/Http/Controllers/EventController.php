<?php

namespace App\Http\Controllers;

use App\Event;
use App\Hill;
use App\Http\Resources\EventResource;
use Symfony\Component\HttpFoundation\Response;

class EventController extends Controller
{
    public function show_count($count)
    {
        $events = Event::orderBy('id', 'desc')->take($count)->get();
        $hills = Hill::get();
        
        $eventscount = count($events);
        $hillscount = count($hills);

        for($i = 0; $i < $eventscount; $i++) {
            for ($j = 0; $j < $hillscount; $j++) {

                if($events[$i]->hill_id == $hills[$j]->id) {
                    $events[$i] = collect($events[$i])->merge(['hill' => $hills[$j]->hill]);
                    break;
                }

            }
        }
       return EventResource::collection($events);
    }
}
