<?php

namespace App\Http\Controllers;

use App\job_announce;
use Illuminate\Http\Request;

class JobAnnounceController extends Controller
{
    /**
     * Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
    public function index()
    {
        $jobs = job_announce::all();
        return view('admin.content_admin.display_jobs',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content_admin.new_job');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = job_announce::create($request->all());
        $job->save();
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\job_announce  $job_announce
     * @return \Illuminate\Http\Response
     */
    public function show(job_announce $job_announce)
    {
        
    }

    public function display_table()
    {
        return view('admin.content_admin.display_jobs');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = job_announce::find($id);
        return view('admin.content_admin.edit_job',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\job_announce  $job_announce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $job = job_announce::find($id);
        $job->name = $request->name;
        $job->company = $request->company;
        $job->num_emp = $request->num_emp;
        $job->summary = $request->summary;
        $job->date_start = $request->date_start;
        $job->date_expire = $request->date_expire;
        $job->email = $request->email;
        $job->save();
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param job_announce $job_announce
     */
    public function destroy($id)
    {
        $job = job_announce::find($id);
        $job->delete();
        return redirect()->back();
    }
}
