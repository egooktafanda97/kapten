<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hit;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function show(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        if (!$post)
            abort(404);

        $hit = Hit::where(["page" => "/article/" . $slug,])
            ->where("ip_address", $request->ip())
            ->first();
        if (!$hit) {
            $post->hit++;
            $post->save();
        }

        $hitt = new Hit();
        $hitt->page = "/article/" . $slug;
        $hitt->ip_address = $request->ip();
        $hitt->save();

        $post->load(['user', 'categories', 'tags']);
        return view('blog.Singgle', compact('post'));
    }

    public function show_list(Request $request)
    {
        $post = Post::query()
            ->with("categories")
            ->with("tags")
            ->paginate(10);

        $hitt = new Hit();
        $hitt->page = "/article/";
        $hitt->ip_address = $request->ip();
        $hitt->save();
        $category = Category::all();
        $data = [
            "post" => $post,
            "category" => $category
        ];
        return view('blog.index', $data);
    }

    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'content' => 'required',
            'tags' => 'nullable',
            'category_ids' => 'required',
            'category_ids.*' => 'exists:category,id'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $categories = [];
        foreach (json_decode($request->category_ids, true) as $categoryId) {
            $category = Category::findOrFail($categoryId);
            $categories[] = $category->id;
        }
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->slug = \Str::slug($request->title);
        $post->published_at = $request->has('published_at') ? now() : null;
        $post->meta_descriptions = $request->meta_descriptions ?? "";
        $post->meta_keyword = $request->meta_keyword ?? "";
        $post->meta = $request->meta ?? "";
        $post->save();

        // jika ingin menggunakan attact harus di loop.
        // foreach ($categories as $category) {
        // $post->categories()->attach($categories);
        // }

        $post->categories()->sync($categories);

        if ($request->tags) {
            $post->tags()->sync(json_decode($request->tags, true));
        }


        return response()->json(['message' => 'Post berhasil ditambahkan dengan kategori'], 201);
    }
}
