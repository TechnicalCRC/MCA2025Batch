export default function FoodPlanner1() {
  let fp = [
    ["fiSun1Breakfast", "fiSun2Lunch", "fiSun3ETea", "fiSun4Dinner"],
    ["fiMon1Breakfast", "fiMon2Lunch", "fiMon3ETea", "fiMon4Dinner"],
    ["fiTue1Breakfast", "fiTue2Lunch", "fiTue3ETea", "fiTue4Dinner"],
    ["fiWed1Breakfast", "fiWed2Lunch", "fiWed3ETea", "fiWed4Dinner"],
    ["fiThurs1Breakfast", "fiThurs2Lunch", "fiThurs3ETea", "fiThurs4Dinner"],
    [
      "fiFri1Breakfast - Milk/Tea, Pav Bhaji",
      "fiFri2Lunch - Dal Makhni, Naan, Salad",
      "fiFri3ETea - Samosa",
      "fiFri4Dinner - Kadhi Rice ",
    ],
    ["fiSat1Breakfast", "fiSat2Lunch", "fiSat3ETea", "fiSat4Dinner"],
  ];

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

    return (
      <>
        <div>Food Planner</div>
        <br />
        <div>Today's Date is '{curDate}'</div>
        <br />
        <div>
          Today is
          <b style={{ color: "orange", fontSize: "26px" }}>{week[curDay]}</b>,
          Today i will eat these :
        </div>
        <ol>
          {fp[curDay].map((item) => (
            <li key={item}>{item}</li>
          ))}
        </ol>
      </>
    );
}