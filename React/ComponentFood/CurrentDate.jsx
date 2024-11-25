const CurrentDate = ({currentDate}) => {
  return (
    <div>Today's Date is 
          <span className="bg-success fs-3 text-light"> '{currentDate}' </span></div>
  )
}

export default CurrentDate