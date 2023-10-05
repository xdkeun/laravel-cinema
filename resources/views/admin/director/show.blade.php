@extends('admin/main')
@section('content')
<?

?>
        <br>
        <div class="alert mycolor1" role="alert">감독 정보</div>


        <table class="table  table-bordered  table-sm  table-hover mymargin5">

            <tr>
                <td width="10%" class="mycolor2">번호</td>
                <td width="80%" align="left">{{$row->id}}</td>
            </tr>

            <tr>
                <td width="20%" class="mycolor2"><font color="red">*</font>감독 이름</td>
                <td width="80%" align="left">{{$row->name}}</td>
            </tr>

            <tr>
                <td width="20%" class="mycolor2"><font color="red">*</font>감독 나이</td>
                <td width="80%" align="left">{{$row->age}}</td>
            </tr>

            <tr>
                <td width="20%" class="mycolor2"><font color="red">*</font>국적</td>
                <td width="80%" align="left">{{$row->country}}</td>
            </tr>

            <tr>
                <td width="20%" class="mycolor2"><font color="red">*</font>대표 작품</td>
                <td width="80%" align="left">{{$row->masterpiece}}</td>
            </tr>


        </table>

        <div  align="center">

            <a href="{{ route( 'director.edit', $row->id ) }}{{ $tmp }}" class="btn btn-sm mycolor1">수정</a> &nbsp;

            <form method="post" action="{{ route('director.destroy', $row->id) }}{{ $tmp }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <!-- <a href="#" class="btn btn-sm mycolor1" onClick="return confirm('삭제할까요?');">삭제</a>&nbsp; -->
                <button type="submit" class="btn btn-sm mycolor1" onClick="return confirm('삭제할까요 ?');">삭제</button> &nbsp;
            </form>

            <input type="button" value="이전화면으로" class="btn btn-sm mycolor1" onclick="history.back();">
        </div>
@endsection()