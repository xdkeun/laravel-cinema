@extends('admin/main')
@section('content')

<div class="alert mycolor1" role="alert">상품 등록</div>
        <form name="form1" method="post" action="{{ route('product.store') }}{{ $tmp }}" enctype="multipart/form-data">
		@csrf
		
            <table class="table table-bordered table-sm mymargin5">

                <tr>
                    <td width="20%" class="mycolor2">번호</td>
                    <td width="80%" align="left"></td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font>상품명
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="name" class="form-control form-control-sm" size="20" maxlength="20"
                                value="{{ old('name') }}">
                        </div>
						@error('name') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font>가격
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="price" class="form-control form-control-sm" size="20" maxlength="20"
                                value="{{ old('price') }}">
                        </div>
						@error('price') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        사진
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="file" name="pic" class="form-control form-control-sm" size="20" maxlength="20"
                                value="asdasd">
                        </div>
                    </td>
                </tr>


            </table>
            <div align="center">
				  <input type="submit" value="저장" class="btn btn-sm mycolor1"> &nbsp;
                <input type="button" value="이전화면으로" class="btn btn-sm mycolor1" onclick="history.back();">
            </div>
        </form>

@endsection()