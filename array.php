<?php
    

    //declaração de array
    $nomeClientes=  array ('Alerquina','Coringa','Peter', 'Batman');
    
    $contador=0;
    $quantidadeDeElementos= count($nomeClientes); //<count> retorna a quantidade de elementos de um array.
    
    //laço 01
    echo('**********Exibindo pelo WHILE***********<br>');
    while($contador < $quantidadeDeElementos){ // o $contador tem que ser menor, porque o índice começa em zero. 
        echo ($nomeClientes[$contador].'<br>');
        $contador++;
    }

    //laço 02
    echo('**********Exibindo pelo FOR***********<br>');
    for($contador=0; $contador<$quantidadeDeElementos; $contador++){
        echo($nomeClientes[$contador].'<br>');
    }

    //laço 03
    echo('**********Exibindo pelo FOR each***********<br>');
    foreach ($nomeClientes as $clientes) {
        echo($clientes.'<br>');
    }

    ##### chave-valor #####
    echo('**********Usando chave-valor***********<br>');
    
    //criação de array
    $viloes= array(
        "piuPiu" => "passaro do mal",
        "superMan" => 5654654,
        "homemDeFero" => 456,
        "paulMcCartney" => "Ingles safado",
    );

    
    //Saída 01
    echo ('<pre>'); //<pre> elemento html de tabela
    var_dump($viloes);
    echo('</pre>');   
    
    //saíde 02
    echo($viloes["piuPiu"].'<br>');


    echo('*******Usando chave-valor com mais de um array*******<br>');
    
    //criando array
    $produtos= array(
    
        array( //equivale ao índece 0
            "nome"          => "teclado",
            "decricao"      => "mecanico" ,
            "valor"         => 120.20,
            "quantidade"    => 80,
        ),
        array( //equivale ao índice 1
            "nome"          => "mouse",
            "decricao"      => "com fio" ,
            "valor"         => 90.20,
            "quantidade"    => 140,
        )

    );

    
    //Saída 01
    echo ('<pre>'); 
    var_dump($produtos);
    echo('</pre>');   

    //saíde 02
    echo($produtos[1]["nome"].'<br>');
    print_r($produtos);
    


    echo('*******Usando chave-valor com mais de um array e nomeando índices*******<br>');
    
    //criando array
    $produtos= array(
    
        "listTeclado"=>array( //equivale ao índece 0
            "nome"          => "teclado",
            "decricao"      => "mecanico" ,
            "valor"         => 120.20,
            "quantidade"    => 80,
        ),
        "listMouse"=>array( //equivale ao índice 1
            "nome"          => "mouse",
            "decricao"      => "com fio" ,
            "valor"         => 90.20,
            "quantidade"    => 140,
        )

    );

    //Saída 01
    echo ($produtos["listTeclado"]["nome"].'<br>'); 
    echo ($produtos["listMouse"]["nome"].'<br>');   

   

    //exibir dois valores com for each
    foreach ($produtos as $informatica) {
        echo('<br>'.$informatica["nome"].'<br>');
        echo('<br>'.$informatica["quantidade"].'<br>');
    }







############### ANOTAÇÕES! ##############
/*
    //DEFINIÇÃO
    <array> são objetos de dados. Ou uma variavel que armazena muitos valores.
       
    //SINTAXES:
    Sintaxe A) $nomeDaVariavel = array (' dadoA, dadoB, dadoC,...');
                Ex: 
                    $nome= array ('lais, jose, pedro');

    Sintaxe B) $nomeDaVariavel = array ('');
               $nomeDaVariavel [índice]='dado';
                Ex: 
                    //declaração de array
                    $nome= array ('');
                    
                    //Atribuição de dados
                    $nome [0]='lais';
                    $nome [1]= null;
                    $nome [3]= 20;

    Sintaxe C) //chave-valor
            $nomeDaVariavel= 
                array(

                    "chaveA" => "valor1",
                    "chaveB" => numero,
                    "chaveC" => null,
                    "chaveD" => "valor2",
                );
                 echo($nomeDaVariavel["chave"]);   //O nome da chave servirá como referência para saída do dado.
                   
                Ex: 
                    $viloes=array(
                        "piuPiu" => "passaro do mal",
                        "superMan" => 5654654,
                        "homemDeFero" => null,
                        "paulMcCartney" => "Ingles safado",
                        
                        {nome da chave}    {valor da chave}
                    
                    ); 

                        //saída de dado
                        echo($viloes["piuPiu"]);
                            ou
                        print_r($viloes);
                            ou
                        var_dump($viloes);



    //PRINT DE ARRAY
    <echo> usado para exibir somente um por vez índice do array.
        SINTAXE: echo($variavel[índice]);

    <print_r> usado para exibir o que contêm no array. 
        SINTAXE: print_r('$nomeDaVariavel');

    <var_dump> usado para exibir o que contêm no array e contar os caracters. 
        SINTAXE: var_dump('$nomeDaVariavel');
        Muito usado para debug.
        Atenção!!! Acentuação e espaçamento são contados como caracter.

    //ARMAZENAMENTO DE DADOS
    É possível misturar diferentes tipos de dados dentro de um array.

  


    //ESTRUTURAS DE REPETIÇÃO
    for ($i=0; $i < ; $i++) { 
        # code...
    }

    $i
    while ($a <= 10) {
        # code...
    }

    foreach ($variable as $value) {
        # code...
    }

    <foreach> cria uma cópia do array, tal cópia faz a contagem de quantos elementos existem no array e 
    permite que para exibição dos valores não seja necessário especificar o ínide do array.



    //OUTRAS ESTRUTURAS
    <count> retorna a quantidade de elementos de um array. Conta um número de elementos de uma variável.

*/

?>