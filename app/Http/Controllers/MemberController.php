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


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		if (session()->get("rank")!=1) return redirect("adm1n");
        $data['tmp'] = $this->qstring();

        $text1 = request('text1');		// text1값 알아냄 
        $data['text1'] = $text1;
        $data['list'] = $this->getlist($text1);
        return view('admin/member.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['tmp'] = $this->qstring();

        return view( 'admin/member.create', $data );
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

        $row= new Member;

        $this->save_row($request, $row); 
        return redirect("member");
    
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
        $data['row'] = Member::find( $id );                      // Eloquent ORM
        return view('admin/member.show', $data );    
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

        $data['row'] = Member::find( $id );	// 자료 찾기
        return view('admin/member.edit', $data );	// 수정화면 호출    
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
        
        $row= Member::find($id);

        $this->save_row($request, $row); 

        $tmp = $this->qstring();
        return redirect("member".$tmp);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Member::find( $id )->delete();
        $tmp = $this->qstring();
        return redirect('member'.$tmp);
    }

    public function getlist($text1)
    {
        $result = Member::where('name', 'like', '%' . $text1 . '%')->orderby('name','asc')->paginate(5)->appends( ['text1' => $text1] );
        return $result;
    
    }

    public function save_row(Request $request, $row)
    {

        // $request->validate( [
        //     'uid' => 'required|max:20',
        //     'pwd' => 'required|max:20',
        //     'name' => 'required|max:20',
        // ] ,
        // [
        //     'uid.required'  => '아이디는 필수입력입니다.',
        //     'pwd.required' => '암호는 필수입력입니다.',
        //     'name.required' => '이름은 필수입력입니다.',
        //     'uid.max'  => '20자 이내입니다.',
        //     'pwd.max' => '20자 이내입니다.',
        //     'name.max' => '20자 이내입니다.',
        // ] );
        
            

        // $row = Member::find( $id ); // 자료 찾기
        $row->member_id = $request->input("member_id");	// 값 입력 
        $row->password = $request->input("password");
        $row->name = $request->input("name");
        $row->rank = $request->input("rank");
        $row->save();			// 저장
        return  redirect('member');		// 목록화면으로 이동
    }

    public function qstring()
    {
    $text1 = request("text1") ? request('text1') : "";
    $page = request('page') ? request('page') : "1";
    $tmp = $text1 ? "?text1=$text1&page=$page" : "?page=$page";
    return $tmp;
    }

}