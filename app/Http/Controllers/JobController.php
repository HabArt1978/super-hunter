<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with(['employer', 'tags'])
                   ->orderBy('created_at', 'desc')
                   ->paginate(9);

        return view('jobs.index', ['jobs' => $jobs]);
    }

    /**
     * Store a newly created resource in storage.
     * @throws Throwable
     */
    public function store(Request $request)
    {
        $user = $request->user();

        if (!$user->employer) {
            return back()
                ->withErrors(['employer' => 'Перед созданием вакансии необходимо добавить работодателя']);
        }

        $job = DB::transaction(function() use ($request, $user) {

            $validatedAttributes = $request->validate([
                'job_title' => 'required|string|min:3|max:100',
                'salary' => 'required|string|min:4|max:10',
                'schedule' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'url' => 'required|url|max:500',
                'tags' => 'sometimes|array|min:1|max:3',
                'tags.*' => 'integer|exists:tags,id',
            ]);

            $job = Job::create([
                'title' => $request->job_title,
                ...$validatedAttributes,
                'employer_id' => $user->employer->id
            ]);

            if ($tags = $validatedAttributes['tags'] ?? null) {
                $job->tags()->attach($tags);
            }

            return $job;
        });

        return redirect('/jobs')->with([
            'job-created' => [
                'id' => $job->id,
                'title' => $job->title
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::with(['tags'])->get();

        return view('jobs.create', compact('categories'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        $job = Job::with(['employer', 'tags'])
                  ->find($job->id);

        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        $categories = Category::with(['tags'])->get();
        $job->loadMissing(['tags']);

        return view('jobs.edit', compact('job', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * @throws Throwable
     */
    public function update(Request $request, Job $job)
    {
        DB::transaction(function() use ($request, $job) {
            $validatedAttributes = $request->validate([
                'job_title' => 'required|string|min:3|max:100',
                'salary' => 'required|string|min:4|max:10',
                'schedule' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'url' => 'required|url|max:500',
                'tags' => 'sometimes|array|min:1|max:3',
                'tags.*' => 'integer|exists:tags,id',
            ]);

            $job->update([
                'title' => $request->job_title,
                ...$validatedAttributes, //TODO
                'employer_id' => 1
            ]);

            if ($tags = $validatedAttributes['tags'] ?? null) {
                $job->tags()->sync($tags);
            }
        });

        return redirect("/jobs/{$job->id}");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->tags()->detach();
        $job->delete();

        return redirect('/jobs');
    }
}


