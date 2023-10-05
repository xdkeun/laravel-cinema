@extends('admin/main')
@section('content')

<div class="alert mycolor1" role="alert">장르</div>
<form name="form1" method="post" action="{{ route( 'genre.update', $row->id ) }}{{ $tmp }}">
        @csrf
        @method('PATCH')
		
            <table class="table table-bordered table-sm mymargin5">

                <tr>
                    <td width="20%" class="mycolor2"> 번호</td>
                    <td width="80%" align="left">{{ $row->id }}</td>
                </tr>

                <tr>
                    <td class="mycolor2" width="20%">
                        <font color="red">*</font> 장르
                    </td>
                    <td align="left">
                        <div class="d-inline-flex">
                            <input type="text" name="genre" class="form-control form-control-sm" size="20" maxlength="20"
                                value="{{ $row->genre }}">
                        </div>
						@error('genre') {{ $message }} @enderror
                    </td>
                </tr>

            </table>
            <div align="center" >
				  <input type="submit" value="저장" class="btn btn-sm mycolor1"> &nbsp;
                <input type="button" value="이전화면으로" class="btn btn-sm mycolor1" onclick="history.back();">
            </div>
        </form>

@endsection()