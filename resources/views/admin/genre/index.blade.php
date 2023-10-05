@extends('admin/main')
@section('content')
<script>
    function find_text()
    {
      form1.action="{{ route('genre.index') }}{{ $tmp }} ";
      form1.submit();
    }
</script>


        <br>
        <div class="alert mycolor1 ykmargin" role="alert">장르</div>
        <form name="form1" method="get" action="" class="ykmargin">
            <div class="row">
            <div class="col-3" align="left">
            <div class="input-group input-group-sm">
                <span class="input-group-text">장르</span>
                <input type="text" name="text1" value="{{ $text1 }}" class="form-control" 
                        onkeydown="if (event.keyCode == 13) { find_text(); }">
                            <button class="btn btn-sm mycolor1" type="button" onClick="find_text();">검색</button>
                        </div>
                    </div>
                    <div class="col-9" align="right">
                        <a href="{{ route('genre.create') }}{{ $tmp }}" class="btn btn-sm mycolor1">추가</a>

                    </div>
                </div>
            </form>

        <table class="type08">
            <thead>
                <tr>
                    <th scope="cols" width="20%">번호</th>
                    <th scope="cols" width="80%">장르</th>
                </tr>
            </thead>
            <tbody>
        @foreach ( $list  as  $row )
        <?
        ?>
            <tr>
                <th scope="row">{{ $row->id}}</th>
                <td><a href="{{ route('genre.show', $row->id) }}{{ $tmp }}">{{$row->genre}}</a></td>
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