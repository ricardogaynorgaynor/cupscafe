<?php

namespace App\Http\Controllers;

use App\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
class AdminController extends Controller
{
   public function __construct()
    {
        //$this->middleware('guest:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.adminmenu',
            [
                "menus" => Items::orderBy("created_at", "DESC")->get()
            ]
        );
    }

    public function showForm(){
        return view("admin.additem", []);
    }

    public function create(Request $request){
        //dd($request->toArray());
        $this->validate($request, [
            "emp_name" => "required|max:255|min:3",
            "quantity" => "required|numeric",
            "cost" => "required|numeric",
            "name" => "required|max:255|min:3",
            "digital_id" => "required",
            "digital_photo" => "image",
            "category" => "required",
            "disability_audio" => "required"
        ]);
        // past
        $item = new Items();
        $item->name = $request->name;
        $item->quantity = $request->quantity;
        $item->emp_name = $request->emp_name;
        $item->cost = $request->cost;
        $item->digital_id = $request->digital_id;
        $item->disability_photo = $request->digital_photo;
        $item->disability_audio = $request->disability_audio;
        $item->type = $request->category;

        if($item->disability_photo != null && !empty($item->disability_photo)){
            $fileName = time().$item->disability_photo->getClientOriginalName();
            $extension = $item->disability_photo->getClientOriginalExtension();
            if($this->imageFileTypeValidator(strtolower($extension)) == false){
                Session::flash('error', 'Please upload an image. File you\'re trying to upload is not supported');
                return redirect()->back();
            }else{
                $item->disability_photo->move(Items::ITEM_DIRECTORY, $fileName);
                $item->disability_photo = $fileName;
            }
        }

        if($item->disability_audio != null && !empty($item->disability_audio)){
            $fileName = time().$item->disability_audio->getClientOriginalName();
            $extension = $item->disability_audio->getClientOriginalExtension();
            if($this->imageFileTypeValidator(strtolower($extension)) == false){
                Session::flash('error', 'Please upload an image. File you\'re trying to upload is not supported');
                return redirect()->back();
            }else{
                $item->disability_audio->move(Items::ITEM_DIRECTORY, $fileName);
                $item->disability_audio = $fileName;
            }
        }

        if($item->save()){
            Session::flash("success", "Record was created successfully");
        }else{
            Session::flash(["error", "Fail to save record. Please try again"]);
        }
        return Redirect::back();

    }


    public function imageFileTypeValidator($extention){
        $supported_formats = array(
            'gif',
            'jpg',
            'jpeg',
            'png'
        );

        if(in_array($extention, $supported_formats)){
            return true;
        }
        return false;

    }

    public function show($id){
        $item = Items::find($id);
        if($item != null && !empty($item)){
            //item found
            return view("admin.item", ["item" => $item]);
        }else{
            // redirect to not found page
        }
    }



}
