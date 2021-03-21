<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Web</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row d-flex flex-column align-items-center">
            <div class="col-md-6 mt-5">
                <h1 class="text-center">Login</h1>
                <div class="card">
                   <div class="card-body">
                   <?php if (isset($alert) && !empty($alert)): ?>
                        <div class="alert alert-dismissible alert-<?= $this->e($alert['type']) ?>">
                            <?=$this->e($alert['msg']) ?>
                            <button class="close" type="button" data-dismiss="alert">x</button>
                        </div>
                   <?php endif; ?>
                        <form method="post">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" class="form-control" name="senha" id="senha">
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-success">Entrar</button>
                            </div>
                        </form>    
                   </div> 
                </div>
            </div>
        </div>    
    </div>
</body>
</html>