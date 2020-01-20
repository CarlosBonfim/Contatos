@extends('layouts.app')

@endsection

@section('javascript')
<script type = "text/javascript">
function validate_delete(){
    return confirm('Deseja excluir ?')
}
</scrirpt>

@endsection


<div class = "container">
    <div class = "row">
        <div class = "ol-md-12">
            <div class = "card">
                <div class = "card header" >Contato</div> 
                    <form action = "{{url('contatos/'.$data->id)}}" method="post" onsubmit=" return validate_delete()">
                        <div class ="card-body" >
                            @method('DELETE')
                            
                            {{csrf_field()}}
                            
                            <div class ="row">
                            <div class = "col-sm-4">
                                <img src="{{ $data->foto_image}}" class="img-foto">

                            <div class = "form-group">
                                <label for ="nome">Nome</label>
                                <p class ="form-control-static">{{ $data->nome }}</p>
                            </div>
                            <div class ="form-group">
                                <label for ="telefone">Telefone</label>  
                                <p class ="form-control-static">{{ $data->telefone }}</p>
                            </div>
                            <div class = "form-group">
                                <label form = "email">E-mail</label>
                                <p class ="form-control-static">{{ $data->email }}</p>
                            </div>
                            <div class = "form-group">
                                <label form = "data_nasc">Data de Nascimento</label>
                                <p class ="form-control-static">{{ $data->data_nasc }}</p>
                            </div>
                        </div>
                            <div class = "card-footer text-right">
                                <a href ="#" onclick="history.back()" class ="btn btn-secondary">Voltar</a>
                                <button type = "submit" class="btn btn-danger">Excluir</button>
                                <a href = "{{ url('contatos/edit/'.$data->id) }}" class ="btn btn-primary">Editar</a>
                            </div>
                        </form>        
                    </div>
                </div>
            </div> 
        </div>   
    </div>               
</div>
@endsection