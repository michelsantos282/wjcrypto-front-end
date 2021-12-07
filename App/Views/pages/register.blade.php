@extends('layout')

@section('head')
    <title>Cadastro</title>
@endsection

@if (isset($message))
@section('alert')
    <div>
        {{ $message }}
    </div>
@endsection
@endif

@section('content')
    <h1>Cadastro</h1>


    <form>
        <div class="row">
            <div class="col-6">
                <h6 class="my-3">Dados Pessoais</h6>
                <div class="form-group">
                    <label for="">Nome</label>
                    <input type="email" name="name" class="form-control my-3"aria-describedby="emailHelp" placeholder="Nome Completo" required>
                </div>
                <div class="form-group">
                    <label for="">Senha</label>
                    <input type="password" name="password" class="form-control my-3" placeholder="Senha" required>
                </div>
                <div class="form-group">
                    <label for="">Data de Nascimento</label>
                    <input type="date" name="dob" class="form-control my-3" placeholder="Data de Nascimento" required>
                </div>
                <div class="form-group">
                    <label for="">Telefone</label>
                    <input type="text" name="phone" class="form-control my-3" placeholder="Telefone" required>
                </div>
                <div class="form-group">
                    <label for="">Numero do Documento</label>
                    <input type="text" name="doc_number" class="form-control my-3" placeholder="Numero do documento" required>
                </div>
            </div>
            <div class="col-6">
                <h6 class="my-3">Endereco</h6>
                <div class="form-group">
                    <label for="">CEP</label>
                    <input type="email" name="postcode" class="form-control my-3"aria-describedby="emailHelp" placeholder="CEP" required>
                </div>
                <div class="form-group">
                    <label for="">País</label>
                    <input type="password" name="country" class="form-control my-3" placeholder="País" required>
                </div>
                <div class="form-group">
                    <label for="">Estado</label>
                    <input type="date" name="state" class="form-control my-3" placeholder="state" required>
                </div>
                <div class="form-group">
                    <label for="">Cidade</label>
                    <input type="text" name="city" class="form-control my-3" placeholder="Cidade" required>
                </div>
                <div class="form-group">
                    <label for="">Numero</label>
                    <input type="text" name="number" class="form-control my-3" placeholder="Numero da casa" required>
                </div>
                <div class="form-group">
                    <label for="">Complemento</label>
                    <input type="text" name="complement" class="form-control my-3" placeholder="Complemento">
                </div>
                <div class="form-group">
                    <label for="">Referência</label>
                    <input type="text" name="reference" class="form-control my-3" placeholder="Referência">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary my-3">Cadastrar</button>
    </form>
@endsection
