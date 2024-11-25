import React from "react";

const Emp = () => {
  let x = 10;
  let show = function () {
    return <h1>Show function</h1>;
  };

  let arr = [1, 2, 3, 1, 5];
  let count = 0;

  let empdata = ["Vikash", "Dev", "Ankit", "Nikhil", "Nidhi", "Manoj"];

  return (
    <>
      <div>Emp</div>
      <b>hello</b>
      <br />x = {x}
      <br />
      {/* {show()}
      {arr[3]}
      <br />
      {arr[1]}
      <br /> */}
      Array Elements
      <br />
      {arr.map((data) => (
        <div key={count++}>{data}</div>
      ))}
      Employee Record
      <ul style={{ listStyleType: "none",
        backgroundColor:'cyan'
       }}>
        {empdata.map((data) => (
          <li key={data}
            style={{
              display: "inline",
              margin: "6px",
              border: "2px solid blue",
              backgroundColor: "yellow",
            }}>
            {data}
          </li>
        ))}
      </ul>
    </>
  );
};

export default Emp;
