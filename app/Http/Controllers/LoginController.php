<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;


class LoginController extends Controller
{
	public function check(){
		$member_id = request('member_id');
		$password = request('password');
		
		$row = Member::where('member_id','=',$member_id)->
					   where('password','=',$password)->first();
		if ($row){
			session()->put('member_id', $row->member_id);
			session()->put('rank', $row->rank);
		}
		return view('admin/main');
	}
	
	public function logout(){
		session()->forget('member_id');
		session()->forget('rank');
		
		return view('admin/main');
	}
 }