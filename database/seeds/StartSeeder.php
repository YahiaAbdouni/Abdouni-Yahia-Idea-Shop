<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
use App\Category;

class StartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'Yahia',
            'email' => 'yabdouni3@gmail.com',
            'password' => Hash::make('yahia'),
            'role' => 1
        ]);

        $user2 = User::create([
            'name' => 'Alaa',
            'email' => 'alaa@gmail.com',
            'password' => Hash::make('dir brk'),
            'role' => 0
        ]);

        $user3 = User::create([
            'name' => 'Abdou',
            'email' => 'abdou@gmail.com',
            'password' => Hash::make('dir brk'),
            'role' => 0
        ]);

        $category1 = Category::create([
            'name' => 'Web development'
        ]);

        $category2 = Category::create([
            'name' => 'Software engeneering'
        ]);

        $category3 = Category::create([
            'name' => 'Hacking'
        ]);

        $post1 = Post::create([
            'title' => 'Title',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,',
            'user_id' => $user1->id,
            'category_id' => $category1->id
            // ,
            // 'image' => ' '
        ]);

        $post2 = Post::create([
            'title' => 'Title',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,',
            'user_id' => $user2->id,
            'category_id' => $category2->id
            // ,
            // 'image' => ' '
        ]);

        $post3 = Post::create([
            'title' => 'Title',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,',
            'user_id' => $user3->id,
            'category_id' => $category3->id
            // ,
            // 'image' => ' '
        ]);

        $post4 = Post::create([
            'title' => 'Title',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,',
            'user_id' => $user1->id,
            'category_id' => $category1->id
            // ,
            // 'image' => ' '
        ]);

        $post5 = Post::create([
            'title' => 'Title',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,',
            'user_id' => $user2->id,
            'category_id' => $category2->id
            // ,
            // 'image' => ' '
        ]);

        $post6 = Post::create([
            'title' => 'Title',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,',
            'user_id' => $user3->id,
            'category_id' => $category3->id
            // ,
            // 'image' => ' '
        ]);
    }

}
