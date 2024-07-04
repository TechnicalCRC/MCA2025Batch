<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:../Login.php');
}
// echo 'Welcome Mr. ' . $_SESSION['username'];
?>
<div class="container-fluid">
  <nav class="navbar navbar-expand-lg bg-body-tertiary mynav">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php">AbesitEventDashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Event_DashBoard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="AddParticipants.php">Add Participants</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="DisplayParticipants.php">Display Participants</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="AddEvents.php">Add Event</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Setting
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item text-info" href="#">Hi <?php echo $_SESSION['username']; ?></a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="Profile.php">Profile</a></li>
              <li><a class="dropdown-item" href="PassChange.php">Password Change</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../Logout.php">Logout</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
</div>

<div class="container">
  <h1 class="text-center"> ABESIT EVENT DASHBOARD</h1>
</div>