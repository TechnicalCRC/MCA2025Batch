import React from 'react'

export default function CompEvent() {

  let handlerOnClick = (name)=>{
    alert("Hello in ABESIT \n Mr. " + name)
  }

  return (
    <>
     <h1>Events</h1>
     <button onClick={()=>handlerOnClick("Ravi")} style={{width:'100px'}}>Click Here</button>
    </>
  )
}
