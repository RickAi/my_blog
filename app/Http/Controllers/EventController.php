<?php namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class EventController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = Event::all();

		$needDone = new Collection();
		foreach ($events as $event) {
			if(!$event->is_finished){
				$needDone->add($event);
			}
		}

		return $needDone->toJson();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$payload = $request->all();
		$event = Event::create($payload);
		return $event;
	}

	public function finishEvent(Event $event){
		$event->is_finished = true;
		return true;
	}

}
