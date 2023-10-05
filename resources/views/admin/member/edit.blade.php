@extends('admin/main')
@section('content')

<div class="alert mycolor1" role="alert">사용자</div>
<form name="form1" method="post" action="{{ route( 'member.update', $row->id ) }}{{ $tmp }}">
        @csrf
        @method('PATCH')
		
            <table class="table table-bordered table-sm mymargin5">

                <tr>
                    <td width="20%" class="mycolor2"> 번호</td>
                    <td width="80%" align="left">{{ $row->id }}</td>
                </tr>

                <tr>
                    <td class="mycolor2">
                        <font color="red">*</font> 아이디
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="member_id" class="form-control form-control-sm" size="20" maxlength="20"
                                value="{{ $row->member_id }}">
                        </div>
						@error('member_id') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                    <td class="mycolor2">
                        <font color="red">*</font> 암호
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="password" class="form-control form-control-sm" size="20" maxlength="20"
                                value="{{ $row->password }}">
                        </div>
						@error('password') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font> 이름
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="name" class="form-control form-control-sm" size="20" maxlength="20"
                                value="{{ $row->name }}">
                        </div>
						@error('name') {{ $message }} @enderror
                    </td>
                </tr>

                

                <tr>
                    <td class="mycolor2">
                        <font color="red">*</font> 등급
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            @if($row->rank==0)
                            <input type="radio" name="rank" value="0" checked>&nbsp;직원&nbsp;&nbsp;
                            <input type="radio" name="rank" value="1">&nbsp;관리자
                            @else
                            <input type="radio" name="rank" value="0">&nbsp;직원&nbsp;&nbsp;
                            <input type="radio" name="rank" value="1" checked>&nbsp;관리자
                        @endif
                        </div>
                    </td>
                </tr>

            </table>
            <div align="center" >
				  <input type="submit" value="저장" class="btn btn-sm mycolor1"> &nbsp;
                <input type="button" value="이전화면으로" class="btn btn-sm mycolor1" onclick="history.back();">
            </div>
        </form>

@endsection()