<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title> Belajar PHP </title>
    </head>
    <body>
        
        <h1>Logika di PHP</h1>
        
        <?php  
        
        //--------- tipe data boolean ---------
        // $hasil = true;
        // $hasil2 = false;
        
        //--------- of dan else ---------
        // operator Logika == === > >= < <= !=
        //$password = 1000;
        //$password2 = 1001;
        
        //if( $password != $password2 ){
         //   echo "------------------";
         //   echo ' Benar password tidak sama ';
         //   echo "------------------";
         //
         // }else{
         // echo ' salah , password nya'
        //
         //  }
        
       // $uang_programer = 1000;
      //  $keyboard       = 2000;
      //  $uang_designer  = 4000;
        
        // && atau []
        
     //   if($uang_programer > $keyboard
      //      && $uang_designer > $keyboard){
                
      //        echo 'boleh beli keyboard';
       //      }else{
       //        echo 'ngga bisa beli';
       //      }
        
        
        
        
      //  if( $uang_programer > $keyboard){
          //  echo 'dibeli';
        //  }else if ( $uang_designer > $keyboard){
          //    echo 'dibeli oleh designer';
        //  }
          
          //--if bercabang
        //  if($uang_designer >= $keyboard * 2) {
        //      echo 'dibeli duakali oleh designer';
             
            
       //   }
        
       // else{
        //    echo 'ngga cukup';
      //  }
        
        // switch Case
        
        $nama = "Hilman";
        
        switch ($nama) {
            Case 'Endy';
            echo 'namanya endy';
             break;
            Case 'Tiqa';
            echo 'namanya Tiqa';
             break;
            Case 'Hilman';
            echo 'namanya Hilman';
             break;
             default:
                 echo 'tidak ada yang benar ';
        }
        
        
        
        
        ?>
        
        
    </body>
</html>