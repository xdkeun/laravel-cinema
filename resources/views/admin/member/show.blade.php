@extends('admin/main')
@section('content')
<?
        $rank = $row->rank==0 ? '직원' : '관리자';    // 0->직원, 1->관리자 

?>
        <br>
        <div class="alert mycolor1" role="alert">사용자</div>


        <table class="table  table-bordered  table-sm  table-hover mymargin5">

            <tr>
                <td width="10%" class="mycolor2">번호</td>
                <td width="80%" align="left">{{$row->id}}</td>
            </tr>

            <tr>
            <td width="20%" class="mycolor2"><font color="red">*</font>아이디</td>
                <td width="80%" align="left">{{$row->member_id}}</td>
            </tr>

            <tr>
            <td width="20%" class="mycolor2"><font color="red">*</font>암호</td>
                <td width="80%" align="left">{{$row->password}}</td>
            </tr>

            <tr>
                <td width="20%" class="mycolor2"><font color="red">*</font>이름</td>
                <td width="80%" align="left">{{$row->name}}</td>
            </tr>

            


            <tr>
                <td width="20%" class="mycolor2">등급</td>
                <td width="80%" align="left">{{$rank}}</td>
            </tr>
        </table>

        <div  align="center">

            <a href="{{ route( 'member.edit', $row->id ) }}{{ $tmp }}" class="btn btn-sm mycolor1">수정</a> &nbsp;

            <form method="post" action="{{ route('member.destroy', $row->id) }}{{ $tmp }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <!-- <a href="#" class="btn btn-sm mycolor1" onClick="return confirm('삭제할까요?');">삭제</a>&nbsp; -->
                <button type="submit" class="btn btn-sm mycolor1" onClick="return confirm('삭제할까요 ?');">삭제</button> &nbsp;
            </form>

            <input type="button" value="이전화면으로" class="btn btn-sm mycolor1" onclick="history.back();">
        </div>
@endsection()