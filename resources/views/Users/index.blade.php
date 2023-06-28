<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    < div class="container">
        <p>hola desde blade usuarios</p>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Primer Nombre</th>
                <th scope="col">Segundo Nombre</th>
                <th scope="col">Primer Apellido</th>
                <th scope="col">Segundo Apellido</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row">{{$user->id}}</td>
                <td>{{$user->PrimerNombre}}</td>
                <td>{{$user->SegundoNombre}}</td>
                <td>{{$user->PrimerApellido}}</td>
                <td>{{$user->SegundoApellido}}</td>
                <td>{{$user->email}}</td>
              </tr>
            </tbody>
          </table>
    </>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
