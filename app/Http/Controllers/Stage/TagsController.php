<?php

namespace App\Http\Controllers\Stage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Stage\Tags;


class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('/stage/tags/tags')->withTags(\App\Stage\Tags::all());

//        $Tags = new Tags;
//        $tags = $Tags::all();
//        return view('/stage/tags/tags',['tags'=>$tags]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('stage/tags/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'tags' => 'required'
        ]);

        $Tags = new Tags;
        $Tags->name = $request->get('tags');

        if ($Tags->save()) {
            return redirect('stage/tags');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('stage/tags/edit')->withTag(\App\Stage\Tags::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'tags' => 'required|unique:tags,name'
        ]);

        $Tags = Tags::find($id);
        $Tags->name = $request->get('tags');

        if ($Tags->save()) {
            return redirect('stage/tags');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        \App\Stage\Tags::find($id)->delete();
        return redirect()->back()->withInput()->withErrors('删除成功');
    }
}
