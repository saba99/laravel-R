<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;


 use Illuminate\Database\Eloquent\SoftDeletes;

 use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        
        return view('posts.index',compact(['posts',$posts]));
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
    public function store(CreatePostRequest $request)
    {
      // return $request->all();

    //   $this->validate($request,[

    //    'title'=>'bail|required|max:10',
    //    'description'=>'required'


    //   ],[
    //        'title.required'=>'لطفا عنوان مطلب مورد نظر خود را انتخاب نمایید',
    //        'title.max'=>'تعداد کاراکتر های شما باید بیش از  دو کاراکتر باشد',
    //        'description.required'=>'لطفا توضیحات مطلب مورد نظر خود را وارد نمایید',

    //   ]);

      $post=new Post();
      $post->title=$request->title;
      $post->content= $request->description;
      $post->user_id=1;
      $post->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $post=Post::findOrFail($id);
        return view('posts.show',compact(['post',$post]));
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
        $post->title=$request->title;
        $post->content=$request->description;
        $post->save();
        //$post->update($request->all());

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

    return  redirect('posts');
    } 

//     public function showMyView($id,$name,$password){
//   //return view('pages.myview')->with('id',$id);

//         return view('pages.myview',compact('id','name','password',$id));

//     } 
//     public function  insert(){

//         DB::insert('insert into posts(title,content) values(?,?)',['insert پست','این پست توسط متد اینسرت درج شده است']);


//     } 
//     public function select(){

//        $allposts= DB::select('select * from posts');

//        return $allposts;
//     } 
//     public function updatePost(){

//         $updatedPost=DB::update('update posts set title="این عنوان به روز رسانی شده است" where id=?',[2] );
//          return $updatedPost;

//     }

//     public function deletePost(){

//         $deletedPost=DB::delete('delete from posts where id=?',[1]);
//         return $deletedPost;
//     }

//     public function getAllPosts(){

//         //$post=Post::where('title','Insert پست')->orderBy('title','desc')->take(1)->get();
//        //$post=Post::findOrFail();
//        $post=Post::all();
//         return $post;

//     }
//     public function savePost(){

//         // $post=new Post();
//         // $post->title='پست شماره 1';
//         // $post->content='این هم یک توضیح برای این کانتنت می باشد ';

//         // $post->save();

//         $post=Post::create(['title'=>'پست شماره 2','content'=>'این هم یک توضیح جدید']);
//     }

    
//     public function newUpdatepPost(){


//         //$post=Post::where('id',2)->update(['title'=>'Updated Post','content'=>'Updated content to you']);
//         $post=Post::findOrFail(2);
//         $post->title='یک پست جدید';
//         $post->content='یک متن جدید';
//         $post->save();
//         return $post;




//     }
//     public function newdeletePost(){

//         // $post=Post::where('id',2)->first();
//         // $post->delete();
//         //$post=Post::destroy([4,5]);
//         $post = Post::where('id', 6)->delete();


//     }  

//     public function workWithTrash(){
         
//         //$post=Post::withTrashed()->get();
//         $post = Post::onlyTrashed()->where('is_admin',1)->get();
//         return $post;
//     }

    
//     public function restorePost(){

//     $post=Post::onlyTrashed()->where('id',6)->restore();

//     }  

//     public function  forcedelete(){

//         $post=Post::onlyTrashed()->where('id',6)->forceDelete();
//     }
}
