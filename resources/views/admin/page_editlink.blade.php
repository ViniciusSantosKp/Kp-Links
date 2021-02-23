@extends('admin.page')

@section('body')
    @if ($errors->any())
        <div class="error">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
    </div> 
    @endif
    
    <form method="post">
        @csrf

        <label>Status
            <select name="status">
                <option {{isset($link) ? $link->status =='1' ? 'selected' : '' : ''}} value="1">Ativo</option>
                <option {{isset($link) ? $link->status =='0' ? 'selected' : '' : ''}}value="0">Inativo</option>
            </select>
        </label>
        <label>
            Título: 
            <input type="text" name="title" value="{{$link->title ?? ''}}">
        </label>
        <label>
            URL: 
            <input type="text" name="href" value="{{$link->href ?? ''}}">
        </label>
        <label>
            Cor do fundo: 
            <input type="color" name="op_bg_color" value="{{$link->op_bg_color ?? '#FFFFFF'}}">
        </label>
        <label>
            Cor do texto: 
            <input type="color" name="op_text_color" value="{{$link->op_text_color ?? '#000000'}}">
        </label>
        <label>Tipo de borda: 
            <select name="op_border_type">
                <option {{isset($link) ? $link->op_border_type =='square' ? 'selected' : '' : ''}} value="square">Quadrada</option>
                <option {{isset($link) ? $link->op_border_type =='rounded' ? 'selected' : '' : ''}} value="rounded">Arredondada</option>
            </select>
        </label>
        <input type="submit" value="Salvar">

    </form>

@endsection