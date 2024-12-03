import AppName from "./AppName";
import InputTodo from "./InputTodo";
import Task from "./Task";
import Task1 from "./Task1";
import Task2 from "./Task2";
import "./Todo.css";

const Todo = () => {
  let TaskTodo = [
    {
      todoName:"Project 1",
      todoDate:"26-11-2024"
    },
    {
      todoName:"Project 2",
      todoDate:"02-12-2024"
    },
    {
      todoName:"Project 3",
      todoDate:"07-12-2024"
    },
  ]
  return (
    <>
      <center>
        <div className="container">
          <AppName appName="TODO App" />
          <InputTodo /> 
          <Task1 todoName={"Complete CRC Project 1"} todoDate={"27-11-2024"} />
          <Task2 todoName={"Assignment CN"} todoDate={"28-11-2024"} />
          
          {TaskTodo.map((item)=>
//            <Task key="" Item={item} />
            <Task key="" todoName={item.todoName} todoDate={item.todoDate} />
          )}

        </div>
      </center>
    </>
  );
};

export default Todo;
