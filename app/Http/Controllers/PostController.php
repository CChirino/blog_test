<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePostRequest;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')
                ->join('categories','posts.category_id', '=','categories.id' )
                ->whereNull('posts.deleted_at')
                ->select('posts.*','categories.name')
                ->get();
        return Inertia::render('Posts/ListPost', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return Inertia::render('Posts/FormCreatePost', ['categories' => $categories]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required',
                'description' => 'required',
                'content' => 'required',
                'status' => 'required',
            ]
        );
        $posts = new Post();
        $posts->title = $request->title;
        $posts->description = $request->description;
        $posts->content = $request->content;
        $posts->status = $request->status;
        $posts->category_id = $request->category_id;
        if ($request->hasFile('file')) {
            $filenameWithExt = $request->file->getClientOriginalName ();// Get Filename
            $fileNameToStore = $filenameWithExt;// Upload Image
            $path = $request->file('file')->move('storage/articles', $fileNameToStore,'public');
            $posts->file = $fileNameToStore;
            }
        $posts->save();

        return Redirect::route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return Inertia::render('Posts/ShowPost', ['posts' => $posts]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        $categories = Category::all();
        return Inertia::render('Posts/EditFormPost', ['posts' => $posts, 'categories' => $categories]);

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
        $posts = Post::find($id);
        return Redirect::route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();
        return Redirect::route('posts.index');
    }
}
