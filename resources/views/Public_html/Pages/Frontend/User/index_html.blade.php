@if(isset($sections) && !empty($sections))
    @foreach($sections AS $keyword => $value)
        @include($value['content_path'])
    @endforeach
@endif  