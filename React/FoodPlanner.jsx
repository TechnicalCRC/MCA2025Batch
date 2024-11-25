export default function FoodPlanner() {
  let fpSun = ["fiSun1Breakfast", "fiSun2Lunch", "fiSun3ETea", "fiSun4Dinner"];
  let fpMon = ["fiMon1Breakfast", "fiMon2Lunch", "fiMon3ETea", "fiMon4Dinner"];
  let fpTue = ["fiTue1Breakfast", "fiTue2Lunch", "fiTue3ETea", "fiTue4Dinner"];
  let fpWed = ["fiWed1Breakfast", "fiWed2Lunch", "fiWed3ETea", "fiWed4Dinner"];
  let fpThurs = [
    "fiThurs1Breakfast",
    "fiThurs2Lunch",
    "fiThurs3ETea",
    "fiThurs4Dinner",
  ];
  let fpFri = [
    "fiFri1Breakfast - Milk/Tea, Pav Bhaji",
    "fiFri2Lunch - Dal Makhni, Naan, Salad",
    "fiFri3ETea - Samosa",
    "fiFri4Dinner - Kadhi Rice ",
  ];
  let fpSat = ["fiSat1Breakfast", "fiSat2Lunch", "fiSat3ETea", "fiSat4Dinner"];

  let curDate = 
    new Date().getDate() +
    " - " +
    (new Date().getMonth() + 1) +
    " - " +
    new Date().getFullYear();

  let curDay = new Date().getDay();
  let week = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
  ];

  if (curDay == 0)
    return (
      <>
        <div>Food Planner</div>
        <div>{curDate}</div>
        <div>
          Today is{" "}
          <b style={{ color: "red", fontSize: "26px" }}>{week[curDay]}</b>,
          Today i will eat these :
        </div>
        <ol>
          {fpSun.map((item) => (
            <li key={item}>{item}</li>
          ))}
        </ol>
      </>
    );

  if (curDay == 1)
    return (
      <>
        <div>Food Planner</div>
        <div>
          Today is{" "}
          <b style={{ color: "blue", fontSize: "26px" }}>{week[curDay]}</b>,
          Today i will eat these :
        </div>
        <ol>
          {fpMon.map((item) => (
            <li key={item}>{item}</li>
          ))}
        </ol>
      </>
    );

  if (curDay == 2)
    return (
      <>
        <div>Food Planner</div>
        <div>
          Today is{" "}
          <b style={{ color: "green", fontSize: "26px" }}>{week[curDay]}</b>,
          Today i will eat these :
        </div>
        <ol>
          {fpTue.map((item) => (
            <li key={item}>{item}</li>
          ))}
        </ol>
      </>
    );

  if (curDay == 3)
    return (
      <>
        <div>Food Planner</div>
        <div>
          Today is{" "}
          <b style={{ color: "purple", fontSize: "26px" }}>{week[curDay]}</b>,
          Today i will eat these :
        </div>
        <ol>
          {fpWed.map((item) => (
            <li key={item}>{item}</li>
          ))}
        </ol>
      </>
    );

  if (curDay == 4)
    return (
      <>
        <div>Food Planner</div>
        <div>
          Today is{" "}
          <b style={{ color: "cyan", fontSize: "26px" }}>{week[curDay]}</b>,
          Today i will eat these :
        </div>
        <ol>
          {fpThurs.map((item) => (
            <li key={item}>{item}</li>
          ))}
        </ol>
      </>
    );

  if (curDay == 5)
    return (
      <>
        <div>Food Planner</div>
        <br />
        <div>Today's Date is '{curDate}'</div>
        <br />
        <div>
          Today is{" "}
          <b style={{ color: "orange", fontSize: "26px" }}>{week[curDay]}</b>,
          Today i will eat these :
        </div>
        <ol>
          {fpFri.map((item) => (
            <li key={item}>{item}</li>
          ))}
        </ol>
      </>
    );

  if (curDay == 6)
    return (
      <>
        <div>Food Planner</div>
        <div>
          Today is{" "}
          <b style={{ color: "orange", fontSize: "26px" }}>{week[curDay]}</b>,
          Today i will eat these :
        </div>
        <ol>
          {fpSat.map((item) => (
            <li key={item}>{item}</li>
          ))}
        </ol>
      </>
    );
}