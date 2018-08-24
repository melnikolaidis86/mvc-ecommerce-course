<?php
/**
 * User: meletisnikolaidis
 * Date: 20-Aug-18
 * Time: 9:05 PM
 */

namespace App\Controllers\Admin;


use App\Classes\CSRSFToken;
use App\Classes\Request;
use App\Classes\ValidateRequest;
use App\Models\Category;

class ProductCategoryController
{
    public function show()
    {
        $categories = Category::all();

        return view('admin/products/categories', compact('categories'));
    }

    /**
     * @return null
     * @throws \Exception
     */
    public function store()
    {
        if(Request::has('post')){
            $request = Request::get('post');

            if(CSRSFToken::verifyCSRFToken($request->token)){
                $rules = [
                  'name' => ['required' => true, 'maxLength' => 5, 'string' => true, 'unique' => 'categories']
                ];

                $validate = new ValidateRequest();
                $validate->abide($_POST, $rules);

                if($validate->hasError()){
                    var_dump($validate->getErrorMessages());
                    exit;
                }
                //process form data
                Category::create([
                   'name' => $request->name,
                    'slug' => slug($request->name)
                ]);
                $categories = Category::all();
                $message = 'Category Created';
                return view('admin/products/categories', compact('categories', 'message'));
            }
            throw new \Exception('Token');
        }

        return null;
    }
}