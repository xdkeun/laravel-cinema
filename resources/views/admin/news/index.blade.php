@extends('admin/main')
@section('content')
<script>
    function find_text()
    {
      form1.action="{{ route('news.index') }}{{ $tmp }} ";
      form1.submit();
    }
</script>


        <br>
        <div class="alert mycolor1 ykmargin" role="alert">뉴스</div>
        <form name="form1" method="get" action="" class="ykmargin">
            <div class="row">
            <div class="col-3" align="left">
            <div class="input-group input-group-sm">
                <span class="input-group-text">뉴스 제목</span>
                <input type="text" name="text1" value="{{ $text1 }}" class="form-control" 
                        onkeydown="if (event.keyCode == 13) { find_text(); }">
                            <button class="btn btn-sm mycolor1" type="button" onClick="find_text();">검색</button>
                        </div>
                    </div>
                    <div class="col-9" align="right">
                        <a href="{{ route('news.create') }}{{ $tmp }}" class="btn btn-sm mycolor1">추가</a>

                    </div>
                </div>
            </form>

        <table class="type08">
            <thead>
                <tr>
                    <th scope="cols" width="20%">번호</th>
                    <th scope="cols" width="20%">뉴스 제목</th>
                    <th scope="cols" width="20%">작성자</th>
                    <th scope="cols" width="20%">뉴스 내용</th>
                    <th scope="cols" width="20%">발행일</th>
                </tr>
            </thead>
            <tbody>
        @foreach ( $list  as  $row )
        <?
        ?>
            <tr>
                <th scope="row">{{ $row->id}}</th>
                <td><a href="{{ route('news.show', $row->id) }}{{ $tmp }}">{{$row->title}}</a></td>
                <td>{{$row->writer}}</td>
                <td>{{$row->content}}</td>
                <td>{{$row->date}}</td>
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