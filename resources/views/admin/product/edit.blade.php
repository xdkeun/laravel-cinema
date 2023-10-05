@extends('admin/main')
@section('content')

<div class="alert mycolor1" role="alert">상품</div>
<form name="form1" method="post" action="{{ route( 'product.update', $row->id ) }}{{ $tmp }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
		
            <table class="table table-bordered table-sm mymargin5">

                <tr>
                    <td width="20%" class="mycolor2"> 번호</td>
                    <td width="80%" align="left">{{ $row->id }}</td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font> 상품이름
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
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font> 가격
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="price" class="form-control form-control-sm" size="20" maxlength="20"
                                value="{{ $row->price }}">
                        </div>
						@error('price') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                <td width="20%" class="mycolor2"><font color="red">*</font>사진</td>
                <td width="80%" align="left">
                <input type="file" name="pic" class="form-control form-control-sm" size="20" maxlength="20" value="">
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
            <div align="center" >
				  <input type="submit" value="저장" class="btn btn-sm mycolor1"> &nbsp;
                <input type="button" value="이전화면으로" class="btn btn-sm mycolor1" onclick="history.back();">
            </div>
        </form>

@endsection()