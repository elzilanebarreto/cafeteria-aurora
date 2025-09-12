import React from 'react';
import logo from '../assets/logo.png';

function Header() {
  return (
    <header className='cabecalho'>
        <nav className="navbar navbar-expand-lg">
        <div className="container-fluid">
          <a className="navbar-brand" href="#">
            <img src={logo} alt="logo" className="cabecalho__logo" />
          </a>
          <button
            className="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span className="navbar-toggler-icon"></span>
          </button>

          <div className="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div className="navbar-nav mx-auto">
              <a className="nav-link active" href="#">Início</a>
              <a className="nav-link" href="#">Empresa</a>
              <a className="nav-link" href="#">Montar Pedido</a>
              <a className="nav-link" href="#">Fale Conosco</a>
              <a className="nav-link" href="#">Administrador</a>
            </div>

            <div className="icons">
              <div id="cart" className="fas fa-shopping-cart"></div>
              <div id="login" className="fas fa-user"></div>
            </div>

            <div className="carrinho">
              <a href="#" className="btn"> Ir Para O Carrinho </a>
            </div>

            <form action="#" method="post" className="login-form">
              <h3>Acesse sua conta</h3>
              <input
                className="form-control me-2"
                type="email"
                name="email"
                placeholder="Seu E-mail"
              />
              <input
                type="password"
                name="senha"
                className="form-control me-2"
                placeholder="Sua Senha"
              />

              <div className="cabecalho__botao text-center">
                <button className="btn" type="submit">Acessar</button>
                <a href="#" className="btn-cadastro">Criar Conta</a>
              </div>
            </form>
          </div>
        </div>
      </nav>
    </header>
  );
}

export default Header;