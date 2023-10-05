@extends('admin/main')
@section('content')
<?

?>
        <br>
        <div class="alert mycolor1" role="alert">상품</div>


        <table class="table  table-bordered  table-sm  table-hover mymargin5">

            <tr>
                <td width="10%" class="mycolor2">번호</td>
                <td width="80%" align="left">{{$row->id}}</td>
            </tr>

            <tr>
                <td width="20%" class="mycolor2"><font color="red">*</font>상품이름</td>
                <td width="80%" align="left">{{$row->name}}</td>
            </tr>

            <tr>
                <td width="20%" class="mycolor2"><font color="red">*</font>가격</td>
                <td width="80%" align="left">{{$row->price}}</td>
            </tr>

            <tr>
                <td width="20%" class="mycolor2"><font color="red">*</font>사진</td>
                <td width="80%" align="left">

                    <b>파일이름</b> : <?=$row->pic ?> <br>

                    @if($row->pic)
                    <img src="{{ asset('storage/product_img/' . $row->pic) }}"
                            width="200" class="img-fluid img-thumbnail margin5">
                    @else
                        <img src=" " width="200" class="img-fluid img-thumbnail margin5">
                    @endif

                </td>
            </tr>

        </table>

        <div  align="center">

            <a href="{{ route( 'product.edit', $row->id ) }}{{ $tmp }}" class="btn btn-sm mycolor1">수정</a> &nbsp;

            <form method="post" action="{{ route('product.destroy', $row->id) }}{{ $tmp }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <!-- <a href="#" class="btn btn-sm mycolor1" onClick="return confirm('삭제할까요?');">삭제</a>&nbsp; -->
                <button type="submit" class="btn btn-sm mycolor1" onClick="return confirm('삭제할까요 ?');">삭제</button> &nbsp;
            </form>

            <input type="button" value="이전화면으로" class="btn btn-sm mycolor1" onclick="history.back();">
        </div>
@endsection()