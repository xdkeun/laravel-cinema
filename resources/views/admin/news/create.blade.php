@extends('admin/main')
@section('content')

<div class="alert mycolor1" role="alert">뉴스 등록</div>
        <form name="form1" method="post" action="{{ route('news.store') }}{{ $tmp }}" enctype="multipart/form-data">
		@csrf
		
            <table class="table table-bordered table-sm mymargin5">

                <tr>
                    <td width="20%" class="mycolor2">번호</td>
                    <td width="80%" align="left"></td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font>뉴스 제목
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="title" class="form-control form-control-sm" size="20" maxlength="200"
                                value="{{ old('title') }}">
                        </div>
						@error('title') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font>작성자
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="writer" class="form-control form-control-sm" size="20" maxlength="200"
                                value="{{ old('writer') }}">
                        </div>
						@error('writer') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font>뉴스 내용
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="content" class="form-control form-control-sm" size="20" maxlength="200"
                                value="{{ old('content') }}">
                        </div>
						@error('content') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font>발행일
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="date" class="form-control form-control-sm" size="20" maxlength="200"
                                value="{{ old('date') }}">
                        </div>
						@error('date') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        사진
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="file" name="pic" class="form-control form-control-sm" size="20" maxlength="200"
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