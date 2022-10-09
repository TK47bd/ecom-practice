<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function AllCategory()
    {
        return view('admin_control.category');
    }

    public function AddCategory(Request $Req)
    {
        $Data = new Category;
        $validated = Validator::make($Req->all(), [
            'categoryName' => 'required|unique:categories,Name|max:45',
        ]);

        if ($validated->passes()) {
            $Data->Name = $Req->categoryName;
            $Data->save();
            return redirect()->back()->with('Flag', 'Success');
        } else {
            return redirect()->back()->with('Flag', 'Failed');
        }
    }
}