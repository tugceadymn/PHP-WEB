<?php 
 
   //dosyamızı çağırıyoruz
  require_once 'inc/functions.php';

   if(array_key_exists('jnavigate', $_GET) || array_key_exists('jnavigate', $_GET)){
       
       sayfa_yukle();

       
   }else {

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Okul Sitesi  <?php  
        
          if(isset($_GET['page'])){
              
              echo $_GET['page'];
              
          }else {
              
              echo 'Site anasayfası';
              
          }
        
        
        ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
      
    <!-- Image and text -->
<nav class="navbar navbar-dark bg-info">
 <div class="container">
 <img src="img\millie.png" class="nav-item" alt="">
  <a class="navbar-brand m-4" href="?page=anasayfa"><h2>Okul Sitesi</h2>
  </a>
  </div>

</nav>

  
      
      
      
        <div class="container pt-5 pb-5"> 
        
        
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light">
        <li class="breadcrumb-item"><a href="?page=anasayfa">Okul Sitesi</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php 
           
          if(isset($_GET['page'])){
              
            echo $_GET['page'];  
              
          }else {
              
              echo 'Anasayfa';
              
          }
            
            ?></li>
        </ol>
        </nav>
        
        
        
        
        
        
        
        
            <div class="row">
                
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                          <ul class="nav flex-column nav-pills">
  <li class="nav-item">
    <a class="nav-link  tetikleyici <?php 
          
         
           echo isset($_GET['page']) ? '' : 'active';
          
          ?>" href="/">Anasayfa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link tetikleyici <?php 
          
          if(isset($_GET['page'])){
              
              echo $_GET['page'] == 'dokuman' ? 'active' : '';
              
          }
          
          ?>" href="https://eokulyd.meb.gov.tr/">E-OKUL GİT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link tetikleyici <?php 
          
          if(isset($_GET['page'])){
              
              echo $_GET['page'] == 'hakkimizda' ? 'active' : '';
              
          }
          
          ?>" href="?page=hakkimizda">Hakkımızda</a>
  </li>
  <li class="nav-item">
    <a class="nav-link tetikleyici <?php 
          
          if(isset($_GET['page'])){
              
              echo $_GET['page'] == 'iletisim' ? 'active' : '';
              
          }
          
          ?>" href="?page=iletisim">İletisim</a>
  </li>
  
</ul>  
                        </div>
                    </div>
                </div>
                
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body" id="main"> 
                           <?php sayfa_yukle();?> 
                        </div>
                    </div>
                </div>
                
            </div>
        
        </div>
        
        <script src="js/jquery-3.5.1.min.js"></script>
     <script src="js/jnavigate.jquery.js"></script>
   
     
<?php include 'inc/footer.php';  
                     
         }
    
    ?>
































