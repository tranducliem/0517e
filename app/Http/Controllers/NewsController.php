<?php

namespace App\Http\Controllers;

use App\News;
use Session;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = News::orderBy('created_at', 'DESC')->get();
        $data = [
            'list' => $list
        ];

        return view('news.show', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);

        $n = new News();
        $n->title = $request->title;
        $n->save();

        Session::flash('success', 'Thêm mới thành công!!!');

        return redirect('news');
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
        $post = News::findOrFail($id);

        return view('news.edit', ['news' => $post]);
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
        $this->validate($request, [
            'title' => 'required'
        ]);

        $post = News::findOrFail($id);
        $post->title = $request->title;
        $post->save();
        Session::flash('success', 'Cập nhật thành công!!!');

        return redirect('news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = News::findOrFail($id);
        $title = $post->title;
        $post->delete();

        Session::flash('success', 'Xóa tin tức "'.$title.'" thành công!!!');

        return redirect('news');
    }
}
