<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use App\Models\Student;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\queue;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['post' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = Student::all();
        return view('posts.create', ['student' => $student]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        //DÙNG VALIDATE CÁCH 1
        // $request->validate([
        //         'desc' => 'max:255',
        //         'content' => 'required|max:1000'
        //     ]);

        $post = new Post;
        //kiểm tra request gửi lên có file hay k
        if ($request->hasFile('image')) {
            //Lấy ra tên file gửi lên
            $originalFileName = $request->image->getClientOriginalName();
            //format lại tên
            $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
            //Xử lý config config/filesystem.php => 'root' => public_path(''),

            //storeAs('tên thử mục','tên file')
            $path = $request->file('image')->storeAs('images/posts', $fileName);
            //gán đường dẫn vào thuộc tính image_url của post
            $post->image_url = $path;
        }
        // $post->desc = $request->desc;
        // fill tự gán giá trị theo name ở create
        $post->fill($request->all());
        $post->save();
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
