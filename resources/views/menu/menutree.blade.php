<ol class="{{$class}}">
    @foreach($menus as $menu)
        <li class="dd-item"
            data-id="{{$menu['id']}}"
            data-name="{{$menu['name']}}">
            <div class="dd-handle">
                <span class="dd-item-text">{{$menu['name']}}</span>

                <a href="#{{$menu['id']}}" class="edit pull-right">edit</a>

            </div>

            @if(isset($menu['children']))
                @include('mycms::menu.menutree',['class'=>'children','menus'=>$menu['children']])
            @endif

        </li>
    @endforeach
</ol>