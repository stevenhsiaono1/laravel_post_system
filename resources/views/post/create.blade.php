@extends("layout.main")

@section("content")
    <div class="col-sm-8 blog-main">
        <form action="/posts" method="POST">
        <!-- Laravel提供更簡潔方法:  -->
        {{csrf_field()}}
            <!--  <input type="hidden" name="_token" value="{{csrf_token()}}"/>    hidden把此隱藏    這裡是用來避免csrf跨站式攻擊 -->

            <div class="form-group">
                <label>標題</label>
                <input name="title" type="text" class="form-control" placeholder="這裏是標題">
            </div>
            <div class="form-group">
                <label>內容</label>
                <textarea id="content" style="height:400px;max-height:500px;" name="content" class="form-control" placeholder="這裏是內容"></textarea>
            </div>


            <!-- 因為在store的controller那邊已經做了表單驗證，這邊要顯示錯誤訊息:  -->
            <!-- @if (count($errors) > 0)
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
            @endif -->
            <!-- 因為錯誤驗證和編輯那邊已經有重複 所以抽出去吧!! -->
            @include('layout.error')


            <button type="submit" class="btn btn-default">提交</button>
        </form>
        <br>

    </div><!-- /.blog-main -->
@endsection