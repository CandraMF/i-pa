<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url("assets/template1/mazer-dist/css/bootstrap.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/template1/mazer-dist/vendors/iconly/bold.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/template1/mazer-dist/vendors/perfect-scrollbar/perfect-scrollbar.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/template1/mazer-dist/vendors/bootstrap-icons/bootstrap-icons.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/template1/mazer-dist/css/app.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/template1/dataTables.bootstrap5.min.css")?>">

    <link rel="shortcut icon" href="<?=base_url("assets/template1/mazer-dist/images/favicon.svg")?>" type="image/x-icon">
</head>

<script>
function ambilData(Konten, URL)
{
	$('#popup_overlay').show();	
	Kata = /\s/g
	URL = URL.replace(Kata, '+');
	$(Konten).load(URL);
}
function showPopUp(width)
{
	var panjang=width+2;
	$('#faceboxisi').html('');
	$('#faceboxisi').css('width', width+'px');
	$('#popup').fadeIn('medium');
}
function TglSQL(tgl){
	var tglInd = tgl.split("-");
	var tglSQL = tglInd[2]+"-"+tglInd[1]+"-"+tglInd[0];
	return tglSQL;
}
</script>

<body>
    <div id='popup_overlay'></div>
    <div style='position:fixed;bottom:0;display:none;width:100%;height:100%;z-index:1001;' id='popup'>
        <center>
            <div id="facebox" style='margin-top:5%;'> 
                <div class="faceboxpopup"> 
                
                    <div class="faceboxcontent" id="faceboxisi" style="max-height:550px;overflow-y:auto;overflow-x:visible;">
                        
                    </div>
                            
                </div> 
            </div>
        </center>
    </div>

    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active" >
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="dashboard.html">I-PA
                                <h6><small>Integrated Pharmacy</small></h6>
                            </a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    
                    <?= $_menu ?>
                    
                    <ul class="menu">
                        <li class="sidebar-title">Actions</li>

                        <li class="sidebar-item  ">
                            <a href="<?=base_url('login/logout')?>" class='sidebar-link'>
                                <i class="bi bi-box-arrow-in-left"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3 ">
                <a href="#" class="burger-btn d-block ">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div id="breadcrumb"> <a href="<?=base_url("login/pages/beranda")?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="<?=base_url("login/pages/".$Pr)?>" class="current"><?=$_title?></a> <strong style='color:red'>&nbsp;&nbsp;[ DB : dbipa_<?=$this->session->userdata('SESS_TAHUN')?> , User : <?=$this->session->userdata('SESS_USERNAME')?>  ]</strong></div>   
            </div>
            <div class="page-content">
                
            </div>


