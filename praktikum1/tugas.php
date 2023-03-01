<?php
     $ns1 = ['id'=>1, 'nim'=>'01102',  'uts' =>80, 'uas'=>84, 'tugas'=>87, 'nilai akhir'=>89];
     $ns2 = ['id'=>1, 'nim'=>'01103',  'uts' =>79, 'uas'=>86, 'tugas'=>88];
     $ns3 = ['id'=>1, 'nim'=>'01104',  'uts' =>82, 'uas'=>78, 'tugas'=>89];
     $ns4 = ['id'=>1, 'nim'=>'01105',  'uts' =>85, 'uas'=>76, 'tugas'=>90];
    
     $ar_nilai = [$ns1, $ns2 , $ns3 , $ns4];


?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>Dimas Ganteng</h1>



    <table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Nim</th>
      <th scope="col">uts</th>
      <th scope="col">uas</th>
      <th scope="col">tugas</th>
      <th scope="col">nilai akhir</th>
    </tr>
  </thead>
  <tbody>

<?php
    $nomor = 1;
   foreach($ar_nilai as $ns){
          $nilai_akhir = ( $ns ['uts'] + $ns ['uas'] + $ns['tugas']) / 3;

   
?>


    <tr>
        <td> <?= $nomor  ?>  </td>
        <td> <?= $ns['nim'] ?>  </td>
        <td> <?= $ns['uts'] ?> </td>
        <td> <?= $ns['uas'] ?> </td>
        <td> <?= $ns['tugas'] ?> </td>
        <td> <?= number_format($nilai_akhir,2,',',',')   ?> </td>  
    </tr>


    <?php
    }
    ?>
  </tbody>
</table>


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>