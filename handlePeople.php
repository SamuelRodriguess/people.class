<?php
    include('peopleClass.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $person = new People();
        $person->setName($_POST["name"]);
        $person->setDateOfBirth($_POST["dateOfBirth"]);
        $person->setCep($_POST["cep"]);
        $person->setNumber($_POST["number"]);
        $person->setComplement($_POST["complement"]);
        $person->setFontSize($_POST["fontSize"]);
        $person->setHeight($_POST["height"]);
        $person->setWeight($_POST["weight"]);

        $imc = $person->calculaIMC();

        if (isset($_POST['fontSize'])) {
            $fontSize = $_POST['fontSize'];
            setcookie('fontSize', $fontSize, time() + 3600 * 24 * 30);
        }

        $fontSize = isset($_COOKIE['fontSize']) ? $_COOKIE['fontSize'] : '16px';

        echo "<h2>Dados da Pessoa:</h2>";
        echo "<p>Nome: " . $person->getName() . "</p>";
        echo "<p>Data de Nascimento: " . $person->getDateOfBirth() . "</p>";
        echo "<p>CEP: " . $person->getCep() . "</p>";
        echo "<p>Número: " . $person->getNumber() . "</p>";
        echo "<p>Complemento: " . $person->getComplement() . "</p>";
        echo "<p>Tamanho da Fonte: " . $person->getFontSize() . "</p>";
        echo "<p>Altura (cm): " . $person->getHeight() . "</p>";
        echo "<p>Peso (kg): " . $person->getWeight() . "</p>";

        if ($imc !== null) {
            echo "<p>IMC: " . $imc . "</p>";
        } else {
            echo "<p>IMC não calculado devido a altura ou peso inválidos.</p>";
        }

        $cep = $person->getCep();
        $url = "https://viacep.com.br/ws/" . $cep . "/json/";
        $data = file_get_contents($url);
        $address = json_decode($data);

        echo "<h2>Endereço:</h2>";
        echo "<p>Rua: " . $address->logradouro . "</p>";
        echo "<p>Bairro: " . $address->bairro . "</p>";
        echo "<p>Cidade: " . $address->localidade . "</p>";
        echo "<p>Estado: " . $address->uf . "</p>";
    }
?>