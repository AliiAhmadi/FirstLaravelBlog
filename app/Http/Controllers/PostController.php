<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();


        return view("post.index", compact("posts"));

        // Post::create([
        //     "title" => "Title " . random_int(1, 1200),
        //     "content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam esse cum doloremque natus, reprehenderit aliquid qui, ratione vel, illo modi omnis debitis animi optio aspernatur quasi! Maiores eum tempora cum iusto consectetur eveniet sapiente ex velit odit, assumenda amet ratione perspiciatis nesciunt fugiat voluptates a. Laboriosam reiciendis laborum, illo molestiae maxime odit mollitia, praesentium facere esse est itaque, commodi iure! Modi, placeat quidem molestias vitae perspiciatis facere numquam delectus, aperiam omnis maxime ut amet ex. Ducimus, mollitia. Quas deleniti excepturi fugiat officia fuga. Possimus quidem cum minima cupiditate eius error atque quis fugiat, rem delectus tenetur incidunt velit, non, praesentium dolorum ut eligendi officia adipisci omnis inventore reiciendis commodi nisi illo. Itaque quia dolorem voluptatibus tempore at. Autem, quasi vero, dolore dicta nihil dolorem laboriosam eaque laudantium eligendi aut eum animi cumque magnam, cum qui. Aut, tempora placeat porro sed qui recusandae repudiandae quis quidem maxime, minima nobis aliquam soluta assumenda? Ipsam iusto quidem totam. Nihil ex neque illo, sequi molestias asperiores. Similique voluptatem facere autem iure beatae assumenda totam quo mollitia. Obcaecati officiis necessitatibus esse veniam animi rerum tempore, iusto nemo ad error dolorem sed consectetur dolorum suscipit corrupti, asperiores doloremque tenetur ducimus eos id maxime cupiditate minima! Quaerat, labore est reprehenderit ipsa nobis asperiores alias nam delectus sequi aspernatur debitis eos dolorum libero molestiae doloremque illo, perspiciatis voluptate, a similique maiores iure consequatur. Necessitatibus unde dolor obcaecati repellendus odio aperiam pariatur iste quo, quas doloremque magni amet ipsa, sapiente aliquid cupiditate mollitia culpa ab illum tempore voluptatem labore fugit distinctio. Eveniet laborum officia quae reprehenderit vel earum autem quod suscipit, magni harum in reiciendis libero a nulla eaque provident quia repudiandae consequatur aut animi praesentium. Optio nisi corrupti dignissimos rem, laborum est porro ab at necessitatibus temporibus similique totam maiores quisquam, voluptates nemo! Eius nesciunt cupiditate, veritatis fuga tenetur doloremque, non quam excepturi rerum esse ad id, eveniet debitis odit corporis commodi reiciendis! Nemo natus molestiae dolores provident eveniet, suscipit veniam atque modi quibusdam rerum impedit ipsum accusantium soluta dolor porro odit, perferendis explicabo qui, magni animi repudiandae quae placeat id! Nisi eum doloribus molestias autem facilis quisquam veniam nam? Quaerat est error placeat dolore sequi ipsa dolores provident, cupiditate minima porro nisi vel, natus rem eaque numquam odit recusandae soluta, dolor laborum sit dicta in nobis a libero! Harum illo itaque laboriosam enim aliquid debitis rerum rem vitae aperiam. Quisquam reprehenderit nulla quae magni autem saepe voluptatem."
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("post.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd("hello from post");
        Post::create($request->all());

        return redirect()->route("post.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::find($id);

        if (!$post) {
            abort(404);
        }

        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);

        if (!$post) {
            abort(404);
        }
        return view("post.edit", compact("post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id); // Retrieve the post from the database by ID

        $post->title = $request->title;

        $post->content = $request->content;

        $post->save();

        return redirect()->route("post.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);

        if (!$post) {
            abort(404);
        }

        $post->delete();

        return redirect()->route("post.index");
    }
}
