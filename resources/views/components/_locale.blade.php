<form action="{{route('setLocale', $lang)}}" method="POST" class="d-inline">
    @csrf 
    <button type="submit" class="btn">
        <img src="{{ asset('vendor/blade-flags/country- '.$lang.' .svg')}}" width="32" height="32">
    </button>
    <h1 class="display-1">{{__('ui.allArticles')}}</h1>
</form