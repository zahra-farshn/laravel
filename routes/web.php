<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//   // return view('welcome');
//    return "salam ";
//});
//route::get('/contact',function(){
//    return "be safhe tamas khosh amadid";
//});
//route::get('admin/posts/example',function(){
//    $url=route('admin');
//    return"in safhe baraye modiriyat ast va url on barabar ast ba:".$url;
//})->name('admin');
//route::get('/admin/login',function()
//{
//    return"safhe vorod modiriat";
//});
//
//route::redirect('/admin/login','/admin/posts/example',301);
//
//route::get('/posts','UsersController@index');
//route::resource('/posts','PostsControllers');
//route::get('/posts','PostsController@create');
//route::get('/posts/{id?}','PostsController@index');
//route::get('/show-view/{id}/{name}/{password}','PostsController@showMyView');
//route::get('/contact','PostsController@contact');
//route::get('insert','PostsController@insert');
//route::get('select','PostsController@select');
//route::get('update','PostsController@updatePost');
//route::get('delete','PostsController@deletePost');
//route::get('posts','PostsController@getAllPosts');
//route::get('save-post','PostsController@savePost');
//route::get('update-post','PostsController@newUpdatePost');
//route::get('delete-post','PostsController@newDeletePost');
//route::get('data-trash','PostsController@workWithTrash');
//route::get('restore-post','PostsController@restorePost');
//route::get('force-delete-post','PostsController@forceDelete');
//eloquent relationship
//one to one Relationship
//route::get('user/{id}/post',function ($id){
//    $user_post=\App\User::find(1)->post;
//    $user_post=\App\User::find($id)->post;
//    $user_post=\App\User::find(1)->post->content;
//    return $user_post;
//});
//route::get('post/{id}/user',function ($id){
//    $post_user=\App\Post::find($id)->user;
//    $post_user=\App\Post::find($id)->user->email;
//    return $post_user;
//});
//one to many Relationship
//route::get('user/{id}/posts',function ($id){
////    return \App\User::find($id)->posts;
//    $user_post=\App\User::find($id)->posts;
//    foreach ($user_post as $post) {
//        echo $post->title;
//        echo "</br>";
//    }
//});
//many to many Relatonship
//route::get('user/{id}/roles',function ($id){
//    $user=\App\User::find($id);
//    foreach($user->roles as $role){
//        echo $role->name;
//        echo "</br>";
//    }
//});
//route::get('user/pivot',function (){
//    $user=\App\User::find(1);
//    foreach($user->roles as $role){
//       echo $role->pivot->created_at;
//       echo "</br>";
//    }
//});
//has many through
//
//polymorphic Relation
//route::get('user/photos',function () {
//    $user = \App\User::find(1);
//    foreach ($user->photos as $photo) {
//        echo $photo->path;
//        echo "</br>";
//    }
//});
//route::get('post/photos',function () {
//    $post = \App\Post::find(1);
//    foreach ($post->photos as $photo) {
//        $post = \App\Post::find(1); echo $photo->path;
//        echo "</br>";
//    }
//});
//route::get('photo/{id}/post',function ($id)
//{
//    $photo=\App\Photo::find($id);
//    return $photo->imageable;
//});
//route::get('post/tags',function ()
//{
//    $post = \App\Post::find(1);
//    foreach ($post->tags as $tag) {
//        echo $tag->name;
//        echo "</br>";
//    }
//});
//route::get('video/tags',function ()
//{
//    $video = \App\Video::find(2);
//    foreach ($video->tags as $tag) {
//        echo $tag->name;
//        echo "</br>";
//    }
//});
//route::get('tag/{id}/posts',function ($id)
//{
//    $tag= \App\Tag::find($id);
//    foreach ($tag->posts as $post) {
//        echo $post->title;
//        echo "</br>";
//    }
//});
//CRUD one to many Relationship
//route::get('/create',function (){
//    $user=\App\User::find(1);
//    $post=new \App\Post();
//    $post->title='ye post jadid ba rabete one to many';
//    $post->content='dar in ghesmat tozihat marbot be content gharar dade mishavad';
//    $user->posts()->save($post);
//});
//route::get('/read',function (){
//    $user=\App\User::find(1);
//   // dd($user );
//    foreach ($user->posts as $post){
//        echo $post->title;
//        echo "</br>";
//    }
//});
//route::get('/update',function (){
//    $user=\App\User::find(1);
//    $user->posts()->whereId(8)->update(['title'=>'update post from crud','content'=>'berozresani matlab tozihat']);
//});
//route::get('/delete',function (){
//    $user=\App\User::find(1);
//    $user->posts()->whereId(8)->delete();
//});
//CRUD many to many Relationship
//route::get('/create',function (){
//    $user=\App\User::find(1);
//    $role=new \App\Role();
//    $role->name='نویسنده';
//    $user->roles()->save($role);
//});
//route::get('/read',function (){
//    $user=\App\User::find(1);
//    foreach ($user->roles as $role){
//        echo $role->name;
//        echo "</br>";
//    }
//});
//route::get('/update',function (){
//    $user=\App\User::find(1);
//    if($user->has('roles')){
//        foreach ($user->roles as $role){
//            if($role->name=='نویسنده'){
//                $role->name='Author';
//                $role->save();
//            }
//        }
//    }
//});
//route::get('/delete',function (){
//    $user=\App\User::find(1);
//    foreach ($user->roles as $role){
//        if($role->name =='Author'){
//            $role->delete();
//        }
//    }
//
//});
////bara inke naghsh hazf kardim  vali to roleuser hazf nashode inja mikhaim hazf konim
//route::get('detach',function (){
//    $user=\App\User::find(1);
////hame naghsha user hazf mikone    $user->roles()->detach(1);
//    $user->roles()->whereId(3)->detach();
//});
//route::get('attach',function (){
//    $user=\App\User::find(1);
//    $user->roles()->attach(1);
//});
//// detach o attach baham
//route::get('sync',function (){
//    $user=\App\User::find(1);
//    $user->roles()->sync([1,2,3]);
//});
//CRUD Polymorphic Relationship
//route::get('/create',function (){
//    $video=\App\Video::find(1);
//    $video->tags()->create(['name'=>'morph video']);
//});
//route::get('/read',function (){
//    $video=\App\Video::find(1);
//    foreach ($video->tags as $tag){
//        echo $tag->name;
//        echo "</br>";
//    }
//});
//route::get('/update',function (){
//    $video=\App\Video::find(1);
//    $tag=$video->tags;
//    $newtags=$tag->where('id',5)->first();
//    $newtags->name='tag jadid';
//    $newtags->save();
//});
//route::get('/delete',function (){
//    $video=\App\Video::find(1);
//    $tag=$video->tags;
//    $deletedTag=$tag->where('id',5)->first();
//    $deletedTag->delete();
//});
//route::get('/detach',function (){
//    $video=\App\Video::find(1);
//    $video->tags()->detach();
//});
//route::get('/attach',function (){
//    $video=\App\Video::find(1);
//    $video->tags()->attach(1);
//});
//route::get('/sync',function (){
//    $video=\App\Video::find(1);
//    $video->tags()->sync([1,2]);
//});
//Form Routes
//route::resource('/posts','PostsController');
//route::get('file',function (){
//  //  $file=\Illuminate\Support\Facades\Storage::disk('public')->get('images/lFfT676DfLWXZaYNanjvMwoBpwzLzo9pbtzfvpKs.jpeg');
////    echo \Illuminate\Support\Facades\Storage::url('images/lFfT676DfLWXZaYNanjvMwoBpwzLzo9pbtzfvpKs.jpeg');
////    echo storage_path('images/lFfT676DfLWXZaYNanjvMwoBpwzLzo9pbtzfvpKs.jpeg');
//    return \Illuminate\Support\Facades\Storage::disk('public')->download('images/lFfT676DfLWXZaYNanjvMwoBpwzLzo9pbtzfvpKs.jpeg');
//});
use \Illuminate\Support\Facades\Auth;


Auth::routes(['verify'=> true]);

//Route::get('/home',['middleware'=>['auth','verified']] ,'HomeController@index')->name('home');
//Route::get('/home' ,'HomeController@index')->middleware(['auth','verified'])->name('home');
route::middleware(['auth','verified'])->group(function (){
    Route::get('/home','HomeController@index')->name('home');
    route::resource('/posts','PostsController');
});
route::get('/');
//route::get('/',function (){
//     $user=Auth::user();
////    return $user;
////    $user=Auth::check();
////    dd($user);
//    if(Auth::check()){
//        echo "hello".$user->name;
//        echo "<br/>";
//        echo "User Id:" . $user->id;
//    }else{
//       return redirect()->to('home');
//    }
//$email='elham@gmail.com';
//$password='12345678';
////$auth=Auth::attempt(['email'=>$email,'password'=>$password]);
////dd($auth);
//$user=Auth::once(['email'=>$email,'password'=>$password]);
//dd($user);
//$user=Auth::loginUsingId(3);
//dd($user);
//Auth::logout();
//});
//route::get('/test',function (){
//    $user=\App\User::find(3);
//    $user_role=$user->isAdmin();
//    dd($user_role);
//});
//route::get('/admin',function (){
//    echo "hello to Admin page";
//})->middleware('isAdmin:مدیر');
//use Illuminate\Http\Request;
//route::get('session',function (Request $request ){
//    $request->session()->put(['username'=>'elham']);
//    session(["email"=>"elham@gmial.com"]);
//    $request->session()->forget('username');
//     return $request->session()->all();
//     return $request->session()->flush();
//    return $request->session()->flash('message','post has been created');
//    return $request->session()->get('message');
//    return $request->session()->reflash();
//      $request->session()->keep('message');
//     $request->session()->all();

//});
