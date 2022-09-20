<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Cadastrar Usuário</title>
</head>

<body>
    
    <h3 class="text-center m-3">Cadastrar Usuário</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cadastrar_usuario') }}" method="POST" class="m-3">
        @csrf
        <div class="mb-3">
            <label for="Nome" class="form-label">Nome :</label><br>
            <input type="text" name="name" class="form-control" placeholder="Nome" required>
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email :</label><br>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <label for="Nome" class="form-label">Password :</label><br>
            <input type="password" name="password" class="form-control" placeholder="Senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

</body>
</html>
