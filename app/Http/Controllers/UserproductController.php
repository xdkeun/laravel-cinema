<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Screentime;	      // Eloquent ORM
use App\Models\Seat;
use App\Models\Cinema;
use App\Models\Genre;
use App\Models\Director;
use App\Models\Product;
use App\Models\Movie;
use App\Models\Member;	      // Eloquent ORM
use Illuminate\Support\Facades\DB;
use Image;



class UserproductController extends Controller
{

    

    public function index()
    {
        $data['tmp'] = $this->qstring();
        $text1 = request('text1');		// text1값 알아냄 
        $data['text1'] = $text1;
        $data['list'] = $this->getlist($text1);
        return view('userproduct.index', $data);
    }

    public function getlist($text1)
    {
        $result = Product::where('name', 'like', '%' . $text1 . '%')->orderby('name','asc')->paginate(5)->appends( ['text1' => $text1] );
        return $result;
    }


    public function qstring()
    {
    $text1 = request("text1") ? request('text1') : "";
    $page = request('page') ? request('page') : "1";
    $tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
    return $tmp;
    }

}