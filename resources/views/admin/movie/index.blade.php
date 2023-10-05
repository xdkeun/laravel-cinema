@extends('admin/main')
@section('content')
<script>
    function find_text()
    {
      form1.action="{{ route('movie.index') }}{{ $tmp }} ";
      form1.submit();
    }
</script>


        <br>
        <div class="alert mycolor1 ykmargin" role="alert">영화</div>
        <form name="form1" method="get" action="" class="ykmargin">
            <div class="row">
            <div class="col-3" align="left">
            <div class="input-group input-group-sm">
                <span class="input-group-text">영화제목</span>
                <input type="text" name="text1" value="{{ $text1 }}" class="form-control" 
                        onkeydown="if (event.keyCode == 13) { find_text(); }">
                            <button class="btn btn-sm mycolor1" type="button" onClick="find_text();">검색</button>
                        </div>
                    </div>
                    <div class="col-9" align="right">
                        <a href="{{ route('movie.create') }}{{ $tmp }}" class="btn btn-sm mycolor1">추가</a>

                    </div>
                </div>
            </form>

        <table class="type08">
            <thead>
                <tr>
                    <th scope="cols" width="10%">번호</th>
                    <th scope="cols" width="12%">장르</th>
                    <th scope="cols" width="12%">제목</th>
                    <th scope="cols" width="12%">감독</th>
                    <th scope="cols" width="12%">배우</th>
                    <th scope="cols" width="12%">평점</th>
                    <th scope="cols" width="12%">개봉일</th>
                    <th scope="cols" width="12%">줄거리</th>
                </tr>
            </thead>
            <tbody>
        @foreach ( $list  as  $row )
        <?
        ?>
            <tr>
                <th scope="row">{{ $row->id}}</th>
                <td>{{$row->genre}}</td>
                <td><a href="{{ route('movie.show', $row->id) }}{{ $tmp }}">{{$row->title}}</a></td>
                <td>{{$row->name}}</td>
                <td>{{$row->actor}}</td>
                <td>{{$row->grade}}</td>
                <td>{{$row->playdate}}</td>
                <td>{{$row->summary}}</td>
            </tr>
            @endforeach
            
            </tbody>
            </table>
            
        <div class="row">
            <div class="col">
                {{ $list->links('mypagination') }}
            </div>
        </div>

        


@endsection()