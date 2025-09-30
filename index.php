<?php 
    require_once('./header.php');
?>
<main class="corpo">

  <section class="banner">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./assets/img/Banners/banner-1.jpg" class="d-block w-100" alt="croissant e café" />
          <div class="carousel-caption d-block text-white p-3">
            <h5>A melhor Cafeteria do Brasil</h5>
            <p>
              Faça seu pedido e aproveite!
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./assets/img/Banners/banner-2.jpg" class="d-block w-100" alt="croissant e café" />
          <div class="carousel-caption d-block text-white p-3">
            <h5>A melhor Cafeteria do Brasil</h5>
            <p>
              Faça seu pedido e aproveite!
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./assets/img/Banners/banner-3.jpg" class="d-block w-100" alt="croissant, café e grãos" />
          <div class="carousel-caption d-block text-white p-3">
            <h5>A melhor Cafeteria do Brasil</h5>
            <p>
              Faça seu pedido e aproveite!
            </p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </section>

  <section class="destaque">
    <div class="container">

      <div class="row">
        <div class="col-md-4 mb-4 d-flex justify-content-center">
          <div class="card">
            <img src="./assets/img/destaques/destaque-1.jpeg" class="card-img-top" alt="Cappuccino Caseiro">
            <div class="card-body">
              <p class="card-text">Bebidas</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4 d-flex justify-content-center">
          <div class="card">
            <img src="./assets/img/destaques/destaque-2.jpg" class="card-img-top" alt="Sanduíches">
            <div class="card-body">
              <p class="card-text">Sanduíches</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4 d-flex justify-content-center">
          <div class="card">
            <img src="./assets/img/destaques/destaque-3.jpg" class="card-img-top" alt="Sobremesas">
            <div class="card-body">
              <p class="card-text">Sobremesas</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <section class="funcionamento">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-md-3 d-flex justify-content-center"></div>
        <div class="col-md-3 d-flex justify-content-center"></div>
        <div class="col-md-3 d-flex justify-content-center"></div>
        <div class="col-md-3 d-flex justify-content-center"></div>
      </div>

    </div>
  </section>

  <section class="itens_comprados">
    <h5><span>Itens Mais</span> Comprados</h5>

    <div class="container">

      <div class="row justify-content-center">
        <div class="col-md-3 d-flex justify-content-center">
          <div class="card">
            <img src="./assets/img/itens/menu-1.jpeg" class="card-img-top" alt="Tapioca">
            <div class="card-body">
              <p class="card-text">Tapioca</p>
              <p class="card-text-preco">R$10,99 <span>R$12,50</span></p>
              <button>Ir para o menu</button>
            </div>
          </div>
        </div>

        <div class="col-md-3 d-flex justify-content-center">
          <div class="card">
            <img src="./assets/img/itens/menu-2.jpg" class="card-img-top" alt="Frapuccino">
            <div class="card-body">
              <p class="card-text">Frapuccino</p>
              <p class="card-text-preco">R$12,99 <span>R$15,75</span></p>
              <button>Ir para o menu</button>
            </div>
          </div>
        </div>

        <div class="col-md-3 d-flex justify-content-center">
          <div class="card">
            <img src="./assets/img/itens/menu-3.jpg" class="card-img-top" alt="Pão de Queijo">
            <div class="card-body">
              <p class="card-text">Pão de Queijo</p>
              <p class="card-text-preco">R$8,99 <span>R$11,45</span></p>
              <button>Ir para o menu</button>
            </div>
          </div>
        </div>

        <div class="col-md-3 d-flex justify-content-center">
          <div class="card">
            <img src="./assets/img/itens/menu-4.jpeg" class="card-img-top" alt="Misto Quente">
            <div class="card-body">
              <p class="card-text">Misto Quente</p>
              <p class="card-text-preco">R$9,99 <span>R$12,50</span></p>
              <button>Ir para o menu</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="sobre">
    <div class="container">
      <h5>Cafeteria Aurora: <span>O Sabor Que Combina</span> Com Sua Diversão</h5>

      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ullam facilis error amet perferendis
        quam, vel dolorum totam optio maiores dicta hic consequatur facere nihil est? Ad inventore quasi sunt?
      </p>

      <button>Saiba Mais</button>
    </div>
  </section>

</main>
<?php 
    require_once('./footer.php');
?>