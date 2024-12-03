/* eslint-disable react/prop-types */
export default function Task1({todoName, todoDate}) {
//  let todoName = "Complete CRC Project 1";
//  let todoDate = "26-11-2024";

  return (
    <div className="row my-row">
      <div className="col-6">{todoName}</div>
      <div className="col-4">{todoDate}</div>
      <div className="col-2">
        <button className="btn btn-danger">Delete</button>
      </div>
    </div>
  );
}
