<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Event;
use App\Models\Permission;
use Illuminate\Http\Request;

class EventController extends Controller
{
    function __construct()
    {
        //  $this->middleware('permission:event-list|event-create|event-edit|event-delete', ['only' => ['index','show']]);
        //  $this->middleware('permission:event-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:event-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:event-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $events = Event::latest()->paginate(5);
        return view('events.index',compact('events'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $users = User::all();
        return view('events.create', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'frequency' => 'required',
            'event_banner' => 'required|image',
            'owner' => 'required',
            'attendees' => 'required|array',
            'attendees.*' => 'email',
//            $categoryID = $request->input('category_id'),
            'category' => 'required',
            'start_date' => 'required|date',
            'lead_date' => 'required|date|after:tommorow',
        ]);

            Event::create($request->all());

            return redirect()->route('events.index')
                            ->with('success','Event created successfully.');


        // Upload the event banner image
        $eventBannerPath = $request->file('event_banner')->store('event_banners', 'public');

        // Create the event
        $event = Event::create([
            'name' => $validatedData['name'],
            'frequency' => $validatedData['frequency'],
            'event_banner' => $eventBannerPath,
            'owner' => $validatedData['owner'],
            'attendees' => $validatedData['attendees'],
            'category' => $validatedData['category'],
            'start_date' => $validatedData['start_date'],
            'lead_date' => $validatedData['lead_date'],
        ]);

        return redirect()->route('events.show', $event);
    }

    public function show(Event $event)
    {
        // $event = Event::findOrFail($id);

        // $eventCategory = $event->category;

        return view('events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required',
            'frequency' => 'required',
            'event_banner' => 'image',
            'owner' => 'required',
            'attendees' => 'required|array',
            'attendees.*' => 'email',
            'category' => 'required',
            'start_date' => 'required|date',
            'lead_date' => 'required|date',
        ]);

        $event->update($request->all());

        return redirect()->route('events.index')
                         ->with('success','Event updated successfully');    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')
                         ->with('success', 'Event deleted successfully.');
    }
}
