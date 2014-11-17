<?php
 
class BlogController extends BaseController {

	protected $layout = 'base';
 
    public function index()
    {
        // get the posts from the database by asking the Active Record for "all"
        $posts = Post::all();
 
        // and create a view which we return - note dot syntax to go into folder
        return View::make('blog.index', array('posts' => $posts));
    }
}