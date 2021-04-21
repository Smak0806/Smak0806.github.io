
import './styles.css';
//import Logo from './logo.svg';
import MyHeader from './components/header';
import TopSection from './components/topsection';
import MidSection from './components/midsection';
import BottomSection from './components/bottomsection';
import MyFooter from './components/footer';

function App() {
  return (
    <div className="App">
      <MyHeader/>
      <TopSection/>
      <MidSection/>
      <BottomSection/>
      <MyFooter/>
    </div>
  );
}

export default App;
