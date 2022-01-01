<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Facebook - entre ou cadastre-se</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">    
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        
    </head>

    <body>
        <header>
            <div class="center">
                <div class="logo">
                    <h2>Facebook</h2>
                </div><!--Logo-->

                <form method="post" class="form-login">
                    <div class="form-element">
                        <p>E-mail ou telefone:</p>
                        <input type="email" />
                    </div><!--form-element-->

                    <div class="form-element">
                        <p>Senha:</p>
                        <input type="password" />
                    </div><!--form-element-->

                    <div class="form-element">
                        <input type="submit" name="acao-enviar" value="Enviar"/>
                    </div><!--form-element-->


                </form><!--form-login-->
                <div class="clear"></div>
            </div><!--Center-->
        </header>    

        <main>
            <div class="center">
                <div class="img-pessoas">
                    <h2>O Facebook ajuda você a se conectar e<br />
                     compartilhar com as pessoas que fazer parte<br />
                     da sua vida.</h2>
                    <img src="img/img1.png" alt="imagem-facebook-comunicação">
                </div><!--img-pessoas-->

                <div class="abrir-conta">
                    <h2>Abra uma conta</h2>
                    <h3>É gratuito e sempre será</h3>
                
                    <form class="criar-conta">
                        <div class="w50">
                            <input placeholder="Nome" type="text">
                        </div> <!--w50-->

                        <div class="w50">
                            <input placeholder="Sobrenome" type="text">
                        </div> <!--w50-->

                        <div class="w100">
                            <input placeholder="E-mail" type="text">
                        </div> <!--w100-->

                        <div class="w100">
                            <input placeholder="Nova senha" type="password">
                        </div> <!--w100-->

                        <div class="w100">
                            <h2>Data de Nascimento:</h2>
                            <select name="nascimento-dia" class="nascimento">
                               
                               <?php
                                    for($i = 1; $i <= 31; $i++){                              
                                ?>

                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            
                                <?php } ?>

                            </select>
                            <select name="nascimento-mes" class="nascimento">
                                <!-- Aplicar Depois -->
                                <option value="0">junho</option>

                            </select>
                            <select name="nascimento-ano" class="nascimento">
                            
                                <?php
                                    for($i = 2021; $i >= 1960; $i--){                              
                                ?>
                            
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            
                                <?php } ?>

                            </select>
                            <div class="clear"></div>
                        </div> <!--w100-->

                        <div class="w100">
                            <div class="input-radio">
                                 <input type="radio" name="sexo" value="masculino">
                                 <h2>Masculino</h2>
                            </div><!--radio-->

                            <div class="input-radio">
                                 <input type="radio" name="sexo" value="feminino">
                                 <h2>Feminino</h2>
                            </div><!--radio-->

                            <div class="clear"></div>
                        </div> <!--w100-->

                        <div class="w100">
                            <input type="submit" name="acao-cadastrar" value="Cadastre-se" >
                        </div> <!--w100-->

                        <div class="clear"></div>
                    </form><!--criar-conta-->
                </div><!--abrir-conta-->



                <div class="clear"></div>
            </div><!--center-->
        </main>

        <section class="linguas">
            <div class="center">
                <a class="selected-lingua" href="#">Português (BR)</a>
                <a href="#">Português (BR)</a>
                <a href="#">Português (BR)</a>
                <a href="#">Português (BR)</a>
                <a href="#">Português (BR)</a>
                <a href="#">Português (BR)</a>
                <a href="#">Português (BR)</a>
            </div><!--center-->

            <div style="border:0;padding-top:10px;" class="center">
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
            </div><!--center-->
        </section><!--Linguas-->

    </body>
</html>