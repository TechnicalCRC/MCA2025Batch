export default function Person({ city, name, course }) {
//  let { city, name, course } = props;
  return (
    <>
      <h2>Person Details</h2>
      <p>
        Hello Mr. <b>{name}</b>
      </p>
      <p>
        You are in <strong>{course}</strong>
      </p>
      <p>
        You live in <b>{city}</b>
      </p>
    </>
  );
}
