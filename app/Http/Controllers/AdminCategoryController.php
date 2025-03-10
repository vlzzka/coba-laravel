<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.categories.index', [
            'categories' => Category::all() 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'image|file|max:1024'
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => $request->slug
            // 'image' => 'image|file|max:1024'
        ]);

        // if($request->file('image')){
        //     $validatedData['image'] = $request->file('image')->store('post-images'); 
        // }
        

        // return redirect('/dashboard/categories')->with('success', 'New Category has been Added!');
        return response()->json(['message' => 'Kategori berhasil disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        return view('dashboard.categories.edit');

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        $rules = [
            'name' => 'required|max:255',
            'slug' => 'required|unique:posts'
        ];

        $validatedData = $request->validate($rules);

        Category::where('id', $category->id)->update($validatedData);

        return redirect('/dashboard/categories')->with('success', 'Post has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect('/dashboard/categories')->with('success', 'Category and associated posts has been Deleted!');
        // $category->delete();
        // return redirect()->route('categories.index')->with('success', 'Category has been Deleted!');
    }
}

// Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, minus tempora? 
// Inventore, architecto nostrum accusamus odit corrupti rerum in perspiciatis cum sapiente 
// repellendus sunt, numquam laborum exercitationem provident aperiam accusantium deserunt! 
// Doloremque impedit accusamus ducimus excepturi, nobis non quidem facilis minus dolorum molestias 
// perspiciatis doloribus dicta, voluptates incidunt quia magnam ea optio maxime atque magni aspernatur 
// ipsum sequi accusantium. Eaque architecto itaque tempora repellendus quia, iste repellat suscipit assumenda 
// odit deleniti. Quasi sapiente quae vel quos consequatur asperiores molestias, et architecto optio ex expedita 
// eum nobis exercitationem assumenda eaque, laborum reiciendis ut harum minima nisi ipsam eos fuga sit culpa. Esse 

// inventore ut porro labore quam velit, fuga ullam. Dolor rem cumque quasi officiis corrupti ut quod ducimus 
// deserunt consequuntur facilis recusandae exercitationem qui quam dignissimos odio voluptas excepturi unde 
// esse minima, ullam dicta sed aliquam, quidem amet. Autem, tempore aut excepturi aliquid veniam magnam ipsa 
// consequuntur sapiente dolorum deleniti quibusdam minus eos incidunt necessitatibus nam sit, quas vel! Nulla 
// animi recusandae sequi cumque iure possimus amet id commodi qui, architecto laborum ullam aliquam ipsam maiores 
// asperiores esse quae rem voluptas est quibusdam quisquam nostrum voluptatem? 
// Fugiat consequuntur voluptas ut numquam iusto a necessitatibus ratione incidunt ab, dolorem culpa sit.