import React, {Component} from 'react';
import './navbarevents.js';
import {FaBars} from 'react-icons/fa';

const navbarItems = [ 
  {"text":"Inicio", "url":"#Inicio"},
  {"text":"Skills", "url":"#Skills"},
  {"text":"Experiencia", "url":"#Experiencia"},
  {"text":"Contacto", "url":"#Contacto"},
  {"text":"Portfolio", "url":"#Portfolio"}
];

function handleClick(e) {    
  e.preventDefault();    
  console.log('The link was clicked.');
  let items = document.getElementsByClassName("navbarItem"); 
  
  console.log(items);

  for (let index = 0; index < items.length; index++) {
    const element = items[index];
    
    if(element.style.display=="none")
      element.style.display = "block";
    else
      element.style.display = "none";
  }

}

class MyHeader extends Component{

  render(){
    return (
        <header className="App-header"> 
          <nav className="navbar" role="navigation">
            
  
                <a id="toggler" onClick={handleClick}><FaBars /></a>
              
                {navbarItems.map((item, i) => {     
                  console.log(item.text);
                  return(<a key={i} href={item.url} className="navbarItem">{item.text}</a>)                 
                })}
              
            
          </nav>
        </header>
    );

  }
}

export default MyHeader;
