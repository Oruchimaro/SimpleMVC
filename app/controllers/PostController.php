<?php ini_set("memory_limit", "16M");

class PostController extends Controller
{
    public function index()
    {
        echo "post index";
    }

    public function store($title = '', $body = '')
    {
        $post = Post::create([
            'title' => $title,
            'body' => $body
        ]);

        $this->view('home/post-index', ['post' => $post]);
    }
}
