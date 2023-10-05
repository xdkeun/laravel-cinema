<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Screentime;	      // Eloquent ORM
use App\Models\Seat;
use App\Models\Cinema;
use App\Models\Genre;
use App\Models\Director;
use Illuminate\Support\Facades\DB;


class DirectorController extends Controller
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
        return view('admin/director.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['tmp'] = $this->qstring();

        return view( 'admin/director.create', $data );
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

        $row= new Director;

        $this->save_row($request, $row); 
        return redirect("director");
    
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
        $data['row'] = Director::find( $id );                      // Eloquent ORM
        return view('admin/director.show', $data );    
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

        $data['row'] = Director::find( $id );	// 자료 찾기
        return view('admin/director.edit', $data );	// 수정화면 호출    
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
        
        $row= Director::find($id);

        $this->save_row($request, $row); 

        $tmp = $this->qstring();
        return redirect("director".$tmp);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Director::find( $id )->delete();
        $tmp = $this->qstring();
        return redirect('director'.$tmp);
    }

    public function getlist($text1)
    {
        $result = Director::where('name', 'like', '%' . $text1 . '%')->orderby('name','asc')->paginate(5)->appends( ['text1' => $text1] );
        return $result;
    
    }

    public function save_row(Request $request, $row)
    {

        $request->validate( [
            'name' => 'required|max:20',
            'age' => 'required',
            'country' => 'required',
            'masterpiece' => 'required|max:30',
        ] ,
        [
            'name.required' => '이름은 필수입력입니다.',
            'name.max' => '20자 이내입니다.',
            'age.required' => '나이는 필수입력입니다.',
            'country.required' => '국적은 필수입력입니다.',
            'masterpiece.required' => '대표작품은 필수입력입니다.',
            'masterpiece.max' => '30자 이내입니다.',
        ] );
        
            
        $row->name = $request->input("name");
        $row->age = $request->input("age");
        $row->country = $request->input("country");
        $row->masterpiece = $request->input("masterpiece");
        $row->save();			// 저장
        return  redirect('director');		// 목록화면으로 이동
    }

    public function qstring()
    {
    $text1 = request("text1") ? request('text1') : "";
    $page = request('page') ? request('page') : "1";
    $tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
    return $tmp;
    }

}