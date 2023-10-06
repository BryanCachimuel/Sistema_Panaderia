<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="<?= URL::to("assets/bootstrap/css/bootstrap.min.css")?>" type="text/css">-->
</head>
<body data-urlbase="<?= URL::base() ?>">
    
    <div class="container">
        <div class="card mt-5">
            <div class="card-header bg-dark text-white">
                <h5>Sistema de Usuarios</h5>
            </div>
            <div class="card-body">
                <div class="btn-group">
                    <a href="<?= URL::to("crearusuario")?>" class="btn btn-primary">Crear Usuario</a>
                </div>
                <hr/>
                <h4 class="cart-title mb-4">Listar Usuarios</h4>
                <table class="table table-condensed table-hover table-striped" width="100%" id="tablaListaUsuarios">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Edad</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="6">Consultando...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src=<?= URL::to("assets/plugins/jquery.js")?> type="text/javascript"></script>
    <script src=<?= URL::to("assets/bootstrap/js/bootstrap.min.js")?> type="text/javascript"></script>
    <script src=<?= URL::to("ssets/js/global/helperform.js")?> type="text/javascript"></script>
    <script src=<?= URL::to("ssets/js/global/app.global.js")?> type="text/javascript"></script>
    <script src=<?= URL::to("ssets/js/modulos/lista.usuarios.js")?> type="text/javascript"></script>
</body>
</html>