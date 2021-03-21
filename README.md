# Formulario-de-Email
Enviou de Email com PHPMailer

Para rodar o projeto precisa do composer, php >= 7.3.
execute o projeto pelo terminal ou prompt de comando dentro da pasta public,
php -S localhost:8000 ou fora da pasta public, php -S localhost:8000 -t public


Foi acrescentado no sistema template engine plates , fica com o código mais limpo na view.
agora foi colocado no sistema gulp para agilizar css e js, minificando ambos.

o css e js pode se colocado na pasta src e lá possui cada pasta com seu nome especifico, precisa do nodeJS instalado para pode usar o gulp no projeto.

foi acrescentado o banco de dados no projeto mais informação da lib acessa o site.
https://clancats.io/hydrahon/master/

As tabelas precisa ser no plural exemplo users,usuarios, já entity precisa ser normal User, Usuario o sistema entende que esta fazendo referência a tabela.
