@extends(config('laraboard.view.layout', 'laraboard::layouts.app'))

@section('content')
<div id="forums">
    @if(is_string($flash_blade = config('laraboard.view.flash')))@include($flash_blade)@endif
    @include('laraboard::blocks.breadcrumbs')
    @yield('content')
</div>
@overwrite