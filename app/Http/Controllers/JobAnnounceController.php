<?php

namespace App\Http\Controllers;

use App\job_announce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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
//        dd($request->all());
        $validate = Validator::make($request->all(),[
            'name'=>'required',
            'company'=>'required',
            'num_emp'=>'required',
            'summary'=>'required',
            'date_start'=>'required',
            'date_expire'=>'required',
            'email'=>'required'
        ]);
        if($validate->fails()){
            return redirect('/admin/create')->withError($validate)->withInput();
        }
        $job = job_announce::create($request->all());
        $job->save();
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param $name
     * @return \Illuminate\Http\Response
     * @internal param $id
     * @internal param job_announce $job_announce
     */
    public function show($name)
    {
        $jobs = job_announce::where('name','like','%'.$name.'%')->first();
        return view('admin.content_admin.search_result',compact('jobs'));
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
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param job_announce $job_announce
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
