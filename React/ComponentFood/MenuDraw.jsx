const MenuDraw = ({weekData, currentDay, foodMenu}) => {
  return (
    <>
      <div>
        Today is
        <b style={{ color: "orange", fontSize: "26px" }}>{weekData[currentDay]}</b>,
        Today i will eat these :
      </div>
      <ol className="text-white bg-secondary">
        {foodMenu[currentDay].map((item) => (
          <li key={item} className="bg-warning my-2">
            {item}
          </li>
        ))}
      </ol>
    </>
  );
};

export default MenuDraw;
