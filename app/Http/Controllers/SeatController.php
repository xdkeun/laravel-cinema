<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Screentime;
use App\Models\Seat;
use Illuminate\Support\Facades\DB;


class SeatController extends Controller
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
        return view('admin/seat.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['tmp'] = $this->qstring();

        return view( 'admin/seat.create', $data );
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

        $row= new Seat;

        $this->save_row($request, $row); 
        return redirect("seat");
    
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
        $data['row'] = Seat::find( $id );                      // Eloquent ORM
        return view('admin/seat.show', $data );    
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

        $data['row'] = Seat::find( $id );	// 자료 찾기
        return view('admin/seat.edit', $data );	// 수정화면 호출    
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
        
        $row= Seat::find($id);

        $this->save_row($request, $row); 

        $tmp = $this->qstring();
        return redirect("seat".$tmp);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Seat::find( $id )->delete();
        $tmp = $this->qstring();
        return redirect('seat'.$tmp);
    }

    public function getlist($text1)
    {
        $result = Seat::where('seat', 'like', '%' . $text1 . '%')->orderby('seat','asc')->paginate(5)->appends( ['text1' => $text1] );
        return $result;
    
    }

    public function save_row(Request $request, $row)
    {

        $request->validate( [
            'seat' => 'required|max:10',
        ] ,
        [
            'seat.required' => '좌석은 필수입력입니다.',
            'seat.max' => '10자 이내입니다.',
        ] );
        
            
        $row->seat = $request->input("seat");
        $row->save();			// 저장
        return  redirect('seat');		// 목록화면으로 이동
    }

    public function qstring()
    {
    $text1 = request("text1") ? request('text1') : "";
    $page = request('page') ? request('page') : "1";
    $tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
    return $tmp;
    }

}