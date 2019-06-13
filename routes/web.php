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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', function () {
    return view('pages.news');
    // pakoriģējam rindiņas, http://localhost/news atver lapu ar tekstu Hello world
    // return 'Hello world';
    // tas, ko es šeit atgriežu būs tas, kas parādās šajā ceļā
    // return '<div>Hello world</div>';
});

Route::get('/singleblog', function () {
    return view('pages.singleblog');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/malotava', function () {
    return view('pages.veikalsSabine');
});


Route::get('/blog', function () {

    // ar vienu rindiņu var dabūt visus ierakstus no datubāzes
    // $allPosts = App\BlogPost::get();

    // dd($allPosts);
    // dd($allPosts[0]->title, $allPosts[0]->body);


    $allPosts = App\BlogPost::all();
    // $singlePost = App\BlogPost::find(1);

    // $masivu = [
    //     'viens',
    //     'divi',
    // ];

    // dd($masivu, $request);

        return view('pages.blog', [
        'posts' => $allPosts,
        ]);
});

// Dinamiskais ceļš (dynamic root): eksistē ceļš, kuram sākums ir blog un kurš beidzas ar jebko.
// Saņemam dinamiski no datubāzes konkrēto blog ierakstu atkarībā no likna.
// Tad saņemto ieliekam mainīgajā ar nosaukumu 'post'.
Route::get('/blog/{id}', function ($id) {

    $singlePost = App\BlogPost::find($id);

    // dd($singlePost->id, $singlePost->title);

    return view('pages.singleblog', [
        'post' => $singlePost,
        ]);
});


Route::get('/contact', function () {
    return view('pages.contact');
});


Route::any('/submitform', function () {
    // dd('?');
    // dd($_GET);
    // dd( Request::get('yourname'));
    // dd( Request::post('yourname'));

    // var piešķirt defaulto vērtību, ja vērtība nav norādīta
    $name   = Request::get('yourname', null);
    $email  = Request::get('youremail', '');
    $msg    = Request::get('yourmessage', null);

    // saglabās tikai tad, ja e-pasts būs e-pasts
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            } else {  

                      }
    // saglabāt datubāzē
    $message = new App\Ieraksts;
    $message->vards = $name;
    $message->epasts = $email;
    $message->komentars = $msg;
    $message->save();

    // mail::send 


    return redirect('/contact');
    // izpildījās, datubāzē saglabājās un atgriezās
});



// Uztaisīsim, lai datubāzē var saglabāt datus no frontenda (creatot jaunu bloga ierakstu)
Route::any('/newblogpost', function () {
    return view('pages.new-blog');
});

Route::any('/submit-newblogpost', function () {
    $title   = Request::post('title', null);
    $img_url = Request::post('img_url', null);
    $body    = Request::post('body', null);
    $excerpt = Request::post('excerpt', null);
    $slug    = Request::post('slug', null);
    $tags    = Request::post('tags', null);

    // uztaisīšu jaunu posta modeli, jauns posts būs tā kā ieraksts, bet vēl nesaglabājās un uz datubāzi neaiziet, tas ir kā atvērt jaunu excel failu
    $post = new App\BlogPost;

    $post->title = $title;
    $post->img_url = $img_url;
    $post->body = $body;
    $post->excerpt = $excerpt;
    $post->slug = $slug;
    $post->tags = $tags;

    // šajā brīdī saglabājās datubāzē, izveidojas jauns ieraksts
    $post->save();

    return redirect('/blog');
});
