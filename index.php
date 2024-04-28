<?php
# ARQUIVO INDEX PADRÃO, MEU PAU NA SUA MÃO

# INCLUDE -> inclui a pagina config, EXEMPLO: HEADERS/FOOTER
 // include 'config.php';

#REQUIRE -> É MAIS SOBRE ALGO DE BANCO DE DADOS, ALGO IMPORTANTE PARA NOSSO SISTEMA.

// require 'config.php'

#REQUIRE_ONCE -> INCLUIU APENAS UMA VEZ / CARREGA APENAS 1 VEZ NO SYSTEMA

require_once 'sistema/config.php';
include_once 'helpers.php';

echo '<p>Olá mundo / archive index</p>';






