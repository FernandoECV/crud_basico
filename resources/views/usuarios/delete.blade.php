<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Deletar Usuários</title>
</head>

<body>

    <h3 class="text-center m-3">Deletar Usuários</h3>

    <form action="{{ route('deletar_usuario', ['id' => $usuario->id]) }}" method="POST" class="m-3">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Deseja excluir esse usuário ?</label><br>
            <input type="text" name="name" value="{{ $usuario->name }}" class="form-control" placeholder="Nome" required>
        </div>
        <button type="submit" class="btn btn-danger">Sim</button>
    </form>

</body>
</html>
