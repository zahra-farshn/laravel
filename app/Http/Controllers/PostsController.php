<?php

namespace App\Http\Controllers;

use App\Events\PostViewEvent;
use App\Http\Requests\CreatePostRequest;
use App\Listeners\PostViewCount;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        //return"id is:"."".$id;
       // echo asset('storage/java.jpg');
//        $posts=Post::all();
//        return view('posts.index',compact(['posts']));
        $posts=Post::with('user')->get();
//        $posts[0];
        return  view('posts.index',compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     //   return"khobi";
        return view('posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createPostRequest $request)
    {
//        return $request->all();
//        return $request->input('title');
//        $this->validate($request,['title'=>'required|max:2',
//            'description'=>'required'],
//            ['tilte.required'=>'لطفا عنوان را وارد کنید',
//                'title.Max'=>'لطفا بیش از 2 کاراکتر وارد نکنید',
//            'description.required'=>'لطفا متن مورد نظر خود را وارد کنید']);
//        $validatedData = $request->validate(['title'=>['required|max:255'],'description'=>['required']]);
//        $validated = $request->validated();

        $post=new Post();
        if($file= $request->file('file')){
//            $name=$file->getClientOriginalName();
            $file->store('public/images');
//            $file->move('images',$name);
//         //   $input['path']=$name;
//              $post->path=$name;
        }
////         echo $file->getClientOriginalName();
//        echo $file->getmaxfilesize();
        //$post=new Post();
//        $post->title=$request->title;
//        $post->content=$request->description;
//        $post->user_id=1;
//        $post->save();

//         $file= $request->file('file');
////         echo $file->getClientOriginalName();
//        echo $file->getmaxfilesize();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::findOrFail($id);
        event(new PostViewEvent($post));
        return view('posts.show',compact(['post']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::findOrFail($id);
        return view('posts.edit',compact(['post']));
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
        $post=Post::findOrFail($id);
//      $post->update($request->all());
        $post->title=$request->title;
        $post->content=$request->description;
        $post->save();
        return redirect('posts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::findOrFail($id);
        $post->delete();
        return redirect('posts');


    }
//    public function showMyView($id,$name,$password){
//       // return  View('pages.myView')->with('id',$id);
//       //  return  View('pages.myView',compact(['id','name','password']));
//       // return  View('layouts.app',compact(['id','name','password']));
//    }
//    public function contact(){
//        $people=['zahra','zohre','elham','hosein','ghazale','hamide','bahare','abdollah'];
//        return view('pages.contact',compact('people'));
//    }
//
//    public function insert()
//    {
//        DB::insert('insert into posts(title,content)values (?,?)',['insert post','in post ba estefade az method insert darj shode ast']);
//    }
//
//    public function select()
//    {
//        $allPosts =DB::select('select* from posts');
//        return $allPosts;
//    }
//
//    public function updatePost()
//    {
//        $updatedPost=DB::update('update posts set title="in post berozresani shode ast"where id=?',[2]);
//        return $updatedPost;
//    }
//
//    public function deletePost()
//    {
//       $deletedPost=DB::delete('delete from posts where id=?',[2]);
//       return $deletedPost;
//    }
//
//    public function getAllPosts(){
//        $post=Post::all();
////        $post=Post::find(4);
////        $post=Post::where('title','insert post')->orderBy('id','desc')->get();
////        $post=Post::where('title','insert post')->orderBy('id','desc')->take(2)->get();
////        $post=Post::findorfail(100);
//        return $post;
//    }

//    public function savePost()
//    {
////        $post=new Post();
////        $post->title=('post shomare 1');
////        $post->content=('in ham content marbot be in post');
////        $post->save();
//          $post=Post::create(['title'=>'post shomare 2','content'=>'in ham tozih jadid']);
//    }
//
//    public function newUpdatePost()
//    {
////       $post=Post::where('id','4')->update(['title'=>'update title','content'=>'update content for you']);
//        $post=Post::findorfail(5);
//        $post->title='new title';
//        $post->content='new content';
//        $post->save();
//        return $post;
//    }
//
//    public function newDeletePost()
//    {
////        $post=Post::where('id','7')->first();
////        $post->delete();
////        $post=Post::destroy(6);
////        $post=Post::destroy([4,5]);
//        $post=Post::where('id','5')->delete();
//    }
//
//    public function workWithTrash()
//    {
////        $post=Post::withTrashed()->get();
////        $post=Post::onlyTrashed()->get();
//        $post=Post::withTrashed()->where('is_admin','0')->get();
//        return $post;
//
//    }
//
//    public function restorePost()
//    {
//    $post=Post::onlyTrashed()->where('id',5)->restore();
//    }
//
//    public function forceDelete()
//    {
//        $post=Post::onlyTrashed()->where('id',5)->forceDelete();
//    }
}
