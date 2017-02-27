
<?php
 $fileData = file_get_contents(__DIR__ . '/phone_book.json');
 $data = json_decode($fileData, true);
 ?>
 <!doctype html>
 <html lang="en">
 <head>
   <meta charset="utf-8">
   <meta name="viewport"
   content="width-device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Телефонный справочник</title>
 </head>
 <body>
   <table border="1" rules="all" width="360px" height="80px">
        <tr>
         <td width="90px" height="20px">Имя</td>
         <td width="90px" height="20px">Фамилия</td>
         <td width="90px" height="20px">Адрес</td>
         <td width="90px" height="20px">Номер телефона</td>
        </tr>
        <?php foreach ($data as $item) { ?>
         <tr>
           <td width="90px" height="20px"><?= $item['firstName'] ?></td>
           <td width="90px" height="20px"><?= $item['lastName'] ?></td>
           <td width="90px" height="20px"><?= $item['address'] ?></td>
           <td width="90px" height="20px"><?= $item['phoneNumber'] ?></td>
         </tr>
         <?php } ?>
       </table>
 </body>
 </html>
