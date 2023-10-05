<?php
  $contador = 0;

    echo "<html>";
    echo "<head>";
    echo "<title>Exemplo de Loop While</title>";
    echo "</head>";
    echo "<body>";

    while ($contador < 5) {
        echo "<p>Este é o parágrafo número " . ($contador + 1) . "</p>";
        $contador++;
    }

    echo "</body>";
    echo "</html>";
?> 