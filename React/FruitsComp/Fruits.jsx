import { useState } from "react";
import FruitItem from "./FruitItem";

export default function Fruits() {
  let list = [
    "Apple",
    "Banana",
    "Strawberry",
    "Blackberry",
    "Kiwi",
    "Melon",
    "Cherry",
  ];

  let [newList, setNewList] = useState(list);

  function handleOnChange() {
    if (event.key === "Enter") {
      newList = event.target.value;
      console.log(newList);
    }
  }
  return (
    <>
      <h1 className="text-center">Fruit List</h1>
      <input type="text" className="w-50 mx-5 m-3" onKeyDown={handleOnChange} />
      <ol className="list-group">
        {list.map((item) => (
          <FruitItem key={item} Item={item} />
        ))}
      </ol>
    </>
  );
}
