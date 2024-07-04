<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">

</head>

<body>
  <?php include 'Dashheader.php'; ?>

  <div class="container bg-warning mb-4">
    <div class="container p-5">
      <h2> Welcome, <?php echo $_SESSION['username']; ?></h2>
      <h3>Hello Here in this DashBoard</h3>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis, eveniet consequuntur iste quas, maxime at quidem quos, odio quod laborum rerum cupiditate obcaecati culpa ipsum accusamus odit facere voluptas sed impedit. Omnis dolores officia tempora, illo itaque error quod dicta tempore quam maiores quaerat harum adipisci laboriosam aspernatur aperiam deserunt?
      </p>
      <h3 class="bg-info">Operation you can handle here are as follows : </h3>
      <ul>
        <li>Add Participant</li>
        <li>Display Participant</li>
        <li>Update Participant</li>
        <li>Delete Participant</li>
      </ul>
    </div>
  </div>

  <?php include 'Dashfooter.php'; ?>

</body>

</html>