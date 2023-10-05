<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Screentime;	      // Eloquent ORM
use App\Models\Seat;
use App\Models\Cinema;
use Illuminate\Support\Facades\DB;


class CinemaController extends Controller
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
        return view('admin/cinema.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['tmp'] = $this->qstring();

        return view( 'admin/cinema.create', $data );
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

        $row= new Cinema;

        $this->save_row($request, $row); 
        return redirect("cinema");
    
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
        $data['row'] = Cinema::find( $id );                      // Eloquent ORM
        return view('admin/cinema.show', $data );    
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

        $data['row'] = Cinema::find( $id );	// 자료 찾기
        return view('admin/cinema.edit', $data );	// 수정화면 호출    
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
        
        $row= Cinema::find($id);

        $this->save_row($request, $row); 

        $tmp = $this->qstring();
        return redirect("cinema".$tmp);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cinema::find( $id )->delete();
        $tmp = $this->qstring();
        return redirect('cinema'.$tmp);
    }

    public function getlist($text1)
    {
        $result = Cinema::where('name', 'like', '%' . $text1 . '%')->orderby('name','asc')->paginate(5)->appends( ['text1' => $text1] );
        return $result;
    
    }

    public function save_row(Request $request, $row)
    {

        $request->validate( [
            'name' => 'required|max:20',
            'address' => 'required|max:50',
            'tel' => 'required|max:11',
        ] ,
        [
            'name.required' => '영화관 이름은 필수입력입니다.',
            'name.max' => '20자 이내입니다.',
            'address.required' => '영화관 주소는 필수입력입니다.',
            'address.max' => '50자 이내입니다.',
            'tel.required' => '영화관 전화번호는 필수입력입니다.',
            'tel.max' => '11자 이내입니다.',
        ] );
        
            
        $row->name = $request->input("name");
        $row->address = $request->input("address");
        $row->tel = $request->input("tel");
        $row->save();			// 저장
        return  redirect('cinema');		// 목록화면으로 이동
    }

    public function qstring()
    {
    $text1 = request("text1") ? request('text1') : "";
    $page = request('page') ? request('page') : "1";
    $tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
    return $tmp;
    }

}