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
use App\Models\News;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Image;



class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tmp'] = $this->qstring();
        $text1 = request('text1');		// text1값 알아냄 
        $data['text1'] = $text1;
        $data['list'] = $this->getlist($text1);
        return view('admin/news.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['tmp'] = $this->qstring();

        return view( 'admin/news.create', $data );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tmp = $this->qstring();

        $row= new News;

        $this->save_row($request, $row); 
        return redirect("news");
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['tmp'] = $this->qstring();
        $data['row'] = News::find( $id );                      // Eloquent ORM
        return view('admin/news.show', $data );    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['tmp'] = $this->qstring();

        $data['row'] = News::find( $id );	// 자료 찾기
        return view('admin/news.edit', $data );	// 수정화면 호출    
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
        
        $row= News::find($id);

        $this->save_row($request, $row); 

        $tmp = $this->qstring();
        return redirect("news".$tmp);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::find( $id )->delete();
        $tmp = $this->qstring();
        return redirect('news'.$tmp);
    }

    public function getlist($text1)
    {
        $result = News::where('title', 'like', '%' . $text1 . '%')->orderby('title','desc')->paginate(5)->appends( ['text1' => $text1] );
        return $result;
    
    }

    public function save_row(Request $request, $row)
    {   
            
        // $row = Member::find( $id ); // 자료 찾기
        $row->title = $request->input("title");	// 값 입력
        $row->writer = $request->input("writer");
        $row->content = $request->input("content");
        $row->date = $request->input("date");
        $row->pic = $request->input("pic");

        if ($request->hasFile('pic'))	         // upload할 파일이 있는 경우
        {
            $pic = $request->file('pic');
            $pic_name = $pic->getClientOriginalName();             // 파일이름
            $pic->storeAs('public/product_img', $pic_name);        // 파일저장
			
			$img = Image::make($pic)
				->resize(null, 200, function($constraint) { $constraint->aspectRatio();})
				->save('storage/product_img/'. $pic_name);
            $row->pic = $pic_name;                     // pic 필드에 파일이름 저장
        }
        
        $row->save();			// 저장
        return  redirect('news');		// 목록화면으로 이동
    }

    public function qstring()
    {
    $text1 = request("text1") ? request('text1') : "";
    $page = request('page') ? request('page') : "1";
    $tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
    return $tmp;
    }

}