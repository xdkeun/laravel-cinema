@extends('admin/main')
@section('content')

<div class="alert mycolor1" role="alert">영화 등록</div>
<script>
	$(function(){
		$("#playdate").datetimepicker({
			locale:"ko",
			format:"YYYY-MM-DD",
			defaultDate: moment()
	});
	});
</script>
        <form name="form1" method="post" action="{{ route('movie.store') }}{{ $tmp }}" enctype="multipart/form-data">
		@csrf
		
            <table class="table table-bordered table-sm mymargin5">

                <tr>
                    <td width="20%" class="mycolor2">번호</td>
                    <td width="80%" align="left"></td>
                </tr>

                <tr>
                    <td width="20%" class="mycolor2"><font color="red">*</font>장르</td>
                    <td width="80%" align="left">
                        <div class="d-inline-flex">
                        <select name="genre_id" class="form-control form-control-sm">
                    <option value="" selected>선택하세요.</option>
                    @foreach ($list as $row)
                        @if ( $row->id == old('genre_id') )
                            <option value="{{ $row->id }}" selected>{{ $row->genre }}</option>
                        @else
                            <option value="{{ $row->id }}">{{ $row->genre }}</option>
                        @endif
                    @endforeach
                            </select>
                    </div>
                    @error('genre_id') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font>제목
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
                    <td width="20%" class="mycolor2"><font color="red">*</font>감독</td>
                    <td width="80%" align="left">
                        <div class="d-inline-flex">
                        <select name="director_id" class="form-control form-control-sm">
                    <option value="" selected>선택하세요.</option>
                    @foreach ($list1 as $row)
                        @if ( $row->id == old('director_id') )
                            <option value="{{ $row->id }}" selected>{{ $row->name }}</option>
                        @else
                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @endif
                    @endforeach
                            </select>
                    </div>
                    @error('director_id') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font>배우
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="actor" class="form-control form-control-sm" size="20" maxlength="20"
                                value="{{ old('actor') }}">
                        </div>
						@error('actor') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font>평점
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="grade" class="form-control form-control-sm" size="20" maxlength="20"
                                value="{{ old('grade') }}">
                        </div>
						@error('grade') {{ $message }} @enderror
                    </td>
                </tr>

                

                <tr>
                    <td class="mycolor2" width="20%">
                        포스터
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="file" name="pic" class="form-control form-control-sm" size="20" maxlength="20"
                                value="">
                        </div>
                    </td>
                </tr>

                <tr>
                    <td width="20%" class="mycolor2"> <font color="red">*</font>개봉일</td>
                    <td width="80%" align="left">
							<div class="d-inline-flex">
							<div class="input-group input-group-sm-date" id="playdate">
							<input type="text" name="playdate" size="20" value="{{ old('playdate') }}"
								class="form-control from-control-sm">
							<div class="input-group-text">
							<div class="input-group-addon">
								<i class="fa-solid fa-calendar-days"></i>
								</div>
								</div>
								</div>
								@error('playdate') {{ $message }} @enderror
					</td>
                </tr>


                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font>줄거리
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="summary" class="form-control form-control-sm" size="20" maxlength="200"
                                value="{{ old('summary') }}">
                        </div>
						@error('summary') {{ $message }} @enderror
                    </td>
                </tr>

            </table>
            <div align="center">
				  <input type="submit" value="저장" class="btn btn-sm mycolor1"> &nbsp;
                <input type="button" value="이전화면으로" class="btn btn-sm mycolor1" onclick="history.back();">
            </div>
        </form>

@endsection()