@extends('layout')

@section('container')
    <div>
        <ul>
            @foreach($products_list as $p)
                <li>
                    {{ $p->name }}  
                    <form action="{{ route('product.destroy', $p) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">eliminar</button>
                    </form>

                    <form action="{{ route('product.edit', $p) }}" method="get">
                        @csrf
                        <button type="submit">edtar</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@stop