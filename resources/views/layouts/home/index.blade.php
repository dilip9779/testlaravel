<ul>
    @foreach($items as $item)
        <li>{{ $item->title }}
            @foreach($item['children'] as $child)
            <li>{{ $child->title }}</li>
            @endforeach
        </li>
    @endforeach
</ul>