<div class="panel panel-default">
    <div class="panel-heading">导航</div>

    <div class="panel-body text-center">

        <ul class="nav nav-list">
            <li>
                <a href="{{URL::route('console.article.index')}}">文章管理</a>
            </li>

            <li>
                <a href="{{URL::route('console.article_type.index')}}">类别管理</a>
            </li>

            <li>
                <a href="{{URL::route('console.article_tag.index')}}">标签管理</a>
            </li>

            <li>
                {{--<a href="{{URL::route('console.comment.index')}}">评论管理</a>--}}
            </li>

        </ul>
    </div>
</div>