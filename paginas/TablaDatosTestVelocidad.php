<?php  
 $connect = mysqli_connect("127.0.0.1", "user", "pass", "database", 330x);  
 $query = "SELECT * FROM <table>";
 $result = mysqli_query($connect, $query);
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
          <title>Datos del Speedtest</title>
<!--      Scripts para las tablas con DataTable       -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
          <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
          <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
          <meta http-equiv="content-type" content="text/html; charset=UTF-8">
          
      </head>  
      <body>
<!--     Comienza la creacion de la tabla     -->
           <div class="container">  
                <h3 align="center">Datos obtenidos del Speedtest</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>IP Publica</td>  
                                    <td>Operador</td>  
                                    <td>Servidor</td>  
                                    <td>Latencia</td>  
                                    <td>V. Descarga</td>  
                                    <td>V. Subida</td>  
                                    <td>URL</td>
                                    <td>Timestamp</td>
                               </tr>  
                          </thead>  
<!--     PHP para obtener datos de la BD para la tabla      -->
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["pubip"].'</td>  
                                    <td>'.$row["operador"].'</td>  
                                    <td>'.$row["servidorpru"].'</td>  
                                    <td>'.$row["lat"].' ms</td>  
                                    <td>'.$row["download"].' MB/s</td>
                                    <td>'.$row["upload"].' MB/s</td> 
                                    <td>'.$row["url"].'</td> 
                                    <td>'.$row["timestamp"].'</td> 
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
</html>
<!--   Script JS para tablas con paginacion -->
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  