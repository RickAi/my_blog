<?php namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class EventController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$project_type = Input::get('project_type');
		$needDone = $this->needDoneEvents();
		$current_stamp = Carbon::today()->timestamp;

		if($project_type == null){
			return $needDone->toJson();
		}

		if($project_type == Event::TYPE_PAST){
			$events_past = new Collection();
			foreach ($needDone as $event) {
				$event_stamp = $event->stamp;
				if($current_stamp > $event_stamp){
					$events_past->add($event);
				}
			}
			return $events_past->toJson();
		} else if($project_type == Event::TYPE_TODAY){
			$events_today = new Collection();
			foreach ($needDone as $event) {
				$event_stamp = $event->stamp;
				if($current_stamp == $event_stamp){
					$events_today->add($event);
				}
			}
			return $events_today->toJson();
		} else if($project_type == Event::TYPE_FUTURE){
			$events_future = new Collection();
			foreach ($needDone as $event) {
				$event_stamp = $event->stamp;
				if($current_stamp < $event_stamp){
					$events_future->add($event);
				}
			}
			return $events_future->toJson();
		} else if($project_type == Event::TYPE_DAILY){
			$event_daily = new Collection();
			foreach ($needDone as $event) {
				if($event->project_type == Event::TYPE_DAILY){
					$event_daily->add($event);
				}
			}
			return $event_daily->toJson();
		} else if($project_type == Event::TYPE_WORK){
			$event_work = new Collection();
			foreach ($needDone as $event) {
				if($event->project_type == Event::TYPE_WORK){
					$event_work->add($event);
				}
			}
			return $event_work->toJson();
		} else if($project_type == Event::TYPE_STUDY){
			$event_study = new Collection();
			foreach ($needDone as $event) {
				if($event->project_type == Event::TYPE_STUDY){
					$event_study->add($event);
				}
			}
			return $event_study->toJson();
		}

		return $needDone->toJson();
	}

	public function needDoneEvents(){
		$events = Event::all();

		$needDone = new Collection();
		foreach ($events as $event) {
			if(!$event->is_finished){
				$needDone->add($event);
			}
		}
		return $needDone;
	}

	public function eventsPast(){
		$events = Event::all();
		$events_past = new Collection();
		$current_stamp = Carbon::now()->timestamp;

		foreach ($events as $event) {
			$event_stamp = $event->stamp;
			if($current_stamp > $event_stamp){
				$events_past->add($event);
			}
		}

		return $events_past->toJson();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$payload = $request->all();
		$stamp_type = $request->get('stamp_type');
		if($stamp_type == Event::TYPE_PROJECT_TODAY){
			$payload['stamp'] = Carbon::today()->timestamp;
		} else if($stamp_type == Event::TYPE_PROJECT_TOMMOROW){
			$payload['stamp'] = Carbon::tomorrow()->timestamp;
		} else if($stamp_type == Event::TYPE_PROJECT_NEXT_2_DAYS){
			$payload['stamp'] = Carbon::tomorrow()->addDay(1)->timestamp;
		} else if($stamp_type == Event::TYPE_PROJECT_NEXT_3_DAYS){
			$payload['stamp'] = Carbon::tomorrow()->addDay(2)->timestamp;
		} else{
			$payload['stamp'] = Carbon::today()->timestamp;
		}

		$event = Event::create($payload);
		return $event;
	}

	public function finishEvent(Event $event){
		Event::destroy($event->id);
		return response(['status' => 'success']);
	}

}
