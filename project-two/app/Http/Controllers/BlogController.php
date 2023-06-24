<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blog;
    protected $blogs;
    protected $createBlog;
    protected $updateBlog;
    protected $deleteBlog;

    public function createBlog()
    {
        return view('create-blog');
    }

    public function saveBlog(Request $request)
    {
        $this->blog = new Blog();
        $this->blog->blog_name        = $request->blog_name;
        $this->blog->blog_location    = $request->blog_location;
        $this->blog->description      = $request->description;
        $this->blog->save();

        return redirect()->back()->with('massage', 'Blog Saved Successfully');
    }

    public function manegeBlog()
    {
        $this->blogs = Blog::orderBy('id', 'desc')->get();
        return view('manege-blog', ['blogs' => $this->blogs]);
    }

    public function editBlog($id)
    {
        $this->createBlog = Blog::find($id);
        return view('edit-blog', ['createBlog' => $this->createBlog]);
    }

    public function update(Request $request, $id)
    {
        $this->updateBlog = Blog::find($id);

        $this->updateBlog->blog_name        = $request->blog_name;
        $this->updateBlog->blog_location    = $request->blog_location;
        $this->updateBlog->description      = $request->description;
        $this->updateBlog->save();

        return redirect('/manage-blog')->with('masseges', 'Student info Save Successfully...');
    }

    public function deleteBlog($id)
    {
        $this->deleteBlog = Blog::find($id);
        $this->deleteBlog->delete();
        return redirect('/manage-blog')->with('massege', 'Student info Delete Successfully...');
    }
}
