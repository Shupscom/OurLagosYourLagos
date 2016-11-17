<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use Thujohn\Twitter\Facades\Twitter;

use Illuminate\Support\Facades\Route;
Route::group(['middleware'=>['web']],function() {
    Route::get('/',function(){
        return view('frontend.index');


    });
    Route::get('/index',function(){
        return view('frontend.index');
    })->name('index');

    Route::get('/Blog',[
        'uses' => 'PostController@getBlogDashboard',
         'as' =>'blog'
    ]);
    Route::get('/Single{post_id},{post_title}',[
        'uses' => 'PostController@getBlogSingle',
        'as' => 'single'
    ]);
    Route::get('/Personal{blogger_id}{post_author}',[
       'uses' => 'PostController@getSingleBlogger',
        'as' => 'single.blogger'
    ]);
    Route::get('/Register',function(){
        return view('frontend.blog.register');
    })->name('register');

    Route::get('/Blogger/Verify/{confirmation_code}',[
       'uses' => 'BloggerController@getConfirmation',
        'as' => 'confirmation'
    ]);
    Route::get('/PlacesLagos',[
        'uses' => 'PlaceController@getFrontendPlaces',
        'as' => 'places'
    ]);
    Route::post('/Contacts',[
        'uses' =>'ContactController@postContact',
        'as' => 'contacts'
    ]);

    Route::get('/I-witness',[
        'uses' => 'WitnessController@getWitnessFrontend',
        'as' => 'witness'
    ]);
    Route::get('/I-witnessSingle{witness_id}',[
        'uses' => 'WitnessController@getWitnesssSingleFrontend',
        'as' =>  'witness.single'
    ]);

    Route::post('/I-witness',[
       'uses' =>'WitnessController@postWitnessFrontend',
        'as' => 'witness'
    ]);

    Route::get('/PlacesLagos/filter',[
        'uses' => 'PlaceController@getSearch',
        'as' => 'search'
    ]);
    Route::get('/OperationalActivities',function(){
        return view('frontend.about.operations');
    })->name('operations');
    Route::get('/AkinwunmiAmbode',function(){
        return view('frontend.about.akin');
    })->name('akin');
    Route::get('/Groups',function(){
        return view('frontend.about.group');
    })->name('group');
    Route::get('/Contacts',function(){
        return view('frontend.contact');
    })->name('contact');
    Route::get('/News',[
        'uses' => 'NewsController@getNewsFrontend',
        'as' => 'news'
    ]);
    Route::post('/BloggersNew',[
        'uses' => 'BloggerController@postNewBlogger',
        'as' =>'blogger.new'
    ]);

    Route::get('/Projects',function(){
        return view ('frontend.projects');
    })->name('projects');
    Route::get('/LagosPhotos',function(){
        return view ('frontend.multi.photo');
    })->name('photo');
    Route::get('/LagosVideos',function(){
        return view ('frontend.multi.video');
    })->name('video');


    // These are the blogger routes
    /*
     * These are the blogger routes
     */
    Route::get('/Blogger/login',function(){
        return view('frontend.blog.blogger.blogin');
    })->name('blogger.login');
    Route::post('/Blogger/login',[
        'uses' => 'BloggerController@postBloggerLogin',
        'as' => 'blogger.login'
    ]);
    Route::group(['middleware' => 'bloggers',
        'prefix' => '/Blogger'],
        function(){
        Route::get('/Index',function(){
            return view('frontend.blog.blogger.bindex');
        })->name('blogger.index');
        Route::get('/Logout',[
            'uses' => 'BloggerController@getBloggerLogout',
            'as' =>'blogger.logout'
        ]);
         Route::get('/CreateNew',[
           'uses' => 'BloggerController@getBloggerCreate',
             'as' => 'blogger.create'
         ]);
         Route::get('/Modify{post_id}/{post_title}',[
             'uses' => 'BloggerController@getBloggerModify',
             'as' => 'blogger.modify'
         ]);
            Route::get('/Delete{post_id}/{post_title}',[
                'uses' => 'BloggerController@getBloggerPostDelete',
                'as' => 'blogger.delete'
            ]);
          Route::get('/Posts',[
              'uses' => 'BloggerController@getBloggerPosts',
              'as' => 'blogger.posts'
          ]);
            Route::post('CreateNew',[
                'uses' => 'BloggerController@postBloggerCreate',
                'as' => 'blogger.create'
            ]);
            Route::post('/Update',[
                'uses' => 'BloggerController@postBloggerModify',
                'as' => 'blogger.update'
            ]);


    });


// These are the admin routes....

    Route::get('/Admin/Login',[
        'uses'=>'AdminController@getLogin',
        'as'=>'admin.login'
    ]);
    Route::post('Admin/Login',[
        'uses' => 'AdminController@postLogin',
        'as' => 'admin.login'
    ]);
    Route::group([
        'prefix' => '/Admin',
        'middleware' => 'auth'
        ],function(){
    Route::get('/Index',[
       'uses' =>'AdminController@getAdminDashboard',
        'as' => 'admin.index'
    ]);
        Route::get('/Logout',[
            'uses' =>'AdminController@getLogout',
            'as' => 'admin.logout'
        ]);
        Route::get('/Posts',[
            'uses' => 'PostController@getPostDashboard',
            'as' =>'post.index'
        ]);
        Route::get('/CreatePost',[
            'uses' => 'PostController@getCreatePost',
            'as' =>'create'
        ]);
        Route::post('/CreatePost',[
            'uses' => 'PostController@postCreatePost',
            'as' =>'create'
        ]);
        Route::get('/EditPost{post_id}/{post_title}',[
            'uses' => 'PostController@getModifyPost',
            'as' =>'modify'
        ]);
        Route::get('/DeletePost{post_id}/{post_title}',[
            'uses' => 'PostController@getDeletePost',
            'as' =>'delete.post'
        ]);
        Route::post('/EditPost',[
            'uses' => 'PostController@postModifyPost',
            'as' => 'modify.post'
        ]);
     Route::get('/Places',[
           'uses' => 'PlaceController@getAdminPlace',
            'as' => 'admin.place'
        ]);
        Route::get('/CreatePlaces',[
            'uses' => 'PlaceController@getCreatePlace',
            'as' => 'place.new'
        ]);
        Route::get('/EditPlace{place_id}/{place_placename}',[
            'uses' => 'PlaceController@getModifyPlace',
            'as' =>'modify.place'
        ]);
        Route::get('/Delete{place_id}/{place_placename}',[
            'uses' => 'PlaceController@getDeletePlace',
            'as' => 'delete.place'
        ]);
        Route::post('/CreatePlaces',[
            'uses' => 'PlaceController@postCreatePlace',
            'as' => 'place.create'
        ]);
        Route::get('/ContactMessages',[
            'uses' => 'ContactController@getMessages',
            'as' => 'messages'
        ]);
        Route::get('/DeleteContact{contact_id}',[
            'uses' => 'ContactController@getDeleteMessage',
            'as' => 'delete.message'
        ]);
        Route::post('/EditPlaces',[
           'uses' => 'PlaceController@postEditPlace',
            'as' => 'place.edit'
        ]);
        Route::get('/Bloggers',[
            'uses'=>'BloggerController@getAdminBlogger',
            'as' => 'blogger.admin'
        ]);
        Route::get('/BloggersDelete{blogger_id}{blogger_name}',[
            'uses' => 'BloggerController@getBloggerDelete',
            'as' => 'blogger.delete'
        ]);
        Route::get('/I-witness',[
            'uses' => 'WitnessController@getAdminWitness',
            'as' => 'admin.witness'
        ]);
        Route::get('/I-witness{witness_id}',[
            'uses' => 'WitnessController@getVerify',
            'as' =>'witness.verify'
        ]);
        Route::get('/I-witness/Delete{witness_id}',[
             'uses' => 'WitnessController@getWitnessDelete',
              'as' => 'witness.delete'
            ]);
    // News route for admin
        Route::get('/News',[
            'uses' =>'NewsController@getAdminNews',
            'as'=>'admin.news'
        ]);
        Route::get('/News/Create',[
            'uses'=> 'NewsController@getAdminNewsCreate',
           'as'=> 'admin.news.create'
        ]);
        Route::get('/News/Edit{news_id}',[
            'uses'=> 'NewsController@getAdminNewsEdit',
            'as' => 'admin.news.edit'
        ]);

        Route::post('/News/Create',[
            'uses' => 'NewsController@postNewsCreate',
            'as' => 'news.create'
        ]);

        Route::post('/News/Edit',[
            'uses' => 'NewsController@postNewsEdit',
            'as' => 'news.edit'
        ]);

        Route::get('/News/Delete{news_id}',[
            'uses' => 'NewsController@getNewsDelete',
            'as' => 'news.delete'
        ]);


    });
});

