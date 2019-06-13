<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
	<h1>Hello, world 2!</h1>

<!-- te sākas cita pasaule	 -->
<?php

$mainigais = 2;
echo $mainigais;
echo '<br> ';
echo $mainigais;


$array3 = [
  ['name' => 'Linda', 'age' => 23],
  ['name' => 'Janis', 'age' => 30],
  ['name' => 'Soffia', 'age' => 27],  
];
echo $array3[0]['name'];
echo '<br><br>';
echo $array3[1]['age'];


$array4 = [
  ['name' => 'Linda', 'age' => 23],
  [
    'name' => 'Janis',
    'age' => [
      'original' => 20,
      'visual' => 15,
    ]
  ],
  ['name' => 'Soffia', 'age' => 27],  
];
echo $array4[0]['name'];
echo '<br><br>';
echo $array4[1]['age']['original'];


$string1 = "Lorem ipsum";
$string2 = "Lorem";

$result = strpos($string1, $string2);

var_dump($result);

if ($result == false) {
  echo 'Neko neatradu!';
} else {
  echo 'Atradu!' . $result;
}

echo '<br><br>';
$_KRISTINE = 'Mans mainīgais Kristīne';
echo $_KRISTINE;

echo '<h1>Yolo</h1>';


// $SETTINGS = [
//   'db_pass' => 'qwert',
// ]
?>

<!-- No datubāzes gribam izvadīt kaudzi ar blogu ierakstiem (virsrakstiem) -->
<div class="row">
  <?php
    $blogposts = [
      'Lorem-0',
      'Lorem-1',
      'Lorem-2',
      'Lorem-3',
      'Lorem-4',
      'Lorem-5',
      'Lorem-6',
      'Lorem-7',
      'Lorem-8',
      'Lorem-9',
    ];

    // 1.variants
    // taisām ciklu, kurš izpildīsies tik reizes, cik garš ir masīvs (šajā piemērā 10 reizes), iekopējam to bloga struktūras daļu, kas atkārtojas (zemāk zaļā), un katru rindiņu izvadām ar echo kā stringu
    foreach ($blogposts as $key => $blogItem) {
    echo '<div class="col-3">';
      echo '<h5>' . $blogItem . '</h5>';
      echo '<a href="' . $key . '">Link</a>';
    echo '</div>';
    }

  ?>
</div>

<br>
<br>
<br>

<!-- Tagad mēģinām darīt līdzīgi ar asociatīvo masīvu, iepriekš bija vienkārši -->
<div class="row">
    <?php
    $otrsBlogposts = [
      ['title' => 'Lorem-0', 'link' => '/lolo0'],		
			['title' => 'Lorem-1', 'link' => '/lolo1'],
      ['title' => 'Lorem-2', 'link' => '/lolo2'],
    ];

    foreach ($otrsBlogposts as $item) {
      echo '<div class="col-3">';
        echo '<h5>' . $item['title'] . '</h5>';
        echo '<a href="' . $item['link'] . '">Link</a>';
      echo '</div>';
      echo "\n";
      }

  ?>    
</div>

<br>
<br>
<br>

<!-- 2.variants -->
<!-- PHP alternatīvajā sintaksē dažādus foreach ciklus var celt ārā no kopējās struktūras. Šeit jau var ievērot html struktūru: ar atsitieniem no malām, strukturēti, koka formā. Šo ir vieglāk saprast. -->
<div class="row">
  <?php 
    foreach ($otrsBlogposts as $item):
  ?> 

      <div class="col-3">
          <h5><?= $item['title'] ?></h5>
          <h5><?php echo $item['title']; ?></h5>
          <!-- abas augšējās rindiņas nozīmē vienu un to pašu, bet otrā ir bez saīsinājumiem -->
          <a href="<?= $item['link'] ?>">Link</a>
        </div>

  <?php
    endforeach;
  ?>
</div>


<!-- Šī struktūra vairs nav vajadzīga, lai izvadītu bloga ierakstus, jo šo struktūru iekļāvām foreach ciklā.
<div class="row">
  <div class="col-3">
    <h5>Nosaukums</h5>
    <a href="">Link</a>
  </div>
  <div class="col-3">
    <h5>Nosaukums</h5>
    <a href="">Link</a>
  </div>
  <div class="col-3">
    <h5>Nosaukums</h5>
    <a href="">Link</a>
  </div>
  <div class="col-3">
    <h5>Nosaukums</h5>
    <a href="">Link</a>
  </div>
</div> -->



<script>
window.location;
</script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>