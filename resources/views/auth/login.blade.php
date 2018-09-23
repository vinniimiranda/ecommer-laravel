@extends('layouts.app')
@extends('layouts.cabecalho')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="input-field col s6">
            <input type="text" name='email' required autofocus>
            <label for="email">Email</label>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="input-field col s6">
            <input type="password" name='senha' required autofocus>
            <label for="senha">Senha</label>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class=" col s6">
            <button class='btn waves-effect' onClick="login()">Logar</button>
        </div>
    </div>

</div>

<script>
    function login() {
        M.toast({html: 'Login realizado', classes: 'teal lighten-1'}, 3000,)
        setInterval(function() {
            location.href= '/'
        }, 3000)
    }
</script>
@endsection
