import React, {Component} from 'react';

const navbarItems = [ 
  {"text":"Inicio", "url":""},
  {"text":"Skills", "url":""},
  {"text":"Experiencia", "url":""},
  {"text":"Contacto", "url":"#"},
  {"text":"Portfolio", "url":"#"}
];

class MyHeader extends Component{
    
  render(){
    return (
        <header className="App-header"> 
          <nav className="navbar" role="navigation">
            <div id="menuToggle">
          
              <input type="checkbox" />
              
              <span></span>
              <span></span>
              <span></span>
              
          
              <ul id="menu">
                {navbarItems.map((item, i) => {     
                  console.log(item.text);
                  return(<li><a href={item.url} className="navbarItem">{item.text}</a></li>)                 
                })}
              </ul>
            </div>
          </nav>
        </header>
    );

  }
}

export default MyHeader;
