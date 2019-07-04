
<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['universitas']) && isset($_POST['cabang'])){
    	$universitas = $_POST['universitas'];
    	$cabang = $_POST['cabang'];
    	if ($cabang == "bola"):
    		$gender = 'putra';
    	else:
    		$gender = $_POST['gender'.$cabang];
    	endif;
		$pemain1 = $_POST['pemain'.$cabang.'1'];
		$pemain2 = $_POST['pemain'.$cabang.'2'];
		$pemain3 = $_POST['pemain'.$cabang.'3'];
		$pemain4 = $_POST['pemain'.$cabang.'4'];
		$pemain5 = $_POST['pemain'.$cabang.'5'];
		$pemain6 = $_POST['pemain'.$cabang.'6'];
		$pemain7 = $_POST['pemain'.$cabang.'7'];
		$pemain8 = $_POST['pemain'.$cabang.'8'];
		$pemain9 = $_POST['pemain'.$cabang.'9'];
		$pemain10 = $_POST['pemain'.$cabang.'10'];
		$pemain11 = $_POST['pemain'.$cabang.'11'];
		$pemain12 = $_POST['pemain'.$cabang.'12'];
		$pemain13 = $_POST['pemain'.$cabang.'13'];
		$pemain14 = $_POST['pemain'.$cabang.'14'];
		$pemain15 = $_POST['pemain'.$cabang.'15'];
		$pemain16 = $_POST['pemain'.$cabang.'16'];
		$pemain17 = $_POST['pemain'.$cabang.'17'];
		$pemain18 = $_POST['pemain'.$cabang.'18'];
		$pemain19 = $_POST['pemain'.$cabang.'19'];
		$pemain20 = $_POST['pemain'.$cabang.'20'];
		$pemain21 = $_POST['pemain'.$cabang.'21'];
		$pemain22 = $_POST['pemain'.$cabang.'22'];
		$pelatih = $_POST['pelatih'.$cabang];
		$official = $_POST['official'];
		$line = $_POST['line'];
		$hp = $_POST['hp'];
		$whatsapp = $_POST['whatsapp'];
		$email = $_POST['email'];


        $query = "INSERT INTO `peserta` (universitas,cabang,gender,pemain1,pemain2,pemain3,pemain4,pemain5,pemain6,pemain7,pemain8,pemain9,pemain10,pemain11,pemain12,pemain13,pemain14,pemain15,pemain16,pemain17,pemain18,pemain19,pemain20,pemain21,pemain22,pelatih,official,line,hp,whatsapp,email) VALUES ('$universitas', '$cabang', '$gender', '$pemain1', '$pemain2', '$pemain3', '$pemain4', '$pemain5' ,'$pemain6', '$pemain7', '$pemain8', '$pemain9', '$pemain10', '$pemain11', '$pemain12', '$pemain13', '$pemain14', '$pemain15', '$pemain16', '$pemain17', '$pemain18', '$pemain19', '$pemain20', '$pemain21', '$pemain22', '$pelatih', '$official', '$line', '$hp', '$whatsapp', '$email')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "Registered Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>



<!DOCTYPE html>

<html>

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Universiade UI 2017</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Vollkorn|Lato" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="icon" type="image/png" href="Pictures/universiade-logo.ico">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102583061-2', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
          <a class="navbar-brand" href="home.php"><img src="Pictures/logo.png" alt="Universiade" style="height:100%;"></a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="home.php">Home</a></li>
              <li><a href="about.php">About Us</a></li>
              <li class="active"><a href="competition.php">Registration</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="competition.php">4 Districts<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="basket.php">Basket</a></li>
                  <li><a href="voli.php">Voli</a></li>
                  <li><a href="soccer.php">Sepak Bola</a></li>
                  <li><a href="futsal.php">Futsal</a></li>
                </ul>
              </li>
              <li><a href="gallery.php">Gallery</a></li>
            </ul>
        </div>
      </div>
    </nav>


	
 <form method="post">
 	  <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
  <h4> Register </h4>


      <label for="universitas">Nama Universitas: </label>
      <input type="text" name="universitas" id="universitas" class="form-control" placeholder="Nama Universitas" required autofocus>

  
  <h4>Cabang</h4>
  <div>
    <div>
      <input type="radio" name="cabang" id="cabang-basket"  value="basket" checked>
      <label for="cabang-basket">Basket</label>
    
      <div class="reveal-if-active">
        <div>
          <div class="vertical-align">
            <input type="radio" name="genderbasket" id="putra-basket" value="putra" checked>
            <label for="putra-basket">Putra</label>
          </div>
          <div class="vertical-align">
            <input type="radio" name="genderbasket" id="putri-basket" value="putri">
            <label for="putri-basket">Putri</label>
          </div>
        </div>

        <label for="pemain-1">Nama Pemain 1</label>
        <input type="text" id="pemain-1" name="pemainbasket1" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-basket">
        <label for="pemain-2">Nama Pemain 2</label>
        <input type="text" id="pemain-2" name="pemainbasket2" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-basket">
        <label for="pemain-3">Nama Pemain 3</label>
        <input type="text" id="pemain-3" name="pemainbasket3" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-basket">
        <label for="pemain-4">Nama Pemain 4</label>
        <input type="text" id="pemain-4" name="pemainbasket4" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-basket">
        <label for="pemain-5">Nama Pemain 5</label>
        <input type="text" id="pemain-5" name="pemainbasket5" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-basket">
        <label for="pemain-6">Nama Pemain 6</label>
        <input type="text" id="pemain-6" name="pemainbasket6" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-basket">
        <label for="pemain-7">Nama Pemain 7</label>
        <input type="text" id="pemain-7" name="pemainbasket7" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-basket">
        <label for="pemain-8">Nama Pemain 8</label>
        <input type="text" id="pemain-8" name="pemainbasket8" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-basket">
        <label for="pemain-9">Nama Pemain 9</label>
        <input type="text" id="pemain-9" name="pemainbasket9" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-basket">
        <label for="pemain-10">Nama Pemain 10</label>
        <input type="text" id="pemain-10" name="pemainbasket10" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-basket">
        <label for="pemain-11">Nama Pemain 11</label>
        <input type="text" id="pemain-11" name="pemainbasket11" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-basket">
        <label for="pemain-12">Nama Pemain 12</label>
        <input type="text" id="pemain-12" name="pemainbasket12" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-basket"> 
        <label for="pelatih">Nama Pelatih</label>
        <input type="text" id="pelatih" name="pelatihbasket" class="form-control" placeholder="Nama Pelatih" data-require-pair="#cabang-basket">
      </div>
      </div>

      <div>
      <input type="radio" name="cabang" id="cabang-bola" value="bola">
      <label for="cabang-bola">Bola</label>
    
      <div class="reveal-if-active">     
        <label for="pemain-1">Nama Pemain 1</label>
        <input type="text" id="pemain-1" name="pemainbola1" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-2">Nama Pemain 2</label>
        <input type="text" id="pemain-2" name="pemainbola2" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-3">Nama Pemain 3</label>
        <input type="text" id="pemain-3" name="pemainbola3" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-4">Nama Pemain 4</label>
        <input type="text" id="pemain-4" name="pemainbola4" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-5">Nama Pemain 5</label>
        <input type="text" id="pemain-5" name="pemainbola5" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-6">Nama Pemain 6</label>
        <input type="text" id="pemain-6" name="pemainbola6" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-7">Nama Pemain 7</label>
        <input type="text" id="pemain-7" name="pemainbola7" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-8">Nama Pemain 8</label>
        <input type="text" id="pemain-8" name="pemainbola8" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-9">Nama Pemain 9</label>
        <input type="text" id="pemain-9" name="pemainbola9" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-10">Nama Pemain 10</label>
        <input type="text" id="pemain-10" name="pemainbola10" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-11">Nama Pemain 11</label>
        <input type="text" id="pemain-11" name="pemainbola11" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-12">Nama Pemain 12</label>
        <input type="text" id="pemain-12" name="pemainbola12" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola"> 
        <label for="pemain-13">Nama Pemain 13</label>
        <input type="text" id="pemain-13" name="pemainbola13" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-14">Nama Pemain 14</label>
        <input type="text" id="pemain-14" name="pemainbola14" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-15">Nama Pemain 15</label>
        <input type="text" id="pemain-15" name="pemainbola15" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-16">Nama Pemain 16</label>
        <input type="text" id="pemain-16" name="pemainbola16" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-17">Nama Pemain 17</label>
        <input type="text" id="pemain-17" name="pemainbola17" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-18">Nama Pemain 18</label>
        <input type="text" id="pemain-18" name="pemainbola18" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-19">Nama Pemain 19</label>
        <input type="text" id="pemain-19" name="pemainbola19" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-20">Nama Pemain 20</label>
        <input type="text" id="pemain-20" name="pemainbola20" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-21">Nama Pemain 21</label>
        <input type="text" id="pemain-21" name="pemainbola21" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-22">Nama Pemain 22</label>
        <input type="text" id="pemain-22" name="pemainbola22" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-bola">
        <label for="pemain-pelatih">Nama Pelatih</label>
        <input type="text" id="pelatih" name="pelatihbola" class="form-control" placeholder="Nama Pelatih" data-require-pair="#cabang-bola">
      </div>
      </div>

      <div>
      <input type="radio" name="cabang" id="cabang-voli" value="voli">
      <label for="cabang-voli">Voli</label>
    
      <div class="reveal-if-active">
        <div>
          <div class="vertical-align">
            <input type="radio" name="gendervoli" id="putra-voli" value="putra" checked>
            <label for="putra-voli" >Putra</label>
          </div>
          <div class="vertical-align">
            <input type="radio" name="gendervoli" id="putri-voli" value="putri">
            <label for="putri-voli">Putri</label>
          </div>
        </div>
        <label for="pemain-1">Nama Pemain 1</label>
        <input type="text" id="pemain-1" name="pemainvoli1" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-voli">
        <label for="pemain-2">Nama Pemain 2</label>
        <input type="text" id="pemain-2" name="pemainvoli2" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-voli">
        <label for="pemain-3">Nama Pemain 3</label>
        <input type="text" id="pemain-3" name="pemainvoli3" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-voli">
        <label for="pemain-4">Nama Pemain 4</label>
        <input type="text" id="pemain-4" name="pemainvoli4" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-voli">
        <label for="pemain-5">Nama Pemain 5</label>
        <input type="text" id="pemain-5" name="pemainvoli5" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-voli">
        <label for="pemain-6">Nama Pemain 6</label>
        <input type="text" id="pemain-6" name="pemainvoli6" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-voli">
        <label for="pemain-7">Nama Pemain 7</label>
        <input type="text" id="pemain-7" name="pemainvoli7" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-voli">
        <label for="pemain-8">Nama Pemain 8</label>
        <input type="text" id="pemain-8" name="pemainvoli8" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-voli">
        <label for="pemain-9">Nama Pemain 9</label>
        <input type="text" id="pemain-9" name="pemainvoli9" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-voli">
        <label for="pemain-10">Nama Pemain 10</label>
        <input type="text" id="pemain-10" name="pemainvoli10" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-voli">
        <label for="pemain-11">Nama Pemain 11</label>
        <input type="text" id="pemain-11" name="pemainvoli11" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-voli">
        <label for="pemain-12">Nama Pemain 12</label>
        <input type="text" id="pemain-12" name="pemainvoli12" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-voli"> 
        <label for="pelatih">Nama Pelatih</label>
        <input type="text" id="pelatih" name="pelatihvoli" class="form-control" placeholder="Nama Pelatih" data-require-pair="#cabang-voli">
      </div>
      </div>

    <div>
      <input type="radio" name="cabang" id="cabang-futsal" value="futsal">
      <label for="cabang-futsal">Futsal</label>
    
      <div class="reveal-if-active">
        <div>
          <div class="vertical-align">
            <input type="radio" name="genderfutsal" id="putra-futsal" value="putra" checked>
            <label for="putra-futsal" >Putra</label>
          </div>
          <div class="vertical-align">
            <input type="radio" name="genderfutsal" id="putri-futsal" value="putri">
            <label for="putri-futsal">Putri</label>
          </div>
        </div>
        <label for="pemain-1">Nama Pemain 1</label>
        <input type="text" id="pemain-1" name="pemainfutsal1" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-futsal">
        <label for="pemain-2">Nama Pemain 2</label>
        <input type="text" id="pemain-2" name="pemainfutsal2" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-futsal">
        <label for="pemain-3">Nama Pemain 3</label>
        <input type="text" id="pemain-3" name="pemainfutsal3" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-futsal">
        <label for="pemain-4">Nama Pemain 4</label>
        <input type="text" id="pemain-4" name="pemainfutsal4" class="require-if-active form-control" placeholder="Nama Pemain" data-require-pair="#cabang-futsal">
        <label for="pemain-5">Nama Pemain 5</label>
        <input type="text" id="pemain-5" name="pemainfutsal5" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-futsal">
        <label for="pemain-6">Nama Pemain 6</label>
        <input type="text" id="pemain-6" name="pemainfutsal6" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-futsal">
        <label for="pemain-7">Nama Pemain 7</label>
        <input type="text" id="pemain-7" name="pemainfutsal7" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-futsal">
        <label for="pemain-8">Nama Pemain 8</label>
        <input type="text" id="pemain-8" name="pemainfutsal8" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-futsal">
        <label for="pemain-9">Nama Pemain 9</label>
        <input type="text" id="pemain-9" name="pemainfutsal9" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-futsal">
        <label for="pemain-10">Nama Pemain 10</label>
        <input type="text" id="pemain-10" name="pemainfutsal10" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-futsal">
        <label for="pemain-11">Nama Pemain 11</label>
        <input type="text" id="pemain-11" name="pemainfutsal11" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-futsal">
        <label for="pemain-12">Nama Pemain 12</label>
        <input type="text" id="pemain-12" name="pemainfutsal12" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-futsal"> 
        <label for="pelatih">Nama Pelatih</label>
        <input type="text" id="pelatih" name="pelatihfutsal" class="form-control" placeholder="Nama Pemain" data-require-pair="#cabang-futsal">
      </div>
      </div>
    </div>
  
  <h4>Contact Person</h4>

      <label for="official">Nama Official: </label>
      <input type="text" name="official" id="official" class="form-control" placeholder="Nama Official" required>
      <label for="line">Line: </label>
      <input type="text" name="line" id="line" class="form-control" placeholder="Line" required>
      <label for="hp">No Hp: </label>
      <input type="number" name="hp" id="hp" class="form-control" placeholder="No. Handphone" required>
      <label for="whatsapp">Whatsapp: </label>
      <input type="number" name="whatsapp" id="whatsapp" class="form-control" placeholder="No. Whatsapp" required>
      <label for="email">Email: </label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
  <br>
  <div>
    <input type="submit" class="btn btn-default" value="Submit">
  </div>
      
</form>


    <div class = "footer">
        <div class="contact">
            <div class ="container">
                <div class = "col-md-6">
                    <img src="Pictures/logo-putih.png" alt="logo" width="100%">
                </div>
                <div class = "col-md-6">
                    <div class="footer-info">
                        <p> Contact Us: </p>
                        <p> <img src="Pictures/line.png" alt="Line" width="32px" height="32px"> @ygz3811n </p>
                        <p> <img src="Pictures/instagram.png" alt="Instagram" width="32px" height="32px">  @universiadeui </p>
                        <p> <img src="Pictures/phone.png" alt="Phone" width="32px" height="32px">  085735401015(echa)</p>
                        <p> <img src="Pictures/twitter.png" alt="twitter" width="32px" height="32px">  @universiadeui</p>
                        <p> <img src="Pictures/youtube.png" alt="Youtube" width="32px" height="32px">  Universiade UI 2017</p>
                        <p> #AllinOneNation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="js/index.js"></script>

</body>

</html>