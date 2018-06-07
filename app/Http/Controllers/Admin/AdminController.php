<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showList()
	{
		$posts = Post::paginate(5);
		return view('admin.post.list', ['posts' => $posts]);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showCreateForm()
	{
		return view('admin.post.add');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function create(Request $request)
	{
		$check = $request->input();
		switch ($check){
			case $request->input('title')=="":
				return redirect()->back()->with("error","Title không được trống");
				break;
			case $request->input('caption')=="":
				return redirect()->back()->with("error","Caption không được trống");
				break;
			case $request->input('description')=="":
				return redirect()->back()->with("error","Description không được trống");
				break;
			case $request->input('author')=="":
				return redirect()->back()->with("error","Author không được trống");
				break;
			case $request->file('thumbnail')=="":
				return redirect()->back()->with("error","Thumbnail không được trống");
				break;
			case $request->input()=="":
				return redirect()->back()->with("error","Không được bỏ trống");
				break;
			default:
				$post = new Post();
				$this->validate($request, [
					'title' => 'required',
					'caption'=> 'required',
					'description'=> 'required',
					'author'=> 'required',
					'thumbnail'=>'required',
				]);
				$post->title = $request->input('title');
				$post->caption = $request->input('caption');
				$post->description = $request->input('description');
				$post->author = $request->input('author');

				$thumb = $request->file('thumbnail')->getClientOriginalName();
				$request->file('thumbnail')->move(public_path('/thumbnail'), $thumb);
				$post->thumbnail = asset("thumbnail/$thumb");

				$post->save();
				return redirect('/admin/post')->with('message', 'Thêm bài viết thành công !');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function showDetail($id)
	{
		$post = Post::where('id', $id)->first();
		return view('admin.post.detail', ['post' => $post]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function showEditForm($id)
	{
		$post = Post::where('id', $id)->first();
		return view('admin.post.edit', ['post' => $post]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Request $request, $id)
	{
		$post = Post::where('id', $id)->first();
		if ($thumb = $request->file('thumbnail') == ""){
			$post->thumbnail = $post->thumbnail;
		}
		else{
			$thumb = $request->file('thumbnail')->getClientOriginalName();
			$request->file('thumbnail')->move(public_path('/thumbnail'), $thumb);
			$post->thumbnail = asset("thumbnail/$thumb");
		}
		$post->title = $request->input('title');
		$post->caption = $request->input('caption');
		$post->description = $request->input('description');
		$post->save();
		return redirect('/admin/post')->with('message', 'Sửa bài viết thành công !');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function delete($id)
	{
		$post = Post::find($id)->delete();

		return redirect("/admin/post")->with('message', 'Xóa bài viết thành công !');
	}
}

