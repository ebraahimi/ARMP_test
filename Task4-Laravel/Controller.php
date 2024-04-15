public function createPost($author_id){
//retrieving data 
    $title = $_GET['title'];
    $categoryId = $_GET['CategoryId'];

//check existing blog post to prevebt repetativity
    $existingPosts = Blogpost::all();
    foreach($existingPosts as $existPost){
        if($existPost ->author->id == $author_id &&
        $existPost->title == $title){
            echo "this title already exist!";
            exit;
        }
    }

//equavalentizing the values
    $post = new BlogPost;
    $post->title = $title;
    $post->author_id = $author_id;
    $post -> status = 'published';
    $post->save();


//insert to DB
    DB::table('post_categories')->([
        'post_id' => $post->id,
        'category_id' => $category
        ]);

    return "Post Created successfully!";
}