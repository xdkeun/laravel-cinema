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
use Illuminate\Support\Facades\DB;
use Image;



class MovieController extends Controller
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
        return view('admin/movie.index', $data);
    }

 

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['tmp'] = $this->qstring();
		$data['list'] = $this->getlist_genre();
        $data['list1'] = $this->getlist_director();
        return view( 'admin/movie.create', $data );
    }

    function getlist_genre()
    {
        $result=Genre::orderby('genre')->get();
        return $result;
    }

    function getlist_director()
    {
        $result=Director::orderby('name')->get();
        return $result;
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

        $row = new Movie;

        $this->save_row($request, $row); 
        return redirect("movie");
    
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
        $data['row'] = Movie::
        join('genres', 'movies.genre_id', '=', 'genres.id')->
        join('directors','movies.director_id' ,'=', 'directors.id')->
            select('movies.*', 'genres.genre as genre', 'movies.*', 'genres.genre as genre','directors.name as name')->
            where('movies.id', '=', $id)->first();  

        return view('admin/movie.show', $data );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['list'] = $this->getlist_genre();
        $data['list1'] = $this->getlist_director();
        $data['tmp'] = $this->qstring();
        $data['row'] = Movie::find( $id );	// 자료 찾기
        return view('admin/movie.edit', $data );	// 수정화면 호출    
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
        
        $row= Movie::find($id);

        $this->save_row($request, $row); 

        $tmp = $this->qstring();
        return redirect("movie".$tmp);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movie::find( $id )->delete();
        $tmp = $this->qstring();
        return redirect('movie'.$tmp);
    }

    public function getlist($text1)
    {
        // $result =  Movie::
        // join('genres', 'movies.genre_id', '=', 'genres.id', 'directors','movies.director_id' ,'=', 'directors.id')->
        //     select('movies.*', 'genres.genre as genre', 'movies.*','directors.name as name')->
        //     orderby('movies.title','asc')->
        //     paginate(5)->appends(['text1' => $text1] );

    
        $result =  Movie::
        join('genres', 'movies.genre_id', '=', 'genres.id')->
            join('directors','movies.director_id' ,'=', 'directors.id')->
                select('movies.*', 'genres.genre as genre','directors.name as name')->
            orderby('movies.title','asc')->
            paginate(5)->appends(['text1' => $text1] );

     
			

        return $result;
    }

    public function save_row(Request $request, $row)
    {

        // $request->validate( [
        //     'genre_id' => 'required|numeric',
        //     'title' => 'required|max:40',
        //     'director_id' => 'required',

        // ] ,
        // [
        //     'genre_id.required' => '장르는 필수입력입니다.',
        //     'title.required'  => '제목은 필수입력입니다.',
        //     'title.max'  => '40자 이내입니다.',
        //     'director_id.required' => '키는 필수입력입니다.',
        // ] );
        
            
        // $row = Member::find( $id ); // 자료 찾기
		$row->genre_id = $request->input("genre_id");
        $row->title = $request->input("title");	// 값 입력 
        $row->director_id = $request->input("director_id");
        $row->actor = $request->input("actor");
        $row->grade = $request->input("grade");
		$row->pic = $request->input("pic");
		$row->playdate = $request->input("playdate");
        $row->summary = $request->input("summary");

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
        return redirect('movie');		// 목록화면으로 이동
    }

    public function qstring()
    {
    $text1 = request("text1") ? request('text1') : "";
    $page = request('page') ? request('page') : "1";
    $tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
    return $tmp;
    }

}