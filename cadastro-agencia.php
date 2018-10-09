<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/typed.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Cadastro da Agência</title>
</head>
<body class = "bg-blue">
    <?php include ("includes/menu.php")?>
    <section id = "formulario-pessoa">
        <div class="r">
            <div class="col-lg-12 pd-150">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 bg-white">
                    <center><h2 class="h2-padding">Cadastro de agência</h2></center>
                    <div class="col-lg-8">
                         <form action="">
                        <div class="form-group col-lg-12">
                            <label for="emp_nome">Nome da Empresa</label>
                            <input type="text" class="form-control" id="emp_nome" placeholder="Digite o nome da empresa" required>
                        </div>
                        <!-- <div class="form-group col-lg-12">
                            <label for="emp_organizacao">Nome da or</label>
                            <input type="text" class="form-control" id="emp_organizacao" placeholder="Digite o nome da agencia" required>
                        </div> -->
                        <div class="form-group col-lg-12">
                            <label for="emp_insc_estadual">Inscrição Estadual</label>
                            <input type="text" class="form-control" id="emp_insc_estadual" placeholder="Digite o numero de sua Inscrição Estadual" required>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="emp_cnpj">CNPJ</label>
                            <input type="text" class="form-control" id="emp_cnpj" placeholder="Digite seu CNPJ">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="emp_celular">Celular</label>
                            <input type="tel" class="form-control" id="emp_celular" placeholder="Digite seu celular" required>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="emp_telefone">Telefone</label>
                            <input type="tel" class="form-control" id="emp_telefone" placeholder="Digite seu telefone" required>
                        </div>
                        <div class="form-group col-lg-9">
                            <label for="emp_end">Endereço</label>
                            <input type="text" class="form-control" id="emp_end" placeholder="Digite seu endereço">
                        </div>
                        <div class="form-group col-lg-3">
                            <label for="emp_end_num">Numero</label>
                            <input type="text" class="form-control" id="emp_end_num" placeholder="Digite aqui">
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="emp_cidade">Cidade</label>
                            <input type="text" class="form-control" id="emp_cidade" placeholder="Digite sua cidade">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="emp_estado">Estado</label>
                            <select name="emp_estado" class="form-control">
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
                        </div>
                         <div class="form-group col-lg-6">
                            <label for="emp_cep">CEP</label>
                            <input type="text" class="form-control" id="emp_cep" placeholder="Digite seu CEP" required>
                        </div>
                         <div class="form-group col-lg-12">
                            <label for="emp_email">Email</label>
                            <input type="email" class="form-control" id="emp_email" placeholder="Digite seu email">
                        </div>
                        <div class="form-group col-lg-12" style="padding-bottom: 20px;">
                            <label for="emp_logo">Logo da empresa</label>
                            <input type="file" id="emp_logo" accept="image/png, image/jpeg" />
                        </div>
                        <div class="form-group col-lg-12">
                            <button type="submit" class="bttn ">Cadastrar</button>
                        </div>
                    </form>
                    </div>
                    <div class="col-lg-4">
                        <h3>Precisa de Ajuda?</h3>
                        <p>
                                Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja
                        </p>

                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>
    
    <?php include ("includes/footer.php")?>
</body>
</html>