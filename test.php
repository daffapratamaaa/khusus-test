<!DOCTYPE html>
<html>
<meta charset='UTF-8'/>
<meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5' name='viewport'/>
<meta content='IE=edge' http-equiv='X-UA-Compatible'/>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
  <script src="https://unpkg.com/typeit@8.7.0/dist/index.umd.js"></script>
  <script src="https://kit.fontawesome.com/4f3ce16e3e.js" crossorigin="anonymous"></script>
  
<head>
<title>Terimakasih Telah Hadir di dalam Hidupku</title>
<?php date_default_timezone_set("Asia/Jakarta"); if(isset($_POST['sayang'])){ $fp = fopen('daffapratama.txt', 'a'); fwrite($fp, " <div> <p><span>Waktu</span> : ".date("d-M-Y (H:i)")."</p> <p><span>Sayang</span> : ".$_POST["sayang"]."</p> <p><span>Kangen</span> : ".$_POST["kangen"]."</p> <p><span>Pesan</span> : ".$_POST["pesan"]."</p> </div> "); fclose($fp); } if(isset($_GET['jawaban'])){ $fp = fopen('daffapratama.txt', 'r'); echo ' <link rel="stylesheet" href="https://dekatutorial.github.io/19gombal/styleJawaban.css" /> </head> <body> <header> </header> '; while(!feof($fp)){ echo fgets($fp); } echo ' </body> </html> '; fclose($fp); die; } ?>
<link rel="icon" type="image/x-icon" href="https://lh5.googleusercontent.com/p/AF1QipPLTXg_zAogQkFrp0hS1YOMbNle-C-aLYJTDgyZ=w720-h720-p-k-no">
<meta name="description" content="">
<!-- 
  Made with love by Daffa Pratama!
  
     Blog: https://www.daffa-pratama.my.id/
     Instagram: @daffapratamanurardiansyah
     TikTok: @daffa_pratama_
     Email: admin@daffa-pratama.my.id
     
  Thanks to all <3
-->
</head>
<style>
:root {
--ukuran-teks: 16px;
--gaya-font: 'Nunito Sans', sans-serif;
--gaya-font3: 'Nerko One', cursive;
}
@keyframes fanim {0% {background-position: 0% 0%;}25% {background-position: 100% 100%;} 50% {background-position: 0% 100%;} 75% {background-position: 50% 50%;} 100% {background-position: 0% 0%;}}
body{background-color:#000;font-family:var(--gaya-font);padding: 20px 25px;-webkit-user-select: none; -ms-user-select: none; user-select: none;} a{text-decoration:none;}
body::before{content:"\00A9  Daffa Pratama Nur Ardiansyah";color:white;opacity:.2;font-size:10px;position:fixed;bottom:25px;right:25px;z-index:2}
#bodyblur{opacity:.3;position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.3);transition:all 1s ease;} 
#wallpaper{width:100%;height:100%;transform: scale(2);transition:all 1.7s ease;}
#beneranblur{position:fixed;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.3);-webkit-backdrop-filter:blur(0px); backdrop-filter:blur(0px);transition:all 3s ease;}

@keyframes jj{0%  {transform: scale(1.1);} 50% {transform: scale(1.2);} 100% {transform: scale(1.1);}}
@keyframes rts{from {transform:scale(.1);} to {transform:scale(1);}}
@keyframes rto{from {transform:scale(1);} to {transform:scale(1.1);}}
@keyframes aniopa{0% {transform: scale(1);} 50% {transform: scale(.75);} 100% {transform: scale(1);}}
@keyframes rtf{from {transform: rotate(0deg);} to {transform: rotate(360deg);}} @keyframes rt{from {transform: scale(.9);/* transform: rotate(-5deg); */} to {transform: scale(1);/* transform: rotate(5deg); */}}
@keyframes kont{0%  {left:-1px; top:-3px;} 50% {left:1px; top:3px;} 100% {left:-1px; top:-3px;}}

blockquote{position:absolute;opacity:0;visibility:hidden;/*background:var(--warna-bg);border: 1px solid rgba(255, 255, 255, 0.5);border-radius:10px;box-shadow: rgba(255,255,255, 0.3) 0px 7px 29px 0px;*/transform: scale(.1);transition:all .3s ease;margin-left:0;margin-right:0;color:#fff;text-shadow: 0px 2px 2px rgba(0, 0, 0, .8);/*backdrop-filter:blur(2px);*/}
blockquote{width:400px;text-align:left;line-height:1.3em;padding:0}
/*blockquote::before{content:attr(data-text);opacity:.7;font-family: sans-serif;position:absolute;left:8px;top:8px;min-width:15px;font-size:16px;text-align:center}*/
blockquote p{font-size:var(--ukuran-teks);font-weight:400;line-height:1.5em;transition:all .5s ease;margin-left:40px;margin-right:40px}
blockquote > .gaya4{margin-top:15px;font-family:var(--gaya-font3);font-size:16px !important;font-weight:400;color:#FF3E34}
blockquote > .gaya3{font-size:17px;font-weight:700;text-align:center}
blockquote > .gaya2{font-size:15px;font-weight:400}
blockquote > #pesan6, blockquote > #pesan7{text-align:center}
blockquote > #pesanAkhir2, blockquote > #pesanAkhir3{font-family:var(--gaya-font3);font-size:19px !important;}
blockquote > #pesanAkhir, blockquote > #pesanAkhir2, blockquote > #pesanAkhir3{text-align:center;position: absolute;opacity:0;transform: scale(.1);}
blockquote p:not(#opsL, #kalimat, #pesan3, #ketlanjut, .gaya2, .gaya4){display:none;}
blockquote > #opsL{text-align:right;font-size:12px;font-weight:400;line-height:0;margin-top:24px;color:white;opacity:0;}

#Tombol{position:relative;opacity:0;margin:0;display:flex;align-items:left;list-style:none;transform: scale(.1);transition:all 1s ease;}
#Tombol a{cursor:pointer;display:inline-flex;align-items:center; margin:0;margin:12px 0 12px 0;transition:all .2s ease;padding:10px;outline:0;border: .7px solid #808080;border-radius:15px;line-height:15px;background:rgba(0,0,0,.2);color:#fff;font-size:13px;font-weight:700;white-space:nowrap;overflow:hidden;box-shadow: rgba(255,255,255, 0.3) 0px 7px 29px 0px;z-index:1}
#Bn{margin:12px 0 12px 12px !important}

#Content{animation-name:none;animation-duration: 3s;animation-iteration-count: infinite;position:relative;opacity:0;margin-top:50px;width:100%;height:180px;transition:all .7s ease;}
#Content > *{display:flex;align-items:center;text-align:center;justify-content:center;margin-top:1px;}
.kumpulan > img{display:none;background: rgba(255, 255, 255, 0.7);box-shadow: 0 4px 30px rgba(255,255,255, 0.3);backdrop-filter: blur(5px);-webkit-backdrop-filter: blur(5px);border: 1px solid rgba(255, 255, 255, 0.3);border-radius: 10%;padding:10px;width:85px;height:85px;margin-top:20px;}
#ftAwal > img{width:130px;height:130px;margin-bottom:50px;}

#fotolove img{transition:all .5s ease;width:75px;height:75px;padding:0;background:none}
#loveIn img{display:inline-flex;background:none;width:130px;height:130px;transition:all .3s ease;} 
#ket, #ketlanjut{text-shadow: 0px 2px 2px rgba(0, 0, 0, .8);font-size:17px;font-weight:700;color:white}
#ket{margin-top:15px !important;font-size:12px;font-weight:400;opacity:.8}
#ketlanjut{text-align:right;margin-top:25px;font-size:11px;font-weight:400;opacity:0;transition:all .7s ease;}

@keyframes leaves {0% {transform: scale(1.0);} 100% {transform: scale(.9);}}
.lovein{width:40px;height:40px;background:#fff;border-radius:50%;padding:10px;font-size:30px;display:flex;align-items:center;text-align:center;justify-content:center;transition:all .3s ease;}
.lovein:hover{transform: scale(.9);}

.swal2-modal > *{font-size:16px;color:white}
.swal2-title{line-height:1.3em;font-size:17px;text-align:center;padding:15px 30px 0 30px;}
.swal2-timer-progress-bar-container > *{opacity:.7;background:#00B6FF;margin:0 2px}
.swal2-modal{background: rgba(0,0,0, 1);box-shadow: 0 4px 30px rgba(255,255,255, 0.3);border: 1px solid rgba(255, 255, 255, 0.3);border-radius: 8px;max-width:330px;top:-60px;}
.swal2-image{background: rgba(255, 255, 255, 0.5);box-shadow: 0 4px 30px rgba(255,255,255, 0.3);border: 1px solid rgba(255, 255, 255, 0.3);border-radius: 8px;padding:10px;}
.swal2-styled.swal2-confirm, .swal2-styled.swal2-cancel{position: relative;background-color: #4839eb;color: #fff;border-radius:18px;z-index: 1;transition: all 0.2s;}

.fa-heart {opacity:.3;color:white;font-size: 20px;position: absolute;animation:  heartMove linear 1;top: -10vh;z-index: 0;}
@keyframes heartMove {0%{transform: translateY(-10vh) ;} 100%{transform: translateY(100vh) ;}}
.sembunyi, #pesanditolak > *, #kado2, #kado3{display:none !important}

/* Pop-Up Box (Style 2) by Daffa Pratama */ .popSc{position:fixed;top:0;bottom:0;left:0;right:0;padding:20px;background:rgba(255, 255, 255, 0.1);z-index:99980;-webkit-backdrop-filter:blur(10px);backdrop-filter:blur(10px);display:flex;justify-content:center;align-items:center} .popSc.hidden{display:none} .popSc .popBo{position:relative;background:rgba(255, 255, 255, 0.8);-webkit-backdrop-filter:blur(10px);backdrop-filter:blur(10px);max-width:400px;display:flex;justify-content:center;align-items:center;flex-direction:column;padding:30px;border-radius:20px;box-shadow:0 5px 25px rgb(0 0 0 / 20%)} .popSc .popBo svg{display:block;width:50px;height:50px;fill:none !important;stroke:#08102b;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.5} .popSc .popBo h2{margin:10px 0 15px 0;font-size:1.2rem;font-weight:800;color:#08102b} .popSc .popBo p{margin:0;line-height:1.7em;font-size:0.9rem;color:#08102b} .popSc .popBo .popBtn{display:inline-flex;justify-content:center;align-items:center;height:50px;width:50px;outline:none;border:none;background:#482dff;border-radius:50%;margin-top:20px;transition:all .2s ease;-webkit-transition:all .2s ease} .popSc .popBo .popBtn:hover{transform:scale(1.05);-webkit-transform:scale(1.05)} .popSc .popBo .popBtn svg{width:24px;height:24px;stroke:#fff;flex-shrink:0} .popSc .popBo .popBtn svg.r{animation:rotateIcn 1.5s infinite linear;-webkit-animation:rotateIcn 1.5s infinite linear} .popSc{animation:popupBlur .3s ease-in; -webkit-animation:popupBlur .3s} .popSc >*{animation:popupScale .3s ease-in; -webkit-animation:popupScale .3s} .darkMode .popSc{background:rgba(0, 0, 0, 0.1)} .darkMode .popSc .popBo{background:rgba(50, 50, 50, 0.8)} .darkMode .popSc .popBo svg{stroke:#fefefe} .darkMode .popSc .popBo p, .darkMode .popSc .popBo h2{color:#fefefe} @keyframes popupBlur {from{opacity:0}to{opacity:1}} @-webkit-keyframes popupBlur{from{opacity:0}to{opacity:1}} @keyframes popupScale{from{transform:scale(0);animation-timing-function:ease-in;opacity:0}to{transform:scale(1);opacity:1}} @-webkit-keyframes popupScale{from{-webkit-transform:scale(0);-webkit-animation-timing-function: ease-in;opacity:0}to{-webkit-transform:scale(1);opacity:1}} @keyframes rotateIcn{from{transform:rotate(0deg)} to{transform:rotate(359deg)}} @-webkit-keyframes rotateIcn{from{-webkit-transform:rotate(0deg)} to{-webkit-transform:rotate(359deg)}}
/* Toast Notification by Daffa Pratama */ .tNtf span{position:fixed;left:24px;bottom:-70px;display:inline-flex;align-items:center;text-align:center;justify-content:center;margin-bottom:20px;z-index:99981;background:#323232;color:rgba(255,255,255,.8);font-size:14px;font-family:inherit;border-radius:3px;padding:13px 24px; box-shadow:0 5px 35px rgba(149,157,165,.3);opacity:0;transition:all .1s ease;animation:slideinwards 2s ease forwards;-webkit-animation:slideinwards 2s ease forwards} @media screen and (max-width:500px){.tNtf span{margin-bottom:20px;left:20px;right:20px;font-size:13px}} @keyframes slideinwards{0%{opacity:0}20%{opacity:1;bottom:0}50%{opacity:1;bottom:0}80%{opacity:1;bottom:0}100%{opacity:0;bottom:-70px;visibility:hidden}} @-webkit-keyframes slideinwards{0%{opacity:0}20%{opacity:1;bottom:0}50%{opacity:1;bottom:0}80%{opacity:1;bottom:0}100%{opacity:0;bottom:-70px;visibility:hidden}} .darkMode .tNtf span{box-shadow:0 10px 40px rgba(0,0,0,.2)}
</style>
<body>
	
<script language='JavaScript1.2'>
function disableselect(e){
return false
}
function reEnable(){
return true
}
document.onselectstart=new Function ("return false")
if (window.sidebar){
document.onmousedown=disableselect
document.onclick=reEnable
}
</script>
<div class='clear'></div>
<div class='widget HTML' data-version='1' id='HTML2'>
<div class='widget-content'>
<script> var message="Dilarang Copy Paste!";
///////////////////////////////////
function clickIE4(){if (event.button==2){alert(message);return false;}} function clickNS4(e){if (document.layers||document.getElementById&&!document.all){if (e.which==2||e.which==3){alert(message);return false;}}} if (document.layers){document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS4;} else if (document.all&&!document.getElementById){document.onmousedown=clickIE4;} document.oncontextmenu=new Function("swals.fire('Ups!' , 'Dilarang copy paste, ya!' , 'warning');return false")</script>
<div class='clear'></div></div></div>
<div id='toastNotif' class='tNtf'></div>
<script>/*<![CDATA[*/ /* No Internet Connection Script by Daffa Pratama */ function pageReload(){var n=document.querySelector("#noInternet .popBo .popBtn svg");null!=n&&n.classList.add("r"),setTimeout(function(){window.location.reload()},500)};window.addEventListener("offline",function(){document.querySelector("#noInternet").classList.remove("hidden"),document.querySelector("#toastNotif").innerHTML="<span>Tidak ada koneksi internet!</span>"}),window.addEventListener("online",function(){document.querySelector("#noInternet").classList.add("hidden"),document.querySelector("#toastNotif").innerHTML="<span>Kembali online!</span>"}); /*]]>*/</script>
	
   <!-- Ganti Audio di sini -->
   <audio src="https://feeldreams.github.io/terimakasih/terimakasih.mp3" id="linkmp3" class="sembunyi"></audio>
   
   <div id="bodyblur">
     <img src="" id="wallpaper"/>
   </div>
   
   <div id='Content'>

     <div id="ftAwal">
       <!-- Stiker Pembuka -->
       <img src="https://feeldreams.github.io/heart.png" id="ftoAwal"/>
     </div>

     <div id="loveIn">
       <!-- Tombol LOVE --><label class='lovein'>❤️</label>
     </div>
     <p id="ket">Sentuh LOVEnya!</p>

     <div class="kumpulan">
     	<img src="https://feeldreams.github.io/terimakasih/awal.jpg" id="wallpaper1"/>
     	<img src="https://feeldreams.github.io/terimakasih/dua.jpg" id="wallpaper2"/>
         <img src="https://feeldreams.github.io/terimakasih/tiga.jpg" id="wallpaper3"/>
         <img src="https://feeldreams.github.io/terimakasih/empat.jpg" id="wallpaper4"/>
         <img src="https://feeldreams.github.io/terimakasih/lima.jpg" id="wallpaper5"/>
         <img src="https://feeldreams.github.io/terimakasih/enam.jpg" id="wallpaper6"/>
         <img src="https://feeldreams.github.io/perasaanku/pj1.jpeg" id="wallpaper7"/>
         <img src="https://feeldreams.github.io/perasaanku/pj9.jpg" id="wallpaper8"/>
         
         <img src="https://feeldreams.github.io/heart.png" id="ftoAkhir"/>
     </div>
     
     <div><blockquote id='bq'>
       <p id="kalimat" style="text-align:center"></p>
       
       <p id="pesanAkhir" class="gaya4"></p>
       
       <p id="ketlanjut">Klik untuk Lanjut ya!</p>
       
     </blockquote></div>
     
     <!-- Tombol Kirim Pesan -->
     <div id="Tombol">
       <a id="By">&#128140; Balas</a>
     </div>

   </div>

<!-- Jangan Edit Bagian Ini --><script>
  const body = document.querySelector("body");const swalst = Swal.mixin({timer: 2500, allowOutsideClick: false, showConfirmButton: false, timerProgressBar: true, imageHeight: 90,}); audio = new Audio('' + linkmp3.src); ftganti=0;fungsi=0;fungsiAwal=0;function berjatuhan() {const heart = document.createElement("div"); heart.className = "fas fa-heart"; heart.style.left = (Math.random() * 90)+"vw"; heart.style.animationDuration = (Math.random()*3)+2+"s"; body.appendChild(heart);} setInterval(function name(params) {var heartArr = document.querySelectorAll(".fa-heart"); if (heartArr.length > 100) {heartArr[0].remove()}},100);Content.style = "opacity:1;margin-top:14vh"; const swals = Swal.mixin({allowOutsideClick: false, cancelButtonColor: '#FF0040', imageHeight: 80,}); 
  const inip = []; const iniwp = []; iden = 1; iniwp[1] = wallpaper1.src; wallpaper.src = iniwp[1]; iniwp[2] = wallpaper2.src; iniwp[3] = wallpaper3.src; iniwp[4] = wallpaper4.src; iniwp[5] = wallpaper5.src; iniwp[6] = wallpaper6.src; iniwp[7] = wallpaper7.src; iniwp[8] = wallpaper8.src;

inip[1] = "terimakasih telah hadir<br>di dalam hidupku,";
inip[2] = "aku tidak tau lagi<br>harus berkata apa,";
inip[3] = "tapi yang kamu<br>harus tau adalah,";
inip[4] = "bahwa";
inip[5] = "aku sangat bahagia";
inip[6] = "<span style='font-family:var(--gaya-font3);font-size:19px !important'>saat bersamamu <3</span>";

pesanAkhir1 = inip[iden];
pesanAkhir3 = "<br>thank you, and i love uuu";

totalPesan = 6; //Input total pesan (slide) di sini ya!

function waktumuncul(){
	  setTimeout(kalimatakhir,9100);
      setTimeout(kalimatakhir,11800);
      setTimeout(kalimatakhir,14300);
      setTimeout(kalimatakhir,16700);
      setTimeout(kalimatakhir,17500);
      setTimeout(kalimatakhir,18900);
}
pesanAkhir1 = inip[iden];
pesanAkhir3 = "<br>thank you, and i love uuu";

document.getElementById("loveIn").onclick = function() {
      if(fungsiAwal==0){
        loveIn.style="transition:all .8s ease;transform:scale(15);opacity:0";
        ftAwal.style="opacity:0";
        wallpaper.style="transform: scale(1);";
        ket.style="display:none";
        fungsiAwal=1;setTimeout(initengahan,300);
        setTimeout(bqmuncul,400)
      }
    }

aktigeser=0;thisgeser=1;
document.getElementById("bq").onclick = function() {
  if(aktigeser==1){
    setTimeout(kalimatakhir,400);hsementara();
  }
}

  function hsementara(){
    ketlanjut.style="position:relative;";
    thisgeser+=1;aktigeser=0;
  }
  
  function munculkembali(){
    if(thisgeser<totalPesan){
      ketlanjut.style="position:relative;opacity:.8";
      aktigeser=1;
      iden += 1;
      pesanAkhir1 = inip[iden];
    }
    if(thisgeser==totalPesan){setTimeout(mulaiketikA,500);}
  }
  
  function aksiakhir(){
    setTimeout(bqmuncul,400);
  }
  
  function initengahan(){
    loveIn.style="display:none";ket.style="display:none";
    Content.style = "opacity:1;margin-top:7vh";
  }
  
  function bqmuncul(){
      bq.style = "margin-top:0;position:relative;opacity:1;visibility:visible;transform: scale(1);";
      audio.play();waktumuncul();
  }
  
  function tombol(){Tombol.style="opacity:1;transform: scale(1);";fungsi=1;}
  document.getElementById("By").onclick = function() {
    if(fungsi==1){Tombol.style="";menuju();fungsi=0;} 
  }
 
  var i = 1;function defwp(){wallpaper.style="transform: scale(1)";}
  function kalimatakhir(){
  	if(iden>=1){
          if(iden%2==0){wallpaper.style="transform: scale(1)";} else {wallpaper.style="transform: scale(1.5)";}
          wallpaper.src = iniwp[iden];
      }
      kalimat.innerHTML="";
  	new TypeIt("#kalimat", {
      strings: ["" + pesanAkhir1], startDelay: 10, speed: 40, cursor: true,
      afterComplete: function(){
         kalimat.innerHTML = pesanAkhir1;
         iden += 1;
         pesanAkhir1 = inip[iden];
         if(pesanAkhir1==inip[totalPesan+1]){ftoAwal.src=ftoAkhir.src;ftAwal.style="margin-top:80px;transform: scale(.8);transition: all .8s ease";setTimeout(jjfoto,400);setTimeout(tombol,1500)}
         //munculkembali();
      },}).go();
  }
  
  function jjfoto(){ftoAwal.style.animation="jj 1s infinite alternate";}

  function mulaiketikA(){
  setInterval(berjatuhan,300);
  bodyblur.style.opacity=".15";
  pesanAkhir.style="position:relative;opacity:1;visibility:visible;transform: scale(1)";
  new TypeIt("#pesanAkhir", {
  strings: ["" + pesanAkhir3], startDelay: 100, speed: 50, cursor: false, deleteSpeed: 20, breakLines: false, waitUntilVisible: true, lifelike: true,
  afterComplete: function(){
  	 pesanAkhir.style.animation="rto .8s infinite alternate";
      //setTimeout(tombol,700);
  },}).go();
  }
  
  async function menuju(){
  var { value: jawaban } = await swals.fire({
    title: 'Isi Pesan Untukku &#128073;&#128072;', input: 'text', allowOutsideClick: false, showCancelButton: false,
  });
  if(jawaban && jawaban.length < 19){
    window.jawaban = jawaban;
    pesanwhatsapp = jawaban;
    await swals.fire('OK!', 'Kirim jawabannya ke WhatsApp aku, ya!', 'success');
    window.location = "https://api.whatsapp.com/send?phone=&text=" + pesanwhatsapp;
    tombol();
  } else {
    await swals.fire('Ups!', 'Jawaban tidak boleh kosong atau lebih dari 18 karakter, ya!', 'error');jawab();
  }
}
</script>
<div id='noInternet' class='popSc hidden'> <div class='popBo'> <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><line x1='1' x2='23' y1='1' y2='23' /><path d='M16.72 11.06A10.94 10.94 0 0 1 19 12.55' /><path d='M5 12.55a10.94 10.94 0 0 1 5.17-2.39' /><path d='M10.71 5.05A16 16 0 0 1 22.58 9' /><path d='M1.42 9a15.91 15.91 0 0 1 4.7-2.88' /><path d='M8.53 16.11a6 6 0 0 1 6.95 0' /><line x1='12' x2='12.01' y1='20' y2='20' /></svg> <h2>Oops! No Internet!</h2> <p>Sepertinya ada yang salah dengan koneksi internet Anda.<br />Sambungkan ke internet dan mulai menjelajah lagi.</p> <button class='popBtn' onclick='pageReload()'><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><polyline points='23 4 23 10 17 10' /><path d='M20.49 15a9 9 0 1 1-2.12-9.36L23 10' /></svg></button> </div> </div>
</body>
</html>
