import React, {Component} from 'react';

class MyHeader extends Component{
    
  render(){
    return (
      <header className="App-header">
        <div className="logo-banner"></div>
        <nav className="navbar">
          <a href="#Inicio">Inicio</a>
          <a href="#Skills">Skills</a>
          <a href="#Experiencia">Experiencia</a>
          <a href="#Contacto">Contacto</a> 
        </nav>
      </header>
    );
  }

}

export default MyHeader;
