<?php
  
namespace App\Http\Controllers;
   
use App\Models\Post;
use Illuminate\Http\Request;
  
class PostCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index()
    {
        $data['posts'] = Post::orderBy('id','desc')->paginate(5);
    
        return view('posts.index', $data);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'description' => 'required',
            'price' => 'required',
        ]);

        $path = $request->file('image')->store('public/images');

        $post = new Post;

        $post->title = $request->title;
        $post->price = $request->price;
        $post->description = $request->description;
        $post->image = $path;

        $post->save();

    

        return redirect()->route('posts.index')
                        ->with('success','Post has been created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    } 

     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
        
        $post = Post::find($id);

        if($request->hasFile('image')){
            $request->validate([
              'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            ]);
            $path = $request->file('image')->store('public/images');
            $post->image = $path;
        }

        $post->title = $request->title;
        $post->price = $request->price;
        $post->description = $request->description;
        $post->save();
    
        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
    
        return redirect()->route('posts.index')
                        ->with('success','Post has been deleted successfully');
    }
}