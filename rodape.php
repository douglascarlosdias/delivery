 <!-- Page Footer-->

 <footer class="section footer-variant-2 footer-modern context-dark section-top-image section-top-image-dark">
   <div class="footer-variant-2-content">
     <div class="container">
       <div class="row row-40 justify-content-between">
         <div class="col-sm-6 col-lg-4 col-xl-3">
           <div class="oh-desktop">
             <div class="wow slideInRight" data-wow-delay="0s">
               <div class="footer-brand"><a href="index.php"><img src="images/logo-glove.png" alt="" width="220" height="100" /></a></div>
               <p>Desenvolvido pela Glove Delivery</p>
               <ul class="footer-contacts d-inline-block d-md-block">
                 <li>
                   <div class="unit unit-spacing-xs">
                     <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                     <div class="unit-body"><a class="link-phone" href="https://wa.me/5561994065329" target="_blank">61 994065329</a></div>
                   </div>
                 </li>

                 <li>
                   <div class="unit unit-spacing-xs">
                     <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                     <div class="unit-body"><a class="link-location" href="https://ul.waze.com/ul?ll=-15.87992010%2C-48.11438450&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location" target="_blank">>Quadra 415 conjunto 11 casa 24 Samambaia Norte -DF
                         <p><small>Aberto das <?php echo date('H:i', strtotime($abertura)); ?> às <?php echo date('H:i', strtotime($fechamento)); ?></small></p>
                       </a></div>
                   </div>
                 </li>
               </ul>
             </div>
           </div>
         </div>
         <div class="col-sm-6 col-lg-4 col-xl-4">
           <div class="oh-desktop">
             <div class="inset-top-18 wow slideInDown" data-wow-delay="0s">
               <h5>Cadastre-se</h5>
               <p>Insira seu email abaixo para se cadastrar em nosso delivery.</p>
               <form class="rd-form" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="login.php">
                 <div class="form-wrap">
                   <input class="form-input" id="subscribe-form-5-email" type="email" name="email2" data-constraints="@Email @Required">
                   <label class="form-label" for="subscribe-form-5-email">Insira seu email</label>
                 </div>
                 <button class="button button-block button-white" type="submit">Inscrever-se</button>
               </form>
               <div class="group-lg group-middle">
                 <p class="text-white">Siga-nos</p>
                 <div>
                   <ul class="list-inline list-inline-sm footer-social-list-2">
                     <li><a class="icon fa fa-facebook" href="https://www.facebook.com/tiogogapizzaexpress/" target="_blank"></a></li>
                     <li><a class="icon fa fa-twitter" href="#"></a></li>
                     <li><a class="icon fa fa-google-plus" href="#"></a></li>
                     <li><a class="icon fa fa-instagram" href="https://www.instagram.com/tiogogapizzaria/" target="_blank"></a></li>
                   </ul>
                 </div>
                 <select class="form-control form-control-sm" id="" name="bairro">


                   <option value="">Bairros que Entregamos</option>


                   <?php
                    //TRAZER TODOS OS REGISTROS EXISTENTES
                    $res = $pdo->query("SELECT * from locais order by nome asc");
                    $dados = $res->fetchAll(PDO::FETCH_ASSOC);

                    for ($i = 0; $i < count($dados); $i++) {
                      foreach ($dados[$i] as $key => $value) {
                      }

                      $id_item = $dados[$i]['id'];
                      $nome_item = $dados[$i]['nome'];


                      echo '<option value="' . $nome_item . '">' . $nome_item . '</option>';
                    }
                    ?>
                 </select>
               </div>
             </div>
           </div>
         </div>
         <div class="col-lg-3 col-xl-3">
           <div class="oh-desktop">
             <div class="inset-top-18 wow slideInLeft" data-wow-delay="0s">
               <h5>Nossa Loja</h5>
               <div class="row row-10 gutters-10" data-lightgallery="group">
                 <div class="col-6 col-sm-3 col-lg-6">
                   <!-- Thumbnail Classic-->
                   <article class="thumbnail thumbnail-mary">
                     <div class="thumbnail-mary-figure"><img src="images/galeria-loja/01-tumb.jpg" alt="" width="129" height="120" />
                     </div>
                     <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria-loja/01.jpg" data-lightgallery="item"><img src="images/galeria-loja/01.jpg" alt="" width="129" height="120" /></a>
                     </div>
                   </article>
                 </div>
                 <div class="col-6 col-sm-3 col-lg-6">
                   <!-- Thumbnail Classic-->
                   <article class="thumbnail thumbnail-mary">
                     <div class="thumbnail-mary-figure"><img src="images/galeria-loja/02-tumb.jpg" alt="" width="129" height="120" />
                     </div>
                     <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria-loja/02.jpg" data-lightgallery="item"><img src="images/galeria-loja/02.jpg" alt="" width="129" height="120" /></a>
                     </div>
                   </article>
                 </div>
                 <div class="col-6 col-sm-3 col-lg-6">
                   <!-- Thumbnail Classic-->
                   <article class="thumbnail thumbnail-mary">
                     <div class="thumbnail-mary-figure"><img src="images/galeria-loja/03-tumb.jpg" alt="" width="129" height="120" />
                     </div>
                     <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria-loja/03.jpg" data-lightgallery="item"><img src="images/galeria-loja/03.jpg" alt="" width="129" height="120" /></a>
                     </div>
                   </article>
                 </div>
                 <div class="col-6 col-sm-3 col-lg-6">
                   <!-- Thumbnail Classic-->
                   <article class="thumbnail thumbnail-mary">
                     <div class="thumbnail-mary-figure"><img src="images/galeria-loja/01-tumb.jpg" alt="" width="129" height="120" />
                     </div>
                     <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="images/galeria-loja/01.jpg" data-lightgallery="item"><img src="images/galeria-loja/01.jpg" alt="" width="129" height="120" /></a>
                     </div>
                   </article>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

 </footer>