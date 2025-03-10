<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Valezka Ghardia',
            'username' => 'viel',
            'email' => 'valezkaghardia@gmail.com',
            'password' => bcrypt('12345')
        ]);
        
        // User::create([
        //     'name' => 'Freya',
        //     'email' => 'freyamlbb@gmail.com',
        //     'password' => bcrypt('67890')
        // ]);

        User::factory(3)->create();
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'

        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'

        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'My Story',
            'slug' => 'my-story'
        ]);

        Category::create([
            'name' => 'Health and Lifestyle',
            'slug' => 'health-and-lifestyle'
        ]);

        Category::create([
            'name' => 'Horror',
            'slug' => 'horror'
        ]);

        Post::factory(20)->create();
        

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //     'body' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
        //                 Omnis pariatur hic assumenda est eius culpa, rerum quia. 
        //                 Laborum assumenda, excepturi maiores vitae, sint quam ducimus 
        //                 est error autem mollitia amet obcaecati reiciendis dolores rem ullam, 
        //                 ratione accusamus dolore temporibus itaque pariatur. Ipsum sed a, nemo 
        //                 distinctio minima, laboriosam sapiente nihil quia temporibus at velit 
        //                 possimus voluptate totam doloremque odio nostrum cupiditate commodi et in. 
        //                 Ad illum exercitationem itaque minus iusto vero recusandae, fuga odio impedit 
        //                 reiciendis praesentium optio ea culpa qui sint tenetur officia repudiandae. 
        //                 Laudantium optio placeat, vero dicta assumenda veritatis, eligendi, distinctio 
        //                 quibusdam a fugit explicabo dolorem sit.',
        //     'category_id' => 1,
        //     'user_id' => 1  

        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //     'body' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
        //                 Omnis pariatur hic assumenda est eius culpa, rerum quia. 
        //                 Laborum assumenda, excepturi maiores vitae, sint quam ducimus 
        //                 est error autem mollitia amet obcaecati reiciendis dolores rem ullam, 
        //                 ratione accusamus dolore temporibus itaque pariatur. Ipsum sed a, nemo 
        //                 distinctio minima, laboriosam sapiente nihil quia temporibus at velit 
        //                 possimus voluptate totam doloremque odio nostrum cupiditate commodi et in. 
        //                 Ad illum exercitationem itaque minus iusto vero recusandae, fuga odio impedit 
        //                 reiciendis praesentium optio ea culpa qui sint tenetur officia repudiandae. 
        //                 Laudantium optio placeat, vero dicta assumenda veritatis, eligendi, distinctio 
        //                 quibusdam a fugit explicabo dolorem sit.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //     'body' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
        //                 Omnis pariatur hic assumenda est eius culpa, rerum quia. 
        //                 Laborum assumenda, excepturi maiores vitae, sint quam ducimus 
        //                 est error autem mollitia amet obcaecati reiciendis dolores rem ullam, 
        //                 ratione accusamus dolore temporibus itaque pariatur. Ipsum sed a, nemo 
        //                 distinctio minima, laboriosam sapiente nihil quia temporibus at velit 
        //                 possimus voluptate totam doloremque odio nostrum cupiditate commodi et in. 
        //                 Ad illum exercitationem itaque minus iusto vero recusandae, fuga odio impedit 
        //                 reiciendis praesentium optio ea culpa qui sint tenetur officia repudiandae. 
        //                 Laudantium optio placeat, vero dicta assumenda veritatis, eligendi, distinctio 
        //                 quibusdam a fugit explicabo dolorem sit.',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //     'body' => ' Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
        //                 Omnis pariatur hic assumenda est eius culpa, rerum quia. 
        //                 Laborum assumenda, excepturi maiores vitae, sint quam ducimus 
        //                 est error autem mollitia amet obcaecati reiciendis dolores rem ullam, 
        //                 ratione accusamus dolore temporibus itaque pariatur. Ipsum sed a, nemo 
        //                 distinctio minima, laboriosam sapiente nihil quia temporibus at velit 
        //                 possimus voluptate totam doloremque odio nostrum cupiditate commodi et in. 
        //                 Ad illum exercitationem itaque minus iusto vero recusandae, fuga odio impedit 
        //                 reiciendis praesentium optio ea culpa qui sint tenetur officia repudiandae. 
        //                 Laudantium optio placeat, vero dicta assumenda veritatis, eligendi, distinctio 
        //                 quibusdam a fugit explicabo dolorem sit.',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);


    }
}
