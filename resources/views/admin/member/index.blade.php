@extends('admin/main')
@section('content')
<script>
    function find_text()
    {
      form1.action="{{ route('member.index') }}{{ $tmp }} ";
      form1.submit();
    }
</script>



        <br>
        <div class="alert mycolor1 ykmargin" role="alert">사용자</div>
        <form name="form1" method="get" action="" class="ykmargin">
            <div class="row">
            <div class="col-3" align="left">
            <div class="input-group input-group-sm">
                <span class="input-group-text">이름</span>
                <input type="text" name="text1" value="{{ $text1 }}" class="form-control" 
                        onkeydown="if (event.keyCode == 13) { find_text(); }">
                            <button class="btn btn-sm mycolor1" type="button" onClick="find_text();">검색</button>
                        </div>
                    </div>
                    <div class="col-9" align="right">
                        <a href="{{ route('member.create') }}{{ $tmp }}" class="btn btn-sm mycolor1">추가</a>

                    </div>
                </div>
            </form>

        <table class="type08">
            <thead>
                <tr>
                    <th scope="cols" width="20%">번호</th>
                    <th scope="cols" width="20%">아이디</th>
                    <th scope="cols" width="20%">비밀번호</th>
                    <th scope="cols" width="20%">이름</th>
                    <th scope="cols" width="20%">등급</th>
                </tr>
            </thead>
            <tbody>
        @foreach ( $list  as  $row )
        <?
        $rank = $row->rank==0 ? '직원' : '관리자';    // 0->직원, 1->관리자 
        ?>
            <tr>
                <th scope="row">{{ $row->id}}</th>
                <td>{{$row->member_id}}</td>
                <td>{{$row->password}}</td>
                <td><a href="{{ route('member.show', $row->id) }}{{ $tmp }}">{{$row->name}}</a></td>
                <td>{{ $rank }}</td>
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