 <?php
        //isset: verrifica se a variavel existe e se ela é diferente de null
        //$_POST: recupera o valor de uma variável do formulário
        if(isset($_POST["nome"])){

            
            $nome = $_POST["nome"];
            $idade = $_POST["idade"];

            echo "<h2>Dados Recebidos</h2>";
            echo "Nome:".$nome . "<br>";
            echo "Idade",$idade . "<br><br>";

            //Incluir o link de volta
            echo '<a href="02_form.html">volta</a>';


            //incluir o Else, caso da variavel nome não exista ou esteja nula

        }else{
            echo "acesso inválido";
        }

?>