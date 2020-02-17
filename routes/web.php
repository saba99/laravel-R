<?php


/*Route::get('/contact',function(){


    return 'به صفحه ما خوش آمدید ';
}); 

Route::get('about/',function(){


return  "درباره ما";
}); 
Route::get('/post/{id}/{name?}',function($id,$name=null){


    return'ای دی این پست برابر است با '."".$id."$name";
}); 

Route::get('admin/posts/example',function(){

   

return 'این آدرس برای صفحه مدیریت میباشد';
})->name('admin'); 


Route::get('/admin/login',function(){

return 'صفحه ورود مدیریت';

});
//Route::redirect('/admin/login','/admin/posts/example',301);

Route::prefix('user')->group(function(){

Route::get('user/posts/example',function(){

    return 'گروه بندی ادمین';

});
Route::get('user/login',function(){

return 'صفحه لاگین';
}); 
});*/ 

//Route::get('/posts','PostsController@index');

// Route::resource('/posts','PostsController');

// Route::get('/posts/{id}','PostsController@index');

// Route::get('/showview/{id}/{name}/{password}', 'PostsController@showMyView');

// Route::get('/insert','PostsController@insert');

// Route::get('/select', 'PostsController@select');

// Route::get('/updatepost', 'PostsController@updatePost');

// Route::get('/deletepost', 'PostsController@deletePost');

// Route::get('posts','PostsController@getAllPosts');

// Route::get('save-post', 'PostsController@savePost');

// Route::get('update-post','PostsController@newUpdatepPost');


// Route::get('delete-post','PostsController@newdeletePost');

// Route::get('data-trash','PostsController@workWithTrash');

// Route::get('restore-post','PostsController@restorePost');

// Route::get('force-delete-post', 'PostsController@forcedelete');

//one to one relationship
// Route::get('user/{id}/posts',function($id){


//     //$user_post=\App\User::find(1)->post;
//     $user_post = \App\User::find($id)->post->content;
//     return $user_post;


// }); 
// Route::get('post/{id}/user',function($id){


//     $post_user=\App\Post::find($id)->user->email;

//     return $post_user;
// }); 
//one to many relationship

// Route::get('user/{id}/posts',function($id){

 
// $user_posts=\App\User::find($id)->posts;

// foreach($user_posts as $post){

//     echo $post->title;
// } 

//many to many relationship 


// Route::get('user/{id}/roles',function($id){

// $user_roles=\App\User::find($id);
// foreach($user_roles->roles as $role) 

// echo $role->name;
// echo "</br>";


// }); 

// Route::get('user/pivot',function(){

// $user=\App\User::find(1);
// foreach($user->roles as $role){

//     return $role->pivot->updated_at;
// }

// }); 

//has many through 

use Illuminate\Support\Facades\Auth;

Route::get('user/country',function(){

$country=\App\Country::find(2);
foreach($country->posts as $post){

    echo $post->title;
    echo "</br>";
}

}); 

//polymorphic  relationship 

// Route::get('user/photos',function(){

// $user=\App\User::find(1);
// foreach($user->photos as $photo){

//     echo $photo->path;
// }

// });
// Route::get('post/photos', function () {

//     $post = \App\Post::find(10);
//     foreach ($post->photos as $photo) {

//         echo $photo->path;
//     }
// });

// Route::get('photo/{id}/post',function(){

// $photo=\App\Photo::find(1);
// return $photo->imagable;

// }); 

// Route::get('post/tags',function(){


//     $post=\App\Post::find(8);
//     /*foreach($post->tags as $tag){
//  echo $tag->name;

//     }; */
// });
// Route::get('video/tags', function () {


//     $video = \App\Video::find(1);
//     foreach ($video->tags as $tag) {
//         echo $tag->name;
//     };
// });
// Route::get('tag/{id}/post', function ($id) {


//     $tags= \App\Tag::find($id);
//     foreach($tags->posts as $post)
//     return $post->name;
// });

 //CRUD one to many relationship
//  Route::get('/create',function(){

// $user=\App\User::find(1);
// $post=new \App\Post();
// $post->title=' یک پست جدید با رابطه یک به چند';
// $post->content='توضیحات مربوط به کانتنت در این قسمت قرار داده میشود';
// $user->posts()->save($post);

//  });

//  Route::get('/read',function(){

//     $user=\App\User::find(1);
//     foreach($user->posts as $post){

//         echo $post->title;
//         echo "</br>";
//     }
//  });
//  Route::get('/update',function(){


// $user=\App\User::find(1);
// $user->posts()->whereId(1)->update(['title'=>'crud update','content'=>'update content']);
//  }); 

//  Route::get('/delete',function(){

//    $user=\App\User::find(1);
//    $user->posts()->whereId(10)->delete();

//  });

 //CRUD many to many relationship

//  Route::get('create',function(){

// $user=\App\User::find(1);

// $role=new \App\Role();

// $role->name='نویسنده';

// $user->roles()->save($role);
//  }); 
//  Route::get('read',function(){


// $user=\App\User::find(1);

// foreach($user->roles as $role ){

//     echo $role->name;
//     echo "</br>";
// } 

//  }); 
//  Route::get('update',function(){

//     $user=\App\User::find(1);
//     if($user->has('roles')){

//         foreach($user->roles as $role){
          
//             if($role->name=='نویسنده'){

//                 $role->name='Author';
//                 $role->save();
//             }
//         }
         
//     }

//  });
//  Route::get('delete',function(){

// $user=\App\User::find(1);
// foreach($user->roles as $role){

// if($role->name=='Author'){

//     $role->delete();
// }
// }

//  });
//  Route::get('detach',function(){

// $user=\App\User::find(1);
// $user->roles()->detach();

//  });
//  Route::get('attach',function(){


// $user=\App\User::find(1);
// $user->roles()->attach(1);

//  });
// Route::get('sync',function(){

//     $user = \App\User::find(1);
//     $user->roles()->sync([1]);

// }); 

//CRUD Polymorphic relationships 

// Route::get('/create',function(){


// $video=\App\Video::find(1);

// $video->tags()->create(['name'=>'morph video']);

// });  

// Route::get('read',function(){

// $video=\App\Video::find(1);
// foreach($video->tags as  $tag){


// echo $tag->name;
// echo "</br>";

// }

// }); 

// Route::get('update',function(){


//     $video = \App\Video::find(1);
//     $tag=$video->tags;
//     $newtags=$tag->where('id',3)->first();
//     $newtags->name='تگ جدید';
//     $newtags->save();


// }); 
// Route::get('delete',function(){

// $video=\App\Video::find(1);

// $tag=$video->tags;
// $deletedtags=$tag->where('id',3)->first();

// $deletedtags->delete();

// });

// Route::get('detach',function(){

// $video=\App\Video::find(1);
// $video->tags()->detach();

// });
// Route::get('attach', function () {

//     $video = \App\Video::find(1);
//     $video->tags()->attach(1);
// });
// Route::get('sync', function () {

//     $video = \App\Video::find(1);
//     $video->tags()->sync([1,2]);
// });

//Form Routes 

Route::resource('/posts','PostsController');


Auth::routes(['verify'=>true]);

Route::get('/home' ,'HomeController@index')->middleware(['auth','verified'])->name('home');

Route::middleware(['auth','verified'])->group(function(){

    Route::get('/', 'HomeController@index');
});
//Route::get('/',function(){

// $user=Auth::user();
// //$user=Auth::check();
// $id=Auth::id();
// //dd($user) ;
// if(Auth::check()){

//     echo "Hello"." ".$user->name;
//     echo "</br>";
//     echo "User ID"." ".$id;
// }else{

//     return redirect()->to('home');

//}
//$email='saba@ex.com';
//$password='12345678';

//$auth=Auth::attempt(['email'=>$email,'password',$password]);

//$user=Auth::once(['email'=>$email,'password'=>$password]);
// $main_user=\App\User::findOrFail(2);

// $user = Auth::login($main_user);
// dd($user); 

//$user=Auth::loginUsingId(3);
//dd($user);
//change to commit github

//});

//middleware
Route::get('/admin',function(){

//dd($user=Auth::user());
$user=\App\User::find(4);
($user_role=$user->roles);
$user_role=$user->isAdmin('مدیر');
//dd($user_role);*/


//dd($user=Auth::check());
 
($user=Auth::check());

if($user='true'){

    ($user=Auth::user());
   ($admin=$user->roles());
  // dd ($user->isAdmin()); //return false

}

    //(($user = Auth::user()->id));
 
echo 'hello to admin page';

})->middleware('isAdmin:مدیر');