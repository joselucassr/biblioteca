<?php

	$query_categoria = "SELECT nome_categoria  FROM categoria";
    $result_categoria = mysqli_query($conn, $query_categoria);

    $query_autor = "SELECT nome_autor  FROM autor";
    $result_autor = mysqli_query($conn, $query_autor);

    while ($row_autor = mysqli_fetch_assoc($result_autor)){
        print '<td>'. $row_autor['nome_autor'] . '</td>';
    }