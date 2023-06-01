     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Área de Atendimento</h4>
                              <p>Atuamos em todos os bairros da cidade de São Paulo através de uma rede acolhedora composta por equipes de enfermagem e de cuidadores profissionais para dar o suporte completo para seu ente querido.
							 </p>
							 <br />
							 <br />
							 <H5>SIGA NOSSAS REDES:</H5>
                              <ul class="social-icon">
                                   <li><a href="https://www.facebook.com/anjosdeluzcuidadoressp" class="fa fa-facebook-square" attr="facebook icon" target="_blank"></a></li>
                                   <!--<li><a href="#" class="fa fa-twitter"></a></li>-->
                                   <li><a href="https://www.instagram.com/anjosdeluzcuidadores" class="fa fa-instagram" target="_blank"></a></li>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Cadastre seu Currículo</h4>
                              <div class="latest-stories">
                                   <div class="stories-info">
                                        <h5>Venha fazer parte da nossa equipe.</h5>
										<br />
									    <p>É importante que você disponibilise um documento que certifique sua aptidão para a função.</p>
									    <br />
                                        <span><a href="trabalhe-conosco.html" class="section-btn btn btn-default smoothScroll">Cadastrar currículo</a></span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Expediente Administração</h4>
                                   <p>Segunda à Sexta<span>08:00 às 18:00</span></p>
                                   <p>Sábado <span>09:00 às 13:00</span></p>
                                   <p>Domingo <span>Somente Urgência</span></p>
                              </div> 
                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i>11 95933 6903</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="info@anjosdeluzcuidadores.com.br">info@anjosdeluzcuidadores.com.br</a></p>
                              </div>

                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Projeto realizado pelo <a rel="nofollow" href="https://www.estudiografenno.com.br" target="_blank">ESTUDIO GRAFENNO</a></p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <!--<div class="footer-link"> 
                                   <a href="#">Laboratory Tests</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>-->
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="<?= $view->getThemePath() ?>/js/jquery.js"></script>
     <script src="<?= $view->getThemePath() ?>/js/bootstrap.min.js"></script>
     <script src="<?= $view->getThemePath() ?>/js/jquery.sticky.js"></script>
     <script src="<?= $view->getThemePath() ?>/js/jquery.stellar.min.js"></script>
     <script src="<?= $view->getThemePath() ?>/js/wow.min.js"></script>
     <script src="<?= $view->getThemePath() ?>/js/smoothscroll.js"></script>
     <script src="<?= $view->getThemePath() ?>/js/owl.carousel.min.js"></script>
     <script src="<?= $view->getThemePath() ?>/js/custom.js"></script>
  
     </div>
       
	 <?php 
  	 Loader::element('footer_required') 
	 ?>

</body>
</html>