<!DOCTYPE htm>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kp Bio - Registro</title>
    <link rel="stylesheet" href="{{ url('assets/css/admin.login.css') }}">
</head>
<body>
    <div class="loginArea">
        <h1>KP Links - Cadastro</h1>

        @if ($error)

            <div class="error">{{ $error }}</div>
            
        @endif

        <form action="" method="post">
            @csrf

            <input type="email" name="email" placeholder="Digite seu e-mail">

            <input type="password" name="password" placeholder="Digite sua senha">

            <input type="submit" value="Cadastrar">

            Já tem cadastro? <a href=" {{url('/admin/login')}} ">Login</a>

        </form>
    </div>
</body>
</html>