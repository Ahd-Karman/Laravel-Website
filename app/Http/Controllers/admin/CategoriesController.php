<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    //

    public function index(){
        $categories=Category::orderBy('id','desc')->get();
        return view('admin.categories.list')
        ->with('categories',$categories)
        ;

    }
    public function create(){
        return view('admin.categories.create');

    }
    public function edit($cat_id){
        $category=Category::find($cat_id);
        return view('admin.categories.edit')
        ->with('category',$category);

    }
    public function toggle($cat_id){

        $cat=Category::find($cat_id);
        $cat->is_active*=-1;
        /*if($cat->is_active==0)
        $cat->is_active=1;
        else 
        $cat->is_active=0;*/
        if($cat->save())
        return back()->with(['success'=>'data updated successful']);
        return back()->with(['error'=>'can not update data']);

    }
    public function store(Request $request){
        Validator::validate($request->all(),[
            'name_ar'=>['required','min:5','max:20'],
            'name_en'=>['required','min:5','max:20']


        ],[
            'name_ar.required'=>'this field is required',
            'name_ar.min'=>'can not be less than 5 letters', 
            'name_ar.max'=>'can not be greater than 20 letters', 
            'name_en.required'=>'this field is required',
            'name_en.min'=>'can not be less than 5 letters', 
            'name_en.max'=>'can not be greater than 20 letters',

           
        ]);

        $new_cat=new Category();
        $new_cat->name_ar=$request->name_ar;
        $new_cat->name_en=$request->name_en;
        $new_cat->is_active=$request->is_active;
        $new_cat->image=$request->hasFile('image')?$this->uploadFile($request->file('image')):"default_category.png";
        if($new_cat->save())
        return redirect()->route('list_categories')->with(['success'=>'data inserted successful']);
        return redirect()->back()->with(['error'=>'can not add data ']);

        

    }
    public function update(Request $request,$cat_id){
        $cat=Category::find($cat_id);
        $cat->name_ar=$request->name_ar;
        $cat->name_en=$request->name_en;
        $cat->is_active=$request->is_active;
        if($request->hasFile('image'))
        $cat->image=$this->uploadFile($request->file('image'));
        if($cat->save())
        return redirect()->route('list_categories')->with(['success'=>'data updated successful']);
        return redirect()->back()->with(['error'=>'can not update data ']);



    }


    

    public function uploadFile($file){
        $dest=public_path()."/images/";

        //$file = $request->file('image');
        $filename= time()."_".$file->getClientOriginalName();
        $file->move($dest,$filename);
        return $filename;


    }

}
