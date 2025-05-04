<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        // $products = Products::all();
        // return view('Products.index', compact('products'));

        // $categories= Category::all();
        // $query = Products::query();

        $query = Products::with('category'); // ✅ جلب كل منتج مع التصنيف المرتبط به

        // {
//     Collection {
//         0 => Product {
//             id: 1,
//             name: "Smartphone",
//             price: 699.99,
//             category_id: 3,
//             description: "Latest smartphone...",
//             created_at: "2025-05-01 16:00:00",
//             updated_at: "2025-05-01 16:00:00",
//             category: Category {
//                 id: 3,
//                 name: "Electronics",
//                 created_at: "2025-04-01 12:00:00",
//                 updated_at: "2025-04-01 12:00:00"
//             }
//         },
//         1 => Product {
//             id: 2,
//             name: "Laptop",
//             price: 999.99,
//             category_id: 3,
//             description: "Powerful laptop...",
//             category: Category {
//                 id: 3,
//                 name: "Electronics",
//                 ...
//             }
//         }
//         // وهكذا...
//     }
// }



        if (($request->has('search') && $request->search != '')) {
            $query->where('name', 'LIKE', "%{$request->search}%");
        }
        if (($request->has('price') && $request->price != '')) {
            $query->where('price', '=', $request->price);
        }

        if (($request->has('category') && $request->category != '')) {
            // $categSearch = Category::where('name','like',$request->category)->first();
            // if($categSearch){
            //   $query->where($query->category->name,'like',value: $request->category);
            $query->whereHas('category', function ($query) use ($request) {
                $query->where('name', '=', $request->category);
            });
            // }else{
            // $query->whereRaw('0 = 1');
            // }
        }

        $query->orderBy('category_id', 'asc');
        $products = $query->get();

        return view('Products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validate = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if($request->hasFile('image')){
            $path = $request->file('image')->store('products','public');
            $validate['image']=$path;
        }


        Products::create($validate);
        // Products::create([
        //     'name' => $request->name,
        //     'price' => $request->price,
        //     'category_id' => $request->category_id,
        //     'description' => $request->description,
        // ]);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $product)
    {
        //
        // $category = Category::find($product->category_id);
        return view('Products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        //
        $categories = Category::all();
        return view('products.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $product)
    {
        //
        $validate = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'description' => 'required',

        ]);



        if($request->hasFile('image')){
            $path = $request->file('image')->store('products','public');
            $validate['image']=$path;


            if ($product->image && file_exists(storage_path('app/public/' . $product->image))) {
                unlink(storage_path('app/public/' . $product->image));
            }
        }
        $product->update($validate);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
    {
        //
        if($product->image&&file_exists(storage_path('app/public'.$product->image))){
            unlink(storage_path('app/public'.$product->im))
        }
        $product->delete();
        return redirect()->route('products.index');
    }
}
