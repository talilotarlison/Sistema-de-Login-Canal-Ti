&lt;?php
session_start();
?&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
    
&lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;title&gt;Sistema de Login - PHP + MySQL - Canal TI&lt;/title&gt;
    &lt;link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"&gt;
    &lt;link rel="stylesheet" href="css/bulma.min.css" /&gt;
    &lt;link rel="stylesheet" type="text/css" href="css/login.css"&gt;
&lt;/head&gt;

&lt;body&gt;
    &lt;section class="hero is-success is-fullheight"&gt;
        &lt;div class="hero-body"&gt;
            &lt;div class="container has-text-centered"&gt;
                &lt;div class="column is-4 is-offset-4"&gt;
                    &lt;h3 class="title has-text-grey"&gt;Sistema de Login&lt;/h3&gt;
                    &lt;h3 class="title has-text-grey"&gt;&lt;a href="https://youtube.com/canaltioficial" target="_blank"&gt;Canal TI&lt;/a&gt;&lt;/h3&gt;
                    &lt;?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?&gt;
                    &lt;div class="notification is-danger"&gt;
                      &lt;p&gt;ERRO: Usuário ou senha inválidos.&lt;/p&gt;
                    &lt;/div&gt;
                    &lt;?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?&gt;
                    &lt;div class="box"&gt;
                        &lt;form action="login.php" method="POST"&gt;
                            &lt;div class="field"&gt;
                                &lt;div class="control"&gt;
                                    &lt;input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus=""&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;

                            &lt;div class="field"&gt;
                                &lt;div class="control"&gt;
                                    &lt;input name="senha" class="input is-large" type="password" placeholder="Sua senha"&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;button type="submit" class="button is-block is-link is-large is-fullwidth"&gt;Entrar&lt;/button&gt;
                        &lt;/form&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/section&gt;
&lt;/body&gt;

&lt;/html&gt;