@extends('admin.template')

@section('title', 'KPLinks - ' .$page->op_title. '- Links')

@section('content')
    <div class="preheader">
        {{$page->op_title}}
    </div>
    <div>
        <header>
            <ul>
                <li @if ($menu=='links') class="active"@endif><a href="{{url('/admin/'.$page->slug.'/links')}}">Links</a></li>
                <li @if ($menu=='design') class="active"@endif><a href="{{url('/admin/'.$page->slug.'/design')}}">Aparência</a></li>
            </ul>
        </header>
    </div>

    <div class="area">
       <div class="leftside">
            @yield('body')
        </div>
        <div class="rightside">
            <iframe src="{{url('/'.$page->slug)}}" frameborder="0"></iframe>
        </div>
    </div>
@endsection
    
