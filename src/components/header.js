import React, {Component} from 'react';

class MyHeader extends Component{
  
  static headerItems = {
    "logoUrl" : "#",
    "logoImgSrc" : "imageSrc.png" 
  }
  
  
  render(){
    return (
      <header className="App-header">
        <div className="logo-banner"></div>
        <nav className="navbar">
          <a href="#">Inicio</a>
          <a href="#">Culo</a>
          <a href="#">Pipe</a>
          <a href="#">QK</a>
          <a href="#">Pies</a>
        </nav>
      </header>
    );
  }

}

export default MyHeader;
