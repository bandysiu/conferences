<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\StoreConferenceRequest;

class ConferencesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create', 'edit', 'update', 'destroy');
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {

        $conferences = Conference::all();

        return view('conference.index', compact('conferences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function create()
    {
        return \view('conference.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(StoreConferenceRequest $request, Conference $conference): RedirectResponse
    {
        $validated = $request->validated();
        $conferenceItem = $conference->create($validated);

        $request->session()->flash('status', 'Conference created');

        return redirect()-> route('conference.show', ['conference'=>$conferenceItem->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * return View
     */
    public function show(int $id): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        return view('conference.show', ['conference' => Conference::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conference $conference)
    {

        return view('conference.edit', compact('conference'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreConferenceRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(StoreConferenceRequest $request, int $id): RedirectResponse
    {
        $conference = Conference::findOrFail($id);
        $validated = $request->validated();
        $conference->fill($validated);
        $conference->save();

        $request->session()->flash('status', 'Conference was updated');

        return redirect()->route('conference.show', ['conference'=>$conference->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(string $id): RedirectResponse
    {
        $conference = Conference::findOrFail($id);
        $conference->delete();

        session()->flash('status', 'Conference was deleted');

        return redirect()->route('conference.index');
    }
}
