export default function FruitItem({ Item }) {

  let handleOnClick = ()=>{
    alert(Item + ' fruit added to cart....')
  }

  return <li className="list-group-item">{Item}
  <button className="btn btn-primary" style={{width:'50px', float:'right'}}
  onClick={handleOnClick}>Buy</button>
  
  </li>;
}
