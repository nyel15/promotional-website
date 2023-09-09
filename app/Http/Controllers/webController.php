<?php

namespace App\Http\Controllers;
use App\Comments;
use App\TouristSpots;
use App\Delicacies;
use App\Products;

class webController extends Controller
{
    function homepage(){
        return view('homepage');
    }
    function overview(){
        return view('overview');
    }

    function viewTrivia(){
        return view('trivia');
    }

    function viewPopulation(){
        return view('population');
    }

    function viewAbout(){
        return view('about');
    }

    function viewComments(){
        return view('contacts', [
            'comments' => Comments::latest()->get()
        ]);
    }

    function store(){
        request()->validate([
            'name' => 'required',
            'comment' => 'required',
        ]);

        $comment = new Comments();
        $comment->name = request('name');
        $comment->comment = request('comment');

        $comment->save();
        return redirect(route('contacts'));
    }

    function viewTouristInfo(){
        $touristInfo = TouristSpots::all('title', 'description', 'image');
        return view('touristInformation', [
            'touristSpots' => $touristInfo
        ]);
    }
    
    function viewDelicacies(){
        return view('delicacies', [
            'delicacies' => Delicacies::all('title', 'description', 'image')
        ]);
    }

    function viewProducts(){
        return view('products', [
            'products' => Products::all('title', 'description', 'image')
        ]);
    }

    public function destroy($id){
        $comment = Comments::findOrFail($id);

        $comment->delete();
        return redirect()->route('contacts')->with('success', 'delete success!');
    }
}

    