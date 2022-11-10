       
        <?php //o código php seve se inciar assim

$nome ="Rodrigo"; //variável do tipo string (texto), deve ser setada em aspas duplas ("")

$sobrenome= array('Oliveira','Rolim'); //Setar um conjunto de informações na mesma variável, array, deve se ultizar array('Elemento1', 'Elemento2', 'Elemento 3', etc)

$idade = 17; //variável do tipo int (inteira), número sem vírgula.

$namorando = true; //variável do tipo boolean (verdadeiro ou falso) (True or false)

$valor = 10.168; //variável do tipo flot (número com vírgula )

// o comando echo possuí a seguinte sintaxe (echo ""), e serve para mostrar determidada informação na tela, para mostrar o valor de uma variável deve coloca-la junto ao cifrão $Variavel

echo "Nome: $nome<br>";
echo "Sobrenome: $sobrenome[0], $sobrenome[1]<br>" ;
echo "Idade: $idade<br>";
echo "Namorando: $namorando<br>";
echo "Valor: $valor<br>";

//o código php deve finalizar assim
?> 
<br> <!-- TAG HTML para pular linha -->

<?php
//como criar um function: function NomeDaFunction (parâmetros)
function mlks($a, $b, $c, $d, $e, $f, $g){
    echo "MLKS $a, $b, $c, $d, $f, $g";
};
//utiliza o echo novamente

mlks("Ademar","Caio","Gabriel","Giovanni","Rodrigo","Samuel","Victor")
//chama a função criada anteriormente (mlks), e da valores as parametros criados anteriormente!
?>
<br>
<br>
<?php

function nome($nome){
    return "Nome: $nome";
}
$Nomes = nome("Jeferson");
echo "$Nomes";

?>
<br>
<br>
<?php
$ele = "João"; //setei a variável global $ele

function igual(){ //criei a function igual()
$ele = "João"; //setei a variavel local $ele
echo "$ele<br>"; //mandei escrever a variável local
}
echo "$ele<br>"; //chamei a variável global
igual(); //chamei a function criada anteriormente.
?>
<!--Acabou S2-->

    </body>
</html>