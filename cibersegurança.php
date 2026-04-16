<?php

$opcao = "";


while ($opcao != 6){}
echo " ---MENU PSI---
1 - Definição
2 - Objetivos
3 - Responsabilidade
4 - Boas práticas de segurança
5 - Consequências do descumprimento ";

$opcao = readline (" Digite um número ");
switch($opcao){

case 1: 
    echo " A PSI (Política de Segurança da Informação), é um conjunto de regras e práticas estabelecidas por uma instituição para proteger suas informações e sistemas contra ameaças internas e externas. Essa política é crucial para a proteção de dados sensíveis. Além de manter a confiança de clientes e parceiros, também assegura a continuidade dos negócios e educa os funcionários sobre práticas seguras. ";

    break;

case 2:
    echo " Seus principais objetivos são a confidencialidade (garante que a informação seja concedida apenas a pessoas autorizadas), integridade (visa assegurar se a informação é precisa e confiável) e disponibilidade (garante que a informação seja acessível quando necessário). ";

    break;

case 3:
    echo " As responsabilidades abrangem desde a alta administração até todos os colaboradores de terceiros, visando prevenir vazamentos, conformidade legal e gestão de riscos. ";

    break;

case 4:
    echo " Algumas boas práticas de segurança são:
-  Usar senhas fortes 
- Ativar a autenticação de dois fatores
- Atualizar sempre os softwares
- Desconfiar de links suspeitos
- Manter backups
- Usar antivírus ";

    break;

case 5:
    echo " Por outro lado, caso houver descumprimento da PSI, violações podem resultar em multas pesadas para empresas e bloqueio ou eliminação do banco de dados. Sem contar ao prejuízo financeiro, danos à reputação, descontinuidade de negócios, etc. ";
    
    break; 
}