<?php

namespace App\Models;

class Post
{
    private static $posting = [
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

    public static function all()
    {
        return collect(self::$posting);
    }

    public static function find($title_lain)
    {
        $postingan = static::all();
        return $postingan->firstWhere('title_lain', $title_lain);
    }
}
