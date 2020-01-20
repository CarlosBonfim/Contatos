@extends ('layouts.app')

@section('stylecss')
<style media = "screen">
    .img-foto-xs{
        width: 30px;
        height: 30px;
        border: 1px solid #c0c0c0;
        border-radius: 5px;
    }
    .a-line{
        line-height: 30px;
    }
</style>    


@endsection
@section('content')
<div class = "container">
    <div class ="card">
    <div class = "card-header">
        Contatos
        <a href = "{{ url('contatos/add') }}" class="btn btn-primary btn-sm float-right">Novo</a>
    </div>
    <div class = "card-body p-0">
        <div class = "table-responsive border-0">
            <table class = "table table-hover" style = "margin-bottom: inherit">
                <tbody>
                    @foreach($contatos as $contato)
                    <tr>
                        <td>
                            <a href ="{{ url('contatos/'.$contato->id) }}">
                                <img src ="{{ $contato->foto_image}}" class = "img-foto-xs">
                            </a>
                        </td>
                        <td><a class ='a-line' href="{{url('contatos/'.$contato->id)}}">{{$contato->nome  }}</a>
                        <td class ="d-none d-sm-table-cell"><a class = 'a-line' href ="{{url('contatos/'.$contato->id)}}">{{$contato->telefone  }}</a>        
                        <td class ="d-none d-sm-table-cell"><a class = 'a-line' href ="{{url('contatos/'.$contato->id)}}">{{$contato->email  }}</a>        
                    </tr>
                    @endforeach
                </tbody>
            </table>   
        </div>
    </div>         
</div>
</div>    