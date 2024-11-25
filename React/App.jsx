import Hello from "./Hello.jsx";
import Greet from "./Greet.jsx";
import Image1 from "./Image1.jsx";
import Emp from "./Emp.jsx";
//import FoodPlanner from "./FoodPlanner.jsx";
import FoodPlanner1 from "./FoodPlanner1.jsx";
import FoodPlanner2 from "./FoodPlanner2.jsx";
import Person from "./Person.jsx";
import FoodPlanner from "./ComponentFood/FoodPlanner.jsx";

function App() {
  let nameData="Vikash";
  let courseData="MCA";
  let cityData = "GOA";
  return (
    <>
      <FoodPlanner></FoodPlanner>
     
      {/* <Person name={nameData} course={courseData} city={cityData} /> */}
    </>
  );

  {
    /* <FoodPlanner2></FoodPlanner2> */
  }
}

export default App;
