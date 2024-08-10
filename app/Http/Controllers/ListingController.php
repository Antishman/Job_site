<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //all
    public function index(){
        
        return view('listings',[
            'listings'=>Listing::latest()->filter(request(['tag',
            'search']))->get()
        ]);

    }
    //single
    public function show(Listing $listing){
        return view('listing', [
            'listing'=>$listing
          ]);
    }

//show create form
    public function create(){
        return view('create');  
    }

// store listing data
public function store(Request $request){
    
    $formFields= $request->validate([
        'title'=>'required',
        'company'=>['required', Rule::unique('listings',
        'company')],
        'location'=>'required',
        'website'=>'required',
        'email'=>['required','email'],
        'tags'=>'required',
        'description'=>'required'
    ]);
    
    if($request->hasFile('logo')){
        $stormFields['logo']= $request->file('logo')-> store('logos',
        'public');
    }  
    
    
    $listing = new Listing();
    $listing->fill($formFields);
    $listing->save();   
    
    
    
    return redirect('/')->with('message','Listing created sucessfully!');
    
}

    public function edit(Listing $listing){
        return view('edit',['listing'=>$listing]);
    }
   

}
