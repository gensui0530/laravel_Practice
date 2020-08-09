@extends('layouts.app')

@section('content')
<div id="app">
    <!-- デフォルトだとこの中ではvue.jsが有効 -->
    <!-- example-component はLaravelに入っているサンプルのコンポーネント -->
    <example-component title="{{ __('Practice').'「'.$drill->title.'」' }}" :drill="{{$drill}}" category_name="{{$drill->category_name}}"></example-component>
    </example-component>
</div>

@endsection