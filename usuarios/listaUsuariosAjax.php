<?php

require_once '../model/banco.php';
require_once 'model/dao.php';

$usuarios = $objUsuarioDao->verUsuarios();
for ($i = 1; $i < count($usuarios); $i++) {

    echo '<tr>
            <td>' . $usuarios[$i]["nome"] . '</td>
            <td>' . $usuarios[$i]["email"] . '</td>
            <td>' . $usuarios[$i]["usuario"] . '</td>
            <td>' . $usuarios[$i]["nivel"] . '</td>
            <td>' . $usuarios[$i]["status"] . '</td>
            <td>' . $usuarios[$i]["dataCriacao"] . '</td>
            <td><a href="altUsuario.php?id=' . $usuarios[$i]['idUsuario'] . '">Alterar</a></td>
            <td><a href="javascript:void(0)" onclick="javasacript:delUsuario(' . $usuarios[$i]["idUsuario"] . ')">Excluir</a></td>
          </tr>';
}
?>