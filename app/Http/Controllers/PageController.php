<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    # Auth
    public function dashboard()
    {
        return view('pages.auth.dashboard');
    }

    # Public
    public function welcome()
    {
        return view('pages.public.landing-page');
    }

    public function charts()
    {
        return view('pages.public.charts');
    }

    public function books(Request $request)
    {
        $products = Product::where('status', 1)->paginate(16);
        $categories = DB::table('categories')->pluck('name', 'id');
        $subcategories = DB::table('sub_categories')->pluck('name', 'id');

        if ($request) {
            $products = Product::where('status', '=', '1')
                        ->where([
                            ['name', 'LIKE', '%'.$request->get('q').'%'],
                            $request->get('category_id') ? ['category_id', $request->get('category_id')] : ['category_id', 'LIKE', '%%'],
                            $request->get('subcategory_id') ? ['subcategory_id', $request->get('subcategory_id')] : ['subcategory_id', 'LIKE', '%%'],
                        ])->paginate(16);
            $request->flash();
        }

        return view('pages.public.books', [
            'products' => $products,
            'categories' => $categories,
            'subcategories' => $subcategories,
        ]);
    }


}
