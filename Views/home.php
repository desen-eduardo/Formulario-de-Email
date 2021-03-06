<?php $this->layout('template/layout',['title'=>'Serviço de E-mail']) ?>
<?php # para criar estilo para cada página  pode ser importado em vez de passa direto na página?>
<?php $this->unshift('styles') ?>
        <style>
            body{
                background: #eee;
            }
        </style>
<?php $this->end() ?>

<?php $this->start('page') ?>
    <form method="post">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <p>Hello <?=$this->e($name)?></p>
                <h1 class="d-flex justify-content-center mt-5">Formulário de E-mail</h1>
                <div class="row">
                    <?php if (isset($alert) && !empty($alert)): ?>
                    <div class="col-md-12">
                        <div class="alert alert-dismissible alert-<?= $this->e($alert['type']) ?>">
                            <?=$this->e($alert['msg']) ?>
                            <button class="close" type="button" data-dismiss="alert">x</button>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" id="nome" name="name" class="form-control" placeholder="Digite seu nome" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Digite seu e-mail" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="message">Messagem:</label>
                            <textarea name="message" id="message" class="form-control" cols="30" rows="10" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </form>
    <!--formulário -->
<?php $this->stop() ?>  
<?php # para criar script para cada página pode ser importado em vez de passa direto na página?>
<?php $this->push('scripts') ?>
    <script>
        alert('oi')
    </script>
<?php $this->end() ?>
