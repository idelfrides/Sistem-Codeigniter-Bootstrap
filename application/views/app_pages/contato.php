<!-- **********************************************************************************
	Project: This is THE FINAL  ONE on Web Tecnologies subject.
	     In this project we build my a web system using bootstrap 4.0 and others tecnologies

	Tecnologies used: HTML5, CSS3, BOOTSTRAP 4.0, PHP 7,  JAVASCRIPT, jQUERY and MYSQL
	@uthors: IDELFRIDES JORGE | ÉRIC VINÍCIUS | GLHAZYANNO BRAGA | JOSÉ MARIA JAIRO
	Starded Date: 17th May, 2018.
	First parte Finished Date: 5th may, 2018.
	Bootstrap v4.0.0-beta.2 (https://getbootstrap.com)
*********************************************************************************** -->


    <!-- ***************************************************************
                          Form vacancies
    **************************************************************** -->
    <br>
    <div class="title-content-page mt-4 pt-3" id="bg-card">
        <div class="container pb-5">
            <div class="row col-12 mb-4">
                <h3 class="display-4 mx-auto text-muted">Deixe-nos uma mensagem!</h3>
            </div>
            <br>
            <div class="row">
                <form class="row col-10 mx-auto form-control" action="<?=base_url("membro/contactMember");?>" method="post">
                    <div class="col-12">
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="InputName">Nome*:</label>
                                <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Digite seu nome." required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="InputEmail">Email*:</label>
                                <input type="text" class="form-control" name="InputEmail" id="InputEmail" aria-describedby="emailHelp" placeholder="Digite seu E-mail." required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="InputDest">Destinatário*:</label>
                                <select name="InputDestinat" class="form-control" id="InputDest" required>
                                    <option value="-1" selected>Selecione...</option>
                                    <option value="0">Todos os Membros</option>
                                    <option value="1">Éric Vinícius</option>
                                    <option value="2">Glhazyanno Linhares</option>
                                    <option value="3">Idelfrides Jorge</option>
                                    <option value="4">Jairo Chaves</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="exampleFormControlTextarea1">Mensagem*:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"  name="InputMsg" rows="3" required></textarea>
                            </div>
                        </div>

                        <div class="row col-12 mx-auto  pt-2">
                            <button type="submit" class="btn btn-info col-4 mx-auto mb-5">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<br><br><br>
<br><br><br>
<br><br><br>

