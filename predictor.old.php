<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rank Predictor</title>

  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap.mini.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />


</head>


<body style="background-color: #FFF">


<h2><p class="head-card" style="height:100"><b>Rank Predictor</b></p></h2>


<div class="instruction-card">

Enter your KEAM rank:<input id="box1" maxlength="5" min="0" required type="text">
Select the Course you need:
<select id="box2">
  <option>AE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
  <option>AG</option>
  <option>AO</option>
  <option>AR</option>
  <option>AU</option>
  <option>BM</option>
  <option>BT</option>
  <option>CE</option>
  <option>CH</option>
  <option>CS</option>
  <option>DS</option>
  <option>EC</option>
  <option>EE</option>
  <option>EI</option>
  <option>FE</option>
  <option>FS</option>
  <option>FT</option>
  <option>IC</option>
  <option>IE</option>
  <option>IT</option>
  <option>MA</option>
  <option>ME</option>
  <option>MP</option>
  <option>MR</option>
  <option>MT</option>
  <option>PO</option>
  <option>PE</option>
  <option>PT</option>
  <option>SB</option>
</select><br><br>
<div align="center">
<button class="btn btn-primary" onclick="myfunction(1)">Submit</button>
</div>

<div id="space1" style="text-align: center;"></div>
<div id="space2" style="text-align: center;"></div>
<div id="space3" style="text-align: center;"></div>
<div id="space4" style="text-align: center;"></div>

</div>
<br>
<br>
<div class="instruction-card">
Do you want to know, you can get allotment on a specific college . Then use the below tool . You can search for a specific college 
with the course you need . College Predictor will find you can get that college or not .
<br>
 Enter your KEAM rank <input id="box3" maxlength="5" min="0" required type="text"><br>
 Select the Course you need

<select id="box4">
  <option>AE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
  <option>AG</option>
  <option>AO</option>
  <option>AR</option>
  <option>AU</option>
  <option>BM</option>
  <option>BT</option>
  <option>CE</option>
  <option>CH</option>
  <option>CS</option>
  <option>DS</option>
  <option>EC</option>
  <option>EE</option>
  <option>EI</option>
  <option>FE</option>
  <option>FS</option>
  <option>FT</option>
  <option>IC</option>
  <option>IE</option>
  <option>IT</option>
  <option>MA</option>
  <option>ME</option>
  <option>MP</option>
  <option>MR</option>
  <option>MT</option>
  <option>PO</option>
  <option>PE</option>
  <option>PT</option>
  <option>SB</option>
</select>
the three letter code of the college you need<input id="box5" maxlength="3" min="0" required type="text">

<button onclick="myfunction(2)">Check here</button><br>
<div id="space5" style="text-align: center;"></div>
<div id="space6" style="text-align: center;"></div>
<div id="space7" style="text-align: center;"></div>
<div id="space8" style="text-align: center;"></div>

</div>






<script>

var cglr = new Array(43);
for (i=0; i <43; i++)
cglr[i] = new Array(29);
var code = new Array(43);
var cnam = new Array(43);
var sub = new Array(29);
var scode;
var rank;
var ccode;
var name;
function initialize()
 {
 sub[0]="Applied Electronics & Instrumentation";
 sub[1]="Agricultural Engineering";
 sub[2]="Aeronautical Engineering";
 sub[3]="Architecture";
 sub[4]="Automobile Engineering";
 sub[5]="Bio Medical Engineering";
 sub[6]="Bio Technology";
 sub[7]="Civil Engineering";
 sub[8]="Chemical Engineering";
 sub[9]="Computer Science & Engineering";
 sub[10]="Dairy Science & Technology";
 sub[11]="Electronics & Communication";
 sub[12]="Electrical & Electronics";
 sub[13]="Electronics & Instrumentation";
 sub[14]="Food Engineering";
 sub[15]="Safety & Fire Engineering";
 sub[16]="Food Technology";
 sub[17]="Instrumentation & Control Engineering";
 sub[18]="Industrial Engineering";
 sub[19]="Information Technology";
 sub[20]="Mechanical Automobile";
 sub[21]="Mechanical Engineering";
 sub[22]="Mechanical Production Engineering";
 sub[23]="Mechatronics Engineering";
 sub[24]="Metallurgy";
 sub[25]="Polymer Engineering";
 sub[26]="Production Engineering";
 sub[27]="Printing Technology";
 sub[28]="Naval Architecture & Ship Building";
 code[0]="IDK";
 code[1]="KKE";
 code[2]="KNR";
 code[3]="KTE";
 code[4]="PKD";
 code[5]="TCR";
 code[6]="TRV";
 code[7]="TVE";
 code[8]="WYD";
 code[9]="MAC";
 code[10]="NSS";
 code[11]="TKM";
 code[12]="KCT";
 code[13]="CDT";
 code[14]="ADR";
 code[15]="CEA";
 code[16]="CEC";
 code[17]="CEK";
 code[18]="CHN";
 code[19]="KNP";
 code[20]="MDL";
 code[21]="PJR";
 code[22]="PTA";
 code[23]="KSD";
 code[24]="LBT";
 code[25]="KGR";
 code[26]="PRN";
 code[27]="PRP";
 code[28]="TKR";
 code[29]="TLY";
 code[30]="VDA";
 code[31]="PEC";
 code[32]="SCT";
 code[33]="UCE";
 code[34]="UCK";
 code[35]="UCC";
 code[36]="MNR";
 code[37]="AAE";
 code[38]="AAP";
 code[39]="ACE";
 code[40]="AIK";
 code[41]="AIC";
 code[42]="AME";

 cnam[0]="Govt Engineering College Painavu Idukki";
 cnam[1]="Govt Engineering College Kozhikode";
 cnam[2]="Govt Engineering College Kannur";
 cnam[3]="Rajiv Gandhi Institute of Technology Pampady Kottayam";
 cnam[4]="Govt Engineering College Sreekrishnapuram Palakkad";
 cnam[5]="Govt Engineering College Thrissur";
 cnam[6]="Govt Engineering College Barton Hill Thiruvananthapuram";
 cnam[7]="College of Engineering Thiruvananthapuram";
 cnam[8]="Govt Engineering College Mananthavady Wayanad";
 cnam[9]="Mar Athanasius College of Engineering Kothamangalam Ernakulam";
 cnam[10]="NSS College of Engineering Akathethara Palakkad";
 cnam[11]="TKM College of Engineering Kollam";
 cnam[12]="Kelappaji College of Agricultural Engineering Tavanur Malappuram";
 cnam[13]="College of Dairy Science and Technology Mannuthy Thrissur";
 cnam[14]="College of Engineering Adoor Pathanamthitta";
 cnam[15]="College of Engineering Attingal Thiruvananthapuram";
 cnam[16]="College of Engineering Pallipuram Cherthala";
 cnam[17]="College of Engineering Kottarakkara Kollam";
 cnam[18]="College of Engineering Chengannur Alappuzha";
 cnam[19]="College of Engineering Karunagapilly Kollam";
 cnam[20]="Model Engineering College Trikkakara Ernakulam";
 cnam[21]="College of Engineering Poonjar Kottayam";
 cnam[22]="College of Engineering Kalloopara Pathanamthitta";
 cnam[23]="LBS College of Engineering Muliyar Kasargod";
 cnam[24]="LBS Institute of Technology for Women Poojappura Thiruvananthapuram";
 cnam[25]="College of Engineering Kidangur Kottayam";
 cnam[26]="College of Engineering Perumon Kollam";
 cnam[27]="College of Engineering & Management Punnapra Alappuzha";
 cnam[28]="College of Engineering Trikaripur Kasargod";
 cnam[29]="College of Engineering Thalassery Kannur";
 cnam[30]="College of Engineering Vadakara Kozhikkode";
 cnam[31]="College of Engineering Pathanapuram Kollam";
 cnam[32]="Sree Chithira Thirunal College of Engineering Pappanamcode Thiruvananthapuram";
 cnam[33]="University College of Engineering Thodupuzha Idukki";
 cnam[34]="University College of Engineering Karivattom Thiruvananthapuram";
 cnam[35]="Calicut University Institute of Engineering Tenhipalam Malappuram";
 cnam[36]="College of Engineering Munnar Idukki";
 cnam[37]="Al Azhar College of Engineering & Technology Thodupuzha Idukki";
 cnam[38]="Al Ameen Engineering College Shoranur Palakkad";
 cnam[39]="Archana College of Engineering Nooranad Alappuzha";
 cnam[40]="Albertian Institute of Science & Technology Kalamassery Kochi";
 cnam[41]="Amal Jyothi College of Engineering Kanjirapilly Kottayam";
 cnam[42]="Ammini College of Engineering Mankara Palakkad";

 for(i=0;i<43;++i)
   for(j=0;j<29;++j)
      cglr[i][j]=0; 
 cglr[0][9]=8332;
 cglr[0][11]=4262;
 cglr[0][12]=5153;
 cglr[0][19]=16421;
 cglr[0][21]=3091;
 cglr[1][0]=9749;
 cglr[1][7]=5402;
 cglr[1][8]=6403;
 cglr[1][11]=6699;
 cglr[1][21]=3975;
 cglr[2][7]=5510;
 cglr[2][9]=8153;
 cglr[2][11]=6530;
 cglr[2][12]=6648;
 cglr[2][21]=3927;
 cglr[3][3]=179;
 cglr[3][7]=5501;
 cglr[3][9]=6103;
 cglr[3][11]=3887;
 cglr[3][12]=5700;
 cglr[3][21]=3396;
 cglr[4][9]=8687;
 cglr[4][11]=6674;
 cglr[4][19]=13499;
 cglr[4][21]=3824;
 cglr[5][3]=140;
 cglr[5][7]=3238;
 cglr[5][8]=3355;
 cglr[5][9]=3758;
 cglr[5][11]=2033;
 cglr[5][12]=3273;
 cglr[5][21]=1671;
 cglr[5][26]=7347;
 cglr[6][7]=5337;
 cglr[6][11]=3195;
 cglr[6][12]=5127;
 cglr[6][19]=11087;
 cglr[6][21]=3411;
 cglr[7][0]=3777;
 cglr[7][3]=42;
 cglr[7][7]=2010;
 cglr[7][9]=1037;
 cglr[7][11]=660;
 cglr[7][12]=1293;
 cglr[7][18]=6563;
 cglr[7][21]=610;
 cglr[8][9]=8369;
 cglr[8][11]=5926;
 cglr[8][12]=4655;
 cglr[9][7]=5307;
 cglr[9][9]=4825;
 cglr[9][11]=4022;
 cglr[9][12]=5148;
 cglr[9][21]=2538;
 cglr[10][7]=5536;
 cglr[10][9]=6336;
 cglr[10][11]=4914;
 cglr[10][12]=5524;
 cglr[10][17]=9708;
 cglr[10][21]=3383;
 cglr[11][3]=100;
 cglr[11][7]=3573;
 cglr[11][8]=4940;
 cglr[11][9]=2588;
 cglr[11][11]=1896;
 cglr[11][12]=2950;
 cglr[11][21]=1581;
 cglr[11][22]=6860;
 cglr[12][1]=9228;
 cglr[12][14]=14012;
 cglr[13][10]=8056;
 cglr[14][9]=18484;
 cglr[14][11]=14749;
 cglr[14][12]=14128;
 cglr[14][21]=8126;
  cglr[15][9]=24453;
 cglr[15][11]=13322;
 cglr[15][12]=18454;
 cglr[16][9]=24152;
 cglr[16][11]=16543;
 cglr[16][12]=20185;
 cglr[17][9]=28655;
 cglr[17][11]=21908;
  cglr[18][9]=12398;
  cglr[18][11]=8812;
 cglr[18][12]=9266;
 cglr[18][13]=22540;
 cglr[19][9]=30691;
  cglr[19][11]=24832;
 cglr[19][12]=22334;
 cglr[19][19]=43991;
 cglr[20][5]=11669;
 cglr[20][9]=3475;
 cglr[20][11]=3214;
 cglr[20][12]=4371;
  cglr[21][9]=25583;
  cglr[21][11]=20923;
 cglr[21][12]=27664;
 cglr[22][9]=21187;
 cglr[22][11]=22607;
 cglr[22][12]=27684;
 cglr[23][7]=10529;
 cglr[23][9]=21201;
  cglr[23][11]=19547;
 cglr[23][12]=21006;
  cglr[23][19]=31204;
 cglr[23][21]=9532;
 cglr[24][0]=17847;
 cglr[24][7]=8808;
 cglr[24][9]=16705;
 cglr[24][11]=7940;
 cglr[24][19]=31897;
  cglr[25][7]=11103;
 cglr[25][9]=18485;
 cglr[25][11]=12831;
 cglr[25][12]=17535;
 cglr[25][13]=35671;
  cglr[25][19]=38610;
 cglr[26][9]=18155;
 cglr[26][11]=15656;
 cglr[26][12]=13590;
 cglr[26][19]=48467;
 cglr[26][21]=9484;
 cglr[27][7]=13911;
 cglr[27][9]=30087;
  cglr[27][11]=23645;
 cglr[27][12]=30627;
 cglr[27][19]=46685;
 cglr[27][21]=13432;
  cglr[28][7]=13350;
  cglr[28][9]=22044;
  cglr[28][11]=15802;
 cglr[28][12]=20632;
 cglr[28][19]=31026;
  cglr[29][9]=16213;
  cglr[29][11]=13317;
 cglr[29][12]=15327;
  cglr[29][19]=25661;
 cglr[29][21]=9908;
 cglr[30][7]=14253;
 cglr[30][9]=21737;
  cglr[30][11]=19726;
 cglr[30][12]=21400;
 cglr[30][13]=32066;
  cglr[30][19]=34422;
 cglr[31][7]=17675;
 cglr[31][9]=35318;
 cglr[31][11]=27515;
 cglr[31][12]=32433;
 cglr[32][6]=19337;
 cglr[32][9]=9431;
 cglr[32][11]=6665;
  cglr[32][20]=8460;
 cglr[32][21]=4238;
 cglr[32][22]=12273;
 cglr[33][9]=30414;
  cglr[33][11]=21725;
 cglr[33][12]=29960;
  cglr[33][19]=48715;
 cglr[33][25]=32953;
 cglr[34][9]=20541;
 cglr[34][11]=12386;
 cglr[34][19]=40045;
 cglr[35][11]=16644;
 cglr[35][12]=15962;
  cglr[35][19]=27357;
 cglr[35][21]=10356;
 cglr[35][27]=38111;
 cglr[36][9]=28757;
 cglr[36][11]=25012;
 cglr[36][12]=25105;
  cglr[36][21]=14190;

 cglr[37][7]=56123;
 cglr[37][9]=58026;
 cglr[37][11]=56126;
 cglr[37][21]=57229;
 cglr[37][26]=58132;
 cglr[38][7]=37429;
 cglr[38][11]=53492;
 cglr[38][12]=58044;
 cglr[38][21]=41842;
 cglr[39][7]=57996;
 cglr[39][9]=56896;
 cglr[39][11]=57083;
 cglr[39][12]=58056;
 cglr[39][21]=50099;
 cglr[40][7]=35389;
 cglr[40][9]=54579;
 cglr[40][11]=57338;
 cglr[40][12]=56030;
 cglr[40][21]=30367;
 cglr[41][4]=45148;
 cglr[41][7]=22969;
 cglr[41][8]=20303;
 cglr[41][9]=37427;
 cglr[41][11]=28252;
 cglr[41][12]=37599;
 cglr[41][19]=55232;
 cglr[41][21]=18729;
 cglr[41][24]=53191;
 cglr[42][7]=55167;
 cglr[42][9]=54789;
 cglr[42][11]=55207;
 cglr[42][12]=20025;
 cglr[42][21]=50076;

} 
function myfunction(ch)
 {
 initialize();
 if(ch==1)
   {
   rank = parseInt(document.getElementById("box1").value);
   //document.write(rank);
   scode = document.getElementById("box2").selectedIndex;
   //document.write(scode);
   var i;
   var temp;
   temp=99999;
   ccode=-1;
   for(i=0;i<43;++i)
     {
     if(cglr[i][scode]<temp)
        if(cglr[i][scode]>rank)
           {
           temp=cglr[i][scode];
           ccode=i;
           }
     }
   if(ccode == -1)
      print(scode,0,1);
   else
      print(scode,ccode,2);
   }
 else
   {
   rank = parseInt(document.getElementById("box3").value);
   scode = document.getElementById("box4").selectedIndex;
   name = document.getElementById("box5").value;
   name = name.toUpperCase();  
   ccode=-1;
   for(i=0;i<43;++i)
     {
     if(code[i].localeCompare(name) == 0)
        {
        ccode=i;
        }
     }
   if(ccode == -1)
      print(0,0,6);
   else
     {
      if(cglr[ccode][scode] == 0)
        print(scode,ccode,5);
      else
        {
         if(cglr[ccode][scode] > rank)
           print(scode,ccode,3);
         else
           print(scode,ccode,4);
        }       
     } 
   }
 }
function print(a,b,c)
 {
 if(c==1)
   {
   document.getElementById("space1").innerHTML="Sorry , No Colleges found ";
   document.getElementById("space2").innerHTML=""; 
   document.getElementById("space3").innerHTML="";
   document.getElementById("space4").innerHTML=""; 
   }
 else if(c==2)
   {
   document.getElementById("space1").innerHTML="You can get allotment for";
   document.getElementById("space2").innerHTML=sub[a]; 
   document.getElementById("space3").innerHTML="at";
   document.getElementById("space4").innerHTML=cnam[b]; 
   }
 else if(c==3)
   {
   document.getElementById("space5").innerHTML="Congratz , You can get allotment for";
   document.getElementById("space6").innerHTML=sub[a]; 
   document.getElementById("space7").innerHTML="at";
   document.getElementById("space8").innerHTML=cnam[b]; 
   }
 else if(c==4)
   {
   document.getElementById("space5").innerHTML="Sorry , You couldn't get allotment for";
   document.getElementById("space6").innerHTML=sub[a]; 
   document.getElementById("space7").innerHTML="at";
   document.getElementById("space8").innerHTML=cnam[b]; 
   }
 else if(c==5)
   {
   document.getElementById("space5").innerHTML="Sorry , The selected course ";
   document.getElementById("space6").innerHTML=sub[a]; 
   document.getElementById("space7").innerHTML="is not found at";
   document.getElementById("space8").innerHTML=cnam[b]; 
   }
 else
   {
   document.getElementById("space5").innerHTML="Sorry , Incorrect college code";
   document.getElementById("space6").innerHTML=""; 
   document.getElementById("space7").innerHTML="";
   document.getElementById("space8").innerHTML=""; 
   }
 }
</script>







</body>
</html>