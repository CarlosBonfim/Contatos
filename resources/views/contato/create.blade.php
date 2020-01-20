@extends('layouts.app')

@('section')
<div class = "container">
    <div class = "row">
        <div class = "ol-md-12">
            <div class = "card">
                <div class = "card header" >Contato</div> 
                    <form action = "{{url('contatos')}}" method="post" enctype = "multipart/form_data">
                        <div class ="card-body" >
                            {{csrf_field()}}

                            <div class = "form-group">
                                <label for ="nome">Nome</label>
                                <input type="text" required class = "form-control{{$erros->has('nome')? 'is-invalid':''}}" value="{{old('nome')}}" id = "nome" name = "nome" >
                                <div class ="invalid-feedback">{{$errors->first('nome')}}</div>
                            </div>
                            <div class ="form-group">
                                <label for ="telefone">Telefone</label>  
                                <input type="text" required class="form-control{{$errors->has('telefone') ? 'is-invalid' :''}}" value="{{old('telefone')}}" id = "telefone" name ="telefone">
                                <div class ="invalid-feedback">{{$errors->first('telefone')}}</div>
                            </div>
                            <div class = "form-group">
                                <label form = "email">E-mail</label>
                                <input type ="email" class="form-control{{$errors->has('email') ? 'is-invalid':''}}" value="{{old('email')}}" id ="email" name ="email">   
                                <div class ="invalid-feedback">{{$errors->first('e-mail')}}</div>
                            </div>
                            <div class = "form-group">
                                <label form = "data_nasc">Data de Nascimento</label>
                                <input type="text" class="form-control{{$errors->has('data_nasc') ? 'is-invalid':''}} " id = "data_nasc"  value="{{old('data_nasc')}}" name="data_nasc">
                                <div class ="invalid-feedback">{{$errors->first('data_nasc')}}</div>
                            </div>  
                            <div class = "form-group">
                                <label form = "foto">Foto</label>
                                <input type="file" class="form-control{{$errors->has('foto') ? 'is-invalid' :''}}" id = "foto" name="foto" accept=".jpg, .jpeg, .png, .gif">
                                <div class ="invalid-feedback" style="display:inherit">{{$errors->first('foto')}}</div>
                            </div>
                            <div class = "card-footer text-right">
                                <a href ="#" onclick="history.back()" class ="btn btn-secondary">Voltar</a>
                                <button type = "submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>        
                    </div>
                    @endsection
