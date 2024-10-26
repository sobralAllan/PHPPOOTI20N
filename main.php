<?php
    namespace PHP\Modelo;//Definir o local do projeto
    require_once('Cliente.php');//Requisitando uma classe
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('Endereco.php');
    use PHP\Modelo\Cliente;//Definir a classe 
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\Endereco;

    $endCliente = new Endereco("Avenida Senador Vergueiro",
                               "400",
                               "Centro",
                               "São Bernardo do Campo",
                               "São Paulo",
                               "Brasil",
                               "03756-080");

    $cliente = new Cliente("12354",
                            "Allan",
                            "1199999",
                            $endCliente,
                            560.60);//Criar um objeto

    $clienteDois = new Cliente("12",
                                "João",
                                "13",
                                $endCliente, 
                                1020.25);

    $funcionario = new Funcionario("1", 
                                    "Buganza", 
                                    "69", 
                                    "Assistente", 
                                    1200,
                                    $endCliente);

    echo $cliente->imprimir();
    echo $endCliente->imprimir()."<br>";
    
    echo $clienteDois->imprimir();
    echo $endCliente->imprimir()."<br>";
    
    echo $funcionario->imprimir();
    echo $endCliente->imprimir();


?>