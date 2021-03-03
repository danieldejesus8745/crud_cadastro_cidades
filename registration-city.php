<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cadastrar cidade</title>
        <link rel="stylesheet" href="css/city-registration.css" />
        <link rel="shortcut icon" href="img/icon.webp" type="image/x-icon" />
    </head>
    <body>

        <header class="header">
            <nav class="menu">
                <ul>
                    <li><a href="index.php">Lista de cidades</a></li>
                    <li><a href="registration-city.php">Cadastrar cidade</a></li>
                </ul>
            </nav>
        </header>

        <div class="registration-form">
            <p>Cadastrar cidade</p>
            <form id="registration-form">
                <input type="text" placeholder="Cidade*" id="city" required />
                <select id="city-state">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
                <input type="number" placeholder="População*" id="city-population" required />
                <input type="submit" value="Cadastrar" id="btn-form" />
            </form>
        </div>

        <script src="js/registration-city.js"></script>
    </body>
</html>