use App\Models\Post;

public function index()
{
    $posts = Post::with('author')->latest()->get(); // Ensure you have a Post model and relationships
    return view('blog.index', compact('posts'));
}
