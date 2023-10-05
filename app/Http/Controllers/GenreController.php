<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Screentime;	      // Eloquent ORM
use App\Models\Seat;
use App\Models\Cinema;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;


class GenreController extends Controller
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
        return view('admin/genre.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['tmp'] = $this->qstring();

        return view( 'admin/genre.create', $data );
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

        $row= new Genre;

        $this->save_row($request, $row); 
        return redirect("genre");
    
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
        $data['row'] = Genre::find( $id );                      // Eloquent ORM
        return view('admin/genre.show', $data );    
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

        $data['row'] = Genre::find( $id );	// 자료 찾기
        return view('admin/genre.edit', $data );	// 수정화면 호출    
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
        
        $row= Genre::find($id);

        $this->save_row($request, $row); 

        $tmp = $this->qstring();
        return redirect("genre".$tmp);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Genre::find( $id )->delete();
        $tmp = $this->qstring();
        return redirect('genre'.$tmp);
    }

    public function getlist($text1)
    {
        $result = Genre::where('genre', 'like', '%' . $text1 . '%')->orderby('genre','asc')->paginate(5)->appends( ['text1' => $text1] );
        return $result;
    
    }

    public function save_row(Request $request, $row)
    {

        $request->validate( [
            'genre' => 'required|max:15',
        ] ,
        [
            'genre.required' => '장르는 필수입력입니다.',
            'genre.max' => '15자 이내입니다.',
        ] );
        
            
        $row->genre = $request->input("genre");
        $row->save();			// 저장
        return  redirect('genre');		// 목록화면으로 이동
    }

    public function qstring()
    {
    $text1 = request("text1") ? request('text1') : "";
    $page = request('page') ? request('page') : "1";
    $tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
    return $tmp;
    }

}