<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index', [
        "title"     => "Laravel | Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title"     => "Laravel | About"
    ]);
});

Route::get('/news', function () {
    $news_post = [
        [
            "title"         => "Judul berita pertama",
            "title_lain"    => "judul-berita-pertama",
            "penulis"       => "Mr. Basuki"
        ],
        [
            "title"         => "Judul berita kedua",
            "title_lain"    => "judul-berita-kedua",
            "penulis"       => "Mr. Andhi"
        ]
    ];
    return view('news', [
        "title"     => "Laravel | News",
        "post"      => $news_post
    ]);
});

Route::get('news/{title_lain}', function ($title_lain) {
    $news_post = [
        [
            "title"         => "Judul berita pertama",
            "title_lain"    => "judul-berita-pertama",
            "penulis"       => "Mr. Basuki",
            "body"          => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque suscipit unde quam, porro voluptates beatae maxime reprehenderit laborum architecto, voluptate dicta adipisci molestias neque accusamus quis voluptas culpa odit quas exercitationem! Quas quasi perferendis error exercitationem odio aperiam, nesciunt distinctio sed deserunt reiciendis id provident omnis harum autem quos. Id quidem minus impedit. Porro asperiores cum natus magnam consequuntur corrupti. Consectetur labore mollitia aliquid ratione temporibus! Repellat expedita odio omnis!"
        ],
        [
            "title"         => "Judul berita kedua",
            "title_lain"    => "judul-berita-kedua",
            "penulis"       => "Mr. Andhi",
            "body"          => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis et modi provident iste non saepe illo, commodi adipisci quas dicta explicabo obcaecati corporis suscipit quod, neque rem. Harum aliquam adipisci, ut molestiae eos veritatis sed repudiandae officia, maiores odit recusandae. Commodi hic culpa alias! Pariatur provident harum labore repudiandae? Ex dolorem quidem fuga nobis cumque non, quibusdam magni praesentium culpa harum perspiciatis quae excepturi aut inventore reiciendis ut sed saepe. Voluptatum nemo id voluptate vitae quis corporis, deserunt ab mollitia a laboriosam aliquam quia at cupiditate optio, quod quo officia maiores, provident quaerat architecto saepe. Et reiciendis repudiandae cupiditate esse."
        ]
    ];
    $new_post = [];
    foreach($news_post as $post){
        if($post["title_lain"] === $title_lain){
            $new_post = $post;
        }
    }
    return view('post',[
        "title"     => "Single post",
        "post"      => $new_post
    ]);
});
