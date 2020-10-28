  <!-- Header Start Here -->
        <header id="header">
            <div class="header-area">
                <div class="container">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="user-area">
                          <ul>
                            <li><a href="#" data-toggle="modal" data-target=".registerpage"> Register</a></li>
                            <li><a href="#" data-toggle="modal" data-target=".loginpage"> Login</a></li>
                          </ul>
                          <!--Register page-->
                          <div class="modal fade registerpage" tabindex="-1" role="dialog">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-body registerpage-body  text-center">
                                  <span class="close-form close" data-dismiss="modal"><i class="fa fa-close"></i></span>
                                  <h1>Register To <span>Zooks</span></h1>
                                  <p>Already a member? <a href="#"> Sign In</a></p>
                                  <div class="btn-login-with">
                                    <span><i class="fa fa-facebook"></i></span>
                                    <a href="#">Register with Facebook</a>
                                  </div>
                                  <form>
                                    <fieldset>
                                      <input type="email" placeholder="E-mail Address"/>
                                      <input type="password" placeholder="Password"/>
                                      <label>At least 6 characters.</label>
                                      <button type="submit">Register <span><i class="fa fa-chevron-circle-right"></i></span></button>
                                    </fieldset>
                                  </form>
                                  <img src="<?php echo SITE_URL;?>/images/register.jpg" alt=""/>
                                  <div class="form-footer">
                                    <a href="#"><p>Continue and create account after <i class="fa fa-chevron-circle-right"></i></p></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--End: Register page-->
                          <!--login page-->
                          <div class="modal fade loginpage" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-body loginpage-body  text-center">
                                  <span class="close-form close" data-dismiss="modal"><i class="fa fa-close"></i></span>
                                  <h1>Sign In To <span>Zooks</span> Cinema</h1>
                                  <p>In order to buy your entries please sign in</p>
                                  <div class="login-left">
                                    <div class="btn-login-with">
                                      <span><i class="fa fa-facebook"></i></span>
                                      <a href="#">Connect with Facebook</a>
                                    </div>
                                    <form>
                                      <fieldset>
                                        <input type="email" placeholder="E-mail Address"/>
                                        <input type="password" placeholder="Password"/>
                                        <button type="submit">Sign In To <span><i class="fa fa-chevron-circle-right"></i></span></button>
                                        <a href="#" class="short-link">Forgot Password?</a>
                                      </fieldset>
                                    </form>
                                    <a href="#" class="short-link">Not a member already?</a>
                                    <div class="btn-login-with">
                                      <span><i class="fa fa-facebook"></i></span>
                                      <a href="#">Register with Facebook</a>
                                    </div>
                                    <form>
                                      <fieldset>
                                        <button type="submit">Register <span><i class="fa fa-chevron-circle-right"></i></span></button>
                                      </fieldset>
                                    </form>
                                  </div>
                                  <div class="login-right">
                                    <img src="<?php echo SITE_URL;?>/images/login.jpg" alt="login" />
                                  </div>
                                  <div class="form-footer">
                                    <a href="#"><p>Continue and create account after <i class="fa fa-chevron-circle-right"></i></p></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--End: login page-->
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="logo-area">
                                <a href="./"><img src="<?php echo SITE_URL;?>/images/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-11 col-xs-11">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="./">Home</a></li>
                                        <li><a href="trailers.html">Trailers</a></li>
                                        <li><a href="shows.html">Shows</a></li>
                                        <li><a href="rent.html">Rent The Cinema</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="show-details.html">Show Details</a></li>
                                                <li><a href="buy-movie-ticket.html">Purchase Your Entry</a></li>
                                                <li><a href="calender.html">Movie Calender</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                         <li ><a data-toggle="modal" data-target="#cartModal" class="nav-link"><i class="fa fa-shopping-cart"></i>[<?php if(isset($_SESSION['shopping_cart']) && !empty($_SESSION['shopping_cart'])){ echo count($_SESSION['shopping_cart']);}else{ echo "0";}?>]</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <div class="header-right">            
                                <div class="search-area"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                             <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><a href="trailers.html">Trailers</a></li>
                                        <li><a href="shows.html">Shows</a></li>
                                        <li><a href="rent.html">Rent The Cinema</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="show-details.html">Show Details</a></li>
                                                <li><a href="buy-movie-ticket.html">Purchase Your Entry</a></li>
                                                <li><a href="calender.html">Movie Calender</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li ><a data-toggle="modal" data-target="#cartModal" class="nav-link"><i class="fa fa-shopping-cart"></i>[<?php if(isset($_SESSION['shopping_cart']) && !empty($_SESSION['shopping_cart'])){ echo count($_SESSION['shopping_cart']);}else{ echo "0";}?>]</a></li>
                                    </ul>
                                </nav>
                            </div>          
                        </div>
                    </div>
                </div>
            </div>            
            <div class="search-box-area">
                <div class="container">
                      <div class="row">                          
                          <div class="search-form">
                              <form>
                                  <div class="col-sm-12">
                                      <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Search Here...">
                                          <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>              
            </div>
        </header>
        <!-- Header End Here -->

        	<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">
          Detalhe Carrinho
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <?php if(!empty($_SESSION['shopping_cart'])){?>
		  <div class="container-fluid">
			<div class="row">
			<div class="col-md-6"><h6>Produto</h6></div>
			<div class="col-md-2"><h6>Preço</h6></div>
			<div class="col-md-1"><h6>Qtd</h6></div>
			<div class="col-md-2"><h6>Total</h6></div>
			<div class="col-md-1"><h6>Ação</h6></div>
			</div>
			<hr>
			<?php 
			  $total = 0;
			  foreach($_SESSION['shopping_cart'] as $key => $produto_modal){
			  ?>
			<div class="row">
			<div class="col-md-6"><?php echo $produto_modal['nome_produto'];?></div>
			<div class="col-md-2">R$ <?php echo number_format($produto_modal['valor_produto'],2,',','.');?></div>
			<div class="col-md-1"><?php echo $produto_modal['quantidade_produto'];?></div>
			<div class="col-md-2">R$ <?php echo number_format($produto_modal['quantidade_produto'] * $produto_modal['valor_produto'],2,',','.');?></div>
			<div class="col-md-1"><a href="?action=delete&id=<?php echo $produto_modal['id'];?>" class="btn btn-danger ">
                  <i class="fa fa-close"></i>
                </a></div>
			</div>
			<?php $total = $total + ($produto_modal['quantidade_produto'] * $produto_modal['valor_produto']);?>
			<?php }?>
			<hr>
		  </div>
        <div class="d-flex justify-content-end">
			
          <h5>Total: <span class="price text-success">R$ <?php echo number_format($total,2,',','.')?></span></h5>
        </div>
		<?php }else{?>
		<h3>Nenhum produto no carrinho!</h3>
		<?php }?>
      </div>
      <div class="modal-footer border-top-0 d-flex justify-content-between">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		<?php if(!empty($_SESSION['shopping_cart'])){
			if(count($_SESSION['shopping_cart']) > 0){
			?>
        <a href="carrinho" class="btn btn-success">Carrinho</a>
		<?php } }?>
      </div>
    </div>
  </div>
</div>