@extends('admin/main')
@section('content')

<div class="alert mycolor1" role="alert">이벤트 수정</div>
<form name="form1" method="post" action="{{ route( 'event.update', $row->id ) }}{{ $tmp }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
		
            <table class="table table-bordered table-sm mymargin5">

                <tr>
                    <td width="20%" class="mycolor2"> 번호</td>
                    <td width="80%" align="left">{{ $row->id }}</td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font> 이벤트 제목
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="title" class="form-control form-control-sm" size="20" maxlength="200"
                                value="{{ $row->title }}">
                        </div>
						@error('title') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font> 주최사
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="writer" class="form-control form-control-sm" size="20" maxlength="200"
                                value="{{ $row->writer }}">
                        </div>
						@error('writer') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font> 이벤트 내용
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="content" class="form-control form-control-sm" size="20" maxlength="200"
                                value="{{ $row->content }}">
                        </div>
						@error('content') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font> 이벤트 기한
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="date" class="form-control form-control-sm" size="20" maxlength="200"
                                value="{{ $row->date }}">
                        </div>
						@error('date') {{ $message }} @enderror
                    </td>
                </tr>

                <tr>
                <td width="20%" class="mycolor2"><font color="red">*</font>사진</td>
                <td width="80%" align="left">
                <input type="file" name="pic" class="form-control form-control-sm" size="20" maxlength="200" value="">
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