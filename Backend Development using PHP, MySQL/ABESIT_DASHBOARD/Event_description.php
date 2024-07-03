<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<?php

include('Connection.php'); // include 'Connection.php';

$event_id = $_REQUEST['event_id'];

$sql =  "select * from event_tb where event_id=$event_id";
$result = $con->query($sql);

$row = $result->fetch_assoc();

//  $event_id = $row['event_id'];
$event_name = $row['event_name'];
$event_desc = $row['event_desc'];
$event_image = $row['event_image'];

?>
<?php include 'header.php'; ?>
   
  <div class="container-fluid bg-warning">
    <div class="container p-5">
      <h2><?php echo $event_name; ?></h2>
      <p><?php echo $event_desc; ?> </p>
      <a href="#desc" class="btn btn-dark">Read More</a>
    </div>
  </div>



  <div class="container-fluid slider mt-2" style="margin-bottom:30px">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="pic/1.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="pic/2.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="pic/4.jpeg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <h1 class="text-center">Event Decription</h1>

  </div>

   <div class="container text-center bg-info">
     <h2><?php echo $event_name;  ?></h2>
     <div class="row">
      <div class="col">
           <img src="pic/5.jpeg" alt="" class="w-75" style="border:30px groove green">
      </div>
     </div>

     <div class="row" id="desc">
      <div class="col">
          <h1> <?php echo $event_name; ?>  </h1>
          <img src="<?php echo $event_image; ?>" alt="" class="w-100" style="border:20px solid red">
          <p style="font-size:20px; text-align:justify;"> <?php echo $event_desc; ?>
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque corporis, voluptatem impedit ratione, minima fuga aut laboriosam fugiat error corrupti nam incidunt inventore id, magni at. Eligendi vitae nostrum distinctio at minus numquam tempora, quis nemo illo ullam dolorem obcaecati aut ducimus laudantium modi doloribus! Illo quam deserunt incidunt in delectus sit dolorem nulla molestiae? Illo at eligendi ipsa. Molestiae dolor, neque in ab dignissimos assumenda et iure pariatur id, illum tempora fuga voluptatem delectus unde suscipit quos. At repudiandae blanditiis maiores earum assumenda alias maxime beatae incidunt officiis fuga, repellat adipisci ut nisi pariatur ea accusantium ratione aliquid necessitatibus fugit saepe voluptatem quod. Deleniti laboriosam ducimus illo quisquam eius suscipit nisi nemo voluptas voluptate dolores. Deserunt animi facilis vitae. Minima sed voluptas culpa modi? Temporibus minima laborum suscipit adipisci dignissimos ipsa ea, ullam possimus cum modi fugit architecto voluptatum explicabo soluta asperiores quod, ut distinctio unde harum fugiat! Temporibus illum tempore velit tenetur eligendi. Hic magni laboriosam non consequuntur atque qui quo nihil eum nesciunt, at itaque laudantium omnis enim! Beatae eos deserunt alias excepturi, esse quidem et veritatis dignissimos molestias? Incidunt, fugiat quos. Laborum quis suscipit, commodi quia maxime illo, magnam asperiores fuga sint iste, odio vel autem sapiente dolor quibusdam accusantium exercitationem repellat earum. Animi doloremque nesciunt quisquam illo, sapiente veritatis, distinctio praesentium consectetur esse quam natus, reiciendis officiis ex earum? Voluptates omnis cumque ipsum aut veniam rem laudantium provident ullam ab mollitia aliquam commodi animi sapiente dicta nulla sunt necessitatibus iste, velit, enim inventore. Dolorem incidunt distinctio modi provident ea officiis quibusdam, quo, quos sapiente fugiat consequuntur maiores reiciendis voluptate ullam? Expedita sunt, eum explicabo autem veritatis quis fugit sint enim necessitatibus sequi ad earum non, iste laboriosam doloribus. Optio, natus numquam. Vitae modi obcaecati voluptatem officia nisi pariatur, explicabo architecto nam cumque non mollitia ipsam minus facere corrupti autem libero animi vero. Ipsa perspiciatis perferendis voluptates natus. Cupiditate voluptas nisi cumque doloremque, ab labore perspiciatis repellat recusandae corrupti esse voluptatum excepturi vitae ut mollitia voluptates. Voluptatum, autem eaque a quos maiores quae porro ullam quis blanditiis debitis itaque molestias officia cumque, quaerat voluptas distinctio animi! Accusamus, cumque beatae repellat est ad doloremque. Doloribus nulla itaque dignissimos molestiae tempora dolorum ratione tenetur adipisci enim deserunt dolore quia recusandae impedit dolor ipsa, eos asperiores quaerat optio. Iure illo exercitationem fuga, eius natus quaerat vero minus fugit debitis accusamus? Minus optio iusto laudantium quis veniam possimus enim laboriosam consectetur, tenetur illo quod ut odio laborum inventore aut voluptatem fugiat maxime similique ratione sapiente molestiae odit eius ipsum. Sapiente aliquam, velit sit quia vero voluptates, doloribus odit dicta a quam facere nemo, commodi magnam quis id expedita quas quasi quaerat laudantium pariatur libero quibusdam! Reprehenderit ipsa necessitatibus distinctio odit fuga debitis molestiae ipsum numquam molestias pariatur voluptate doloremque, dolores atque recusandae inventore iure non commodi laboriosam porro, ullam saepe accusantium? Iste assumenda ad eius labore reprehenderit repellendus deserunt blanditiis ex, suscipit beatae error itaque repellat nemo corrupti! Harum, eum. Praesentium harum exercitationem blanditiis adipisci vitae voluptatem! Molestias, error adipisci.
          </p>
      </div>
     </div>
   </div>
   <h1 class="text-center">Thanks for your precious time.</h1>



  <?php include 'footer.php'; ?>


</body>

</html>