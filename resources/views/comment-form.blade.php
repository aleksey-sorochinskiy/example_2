<div class="comment-form">
    <form action="{{$route}}" method="post" class="">
        @csrf
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input class="form-control" type="text" id="title" value="" name="title">
        </div>
        <div class="form-group">
            <label for="content">Комментарий</label>
            <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
            <input type="hidden" name="relation"  value="{{$relation}}">
            <input type="hidden" name="{{$comment_type}}" value="{{$object_id}}">
        </div>
        <button class="btn btn-primary" type="submit">Отправить</button>
    </form>
</div>