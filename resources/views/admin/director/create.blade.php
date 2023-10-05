@extends('admin/main')
@section('content')

<div class="alert mycolor1" role="alert">감독 등록</div>
        <form name="form1" method="post" action="{{ route('director.store') }}{{ $tmp }}">
		@csrf
		
            <table class="table table-bordered table-sm mymargin5">

                <tr>
                    <td width="20%" class="mycolor2">번호</td>
                    <td width="80%" align="left"></td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font>감독 이름
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
                        <font color="red">*</font>감독 나이
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="age" class="form-control form-control-sm" size="20" maxlength="20"
                                value="{{ old('age') }}">
                        </div>
						@error('age') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font>국적
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="country" class="form-control form-control-sm" size="20" maxlength="20"
                                value="{{ old('country') }}">
                        </div>
						@error('country') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font>대표 작품
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="masterpiece" class="form-control form-control-sm" size="20" maxlength="20"
                                value="{{ old('masterpiece') }}">
                        </div>
						@error('masterpiece') {{ $message }} @enderror
                    </td>
                </tr>



            </table>
            <div align="center">
				  <input type="submit" value="저장" class="btn btn-sm mycolor1"> &nbsp;
                <input type="button" value="이전화면으로" class="btn btn-sm mycolor1" onclick="history.back();">
            </div>
        </form>

@endsection()