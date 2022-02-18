<?php 

    //Criando um array e atribuindo valres
    $nomes = array ('José da Silva', 'Maria da Silva', 'André Sousa');

    //Exibe um texto ou um conteudo de uma variavel
    // (que não seja um array)
    //echo($nomes);
    
    //Exibe um texto ou contedo de uma variavel mesmo semd um
    //arrau sem detalhes técnicos
    //print_r($nomes);

    //Exibe os dados de um objeto ou array ou variavel trazendo
    //detalhes técnicos (tipo de dado, qtd de caracteres, etc..)
    //var_dump($nomes);

    //utilizando o echo para escrever o valor de um indice do array
    //echo($nomes[1]);

    $dados = array('José da Silva', 20 , 1850.56);
//    var_dump($dados);

    //declarando um array
    $nomesFuncionarios = array();

    //atribuindo dados individuais no array
    $nomesFuncionarios[0] = 'Luiz Silva';

    $nomesFuncionarios[1] = null;

    $nomesFuncionarios[2] = 30;

    $nomesClientes = array('Francisco', 'Luiz', 'Andreia', 'Andre' );

    //Forma 1 de extrair dados com repetição

    $cont = 0;

    $qtde = count($nomesClientes);

    echo('quantidade de elementos no array');
    echo($qtde);

    echo('********** Exibindo dados por meio do While ');
    while ($cont < $qtde) {
        echo($nomesClientes[$cont]. '<br>');
        $cont ++;
    }
    
    echo('********** Exibindo dados por meio do For ');
    for ($cont=0; $cont < $qtde ; $cont++) { 
        echo($nomesClientes[$cont]. '<br>');
    }

    echo('********** Exibindo dados por meio do For each ');
    //permite criar uma copia do array fazendo já a contagem
        //de quanos elementos existem no array, e permitindo que
        //na exibição dos valores não seja necessário especificar o
        //indice do array
    foreach ($nomesClientes as $cliente){
        echo($cliente. '<br>');
    }

    //Trbalhando com array (Chave-Valor)
    $produtos = array(
        "nome"          => "Teclado",
        "descricao"     => "Teclado da cor preto e cinza.",
        "qtde"          => 50,
        "valorUnitario" => 80.45,
        "cor"           => "Preto"
        
        var_dump($produtos);
    )
?> 