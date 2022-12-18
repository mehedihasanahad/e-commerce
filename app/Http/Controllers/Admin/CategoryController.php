<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ResponseController;
use App\Models\ProductCategories;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = $request->query('items') ? $request->query('items') : 10;
        $categories = ProductCategories::paginate($items);
        ResponseController::apiResponse(200, 'All categories', 'Success', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules['name'] = 'required';
        $rules['description'] = 'required';
        $rules['visibility'] = 'required';
        $rules['seoMetaDescription'] = 'required';
        $rules['seoPageTitle'] = 'required';
        $rules['parentCategory'] = 'required';

        $message['name.required'] = 'Name is required';
        $message['description.required'] = 'Description is required';
        $message['visibility.required'] = 'Visibility is required';
        $message['seoMetaDescription.required'] = 'Meta description is required';
        $message['seoPageTitle.required'] = 'Page Title is required';
        $message['parentCategory.required'] = 'Parent category is required';

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);
        }

        $productCategory = new ProductCategories();
        $productCategory->name = $request->name;
        $productCategory->description = $request->description;
        $productCategory->visibility = $request->visibility;
        $productCategory->seoMetaDescription = $request->seoMetaDescription;
        $productCategory->seoPageTitle = $request->seoPageTitle;
        $productCategory->parentCategory = $request->parentCategory;
        if($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/uploads/category/'), $imageName);
            $productCategory->image = $imageName;
        }
        $productCategory->status = 1;
        $productCategory->save();

        if ($productCategory) {
            ResponseController::apiResponse(200, 'Category stored Successfullly', 'Success', []);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductCategories::find($id)->delete();
        ResponseController::apiResponse(200, 'Category deleted', 'Success');
    }
}
