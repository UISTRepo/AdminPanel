@include('partials.companyInfo')
<div class="nav-bar">
    <div class="row">
        <div class="col-sm-7">
            {{--<div class="btn-group">--}}
                {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">--}}
                    {{--Menu <span class="caret"></span>--}}
                {{--</button>--}}
                {{--<ul class="dropdown-menu" role="menu">--}}
                    {{--<li><a href="">Item 1</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        </div>
        <div class="col-sm-5 text-right">
            User:
                {{Auth::user()->firstName}} {{Auth::user()->lastName}}
            &nbsp;|&nbsp;
            <a href="{{ URL::action('logout') }}">Log out</a>
        </div>
    </div>
</div>
@include('partials.errorMsg')
@include('partials.infoMsg')