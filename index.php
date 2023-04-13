<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <!-- jqueri libs-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- personal css -->
    <link rel="stylesheet" href="css/style.css">    
</head>
<body>
    <div class="menu">
        <nad>
            <input type="text"  name="" id="CTB">
            <input type="button" value="buscar" id="buscar">
        </nad>
    </div>
    <div class="producto">
        <div class="img_p">
            <img src="" alt="imagen producto" id="img_p" >
        </div>
        <div class="boxtext">
            <p id="data1">marca: <b></b> </p>
            <p id="data2">serie: <b></b></p>
            <p id="data3">modelo: <b></b></p>
            <p id="data4">tipo:</p>
            <p id="data5">CT:</p>
            <p id="data6">dasddas</p>
            <p id="data7">dasddas</p>
            <p id="data8">dasddas</p>
            <p id="data9">dasddas</p>   
        </div>
    </div>
</body>
</html>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<!-- perosona script java script-->
<script src="js/myjs.js"></script>

/*style by Stefano Gaete
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWNNX0OkkkxxkkkOKXNNWMMMMMMMMMMMMMMMWWNNNXXK0Okkkdc;.  ..  ;KMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMNKkdc;,'............',;:odxxxkxxxxxdddoc:;,,,'...........''. .dNMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMMMMWN0d;......'',,;;;;;,,'.........................'''',,''''''''. .lKMMMMMMM
MMMMMMMMMMMMMMMMMMMMMMMWKkl,....,;::::::::::;;;,,,,,,'''''''',,,;;;;;;;;;;;;;;,,'''''''. .lKWMMMMMMM
MMMMMMMMMMMMMMMMMMMMWKx:....',;::::::;;;;;;,''''........'',;;;;;;;;;;;;;;,,,'''''''''.. 'dXMMMMMMMMM
MMMMMMMMMMMMMMMMMMNOc....',;:::;;;;;;;;;;,'............''',;::ccc:;;;,,''''''''''''....l0WMMMMMMMMMM
MMMMMMMMMMMMMMMMNk:. ..,;;;;;;;;,,,;;;;;;;,''''''''',,;:codxkOkdlcllc;,,,'',,,,''.. 'l0NMMMMMMMMMMMM
MMMMMMMMMMMMMWXk;. .',;;;;;;;;,'''',,;;;;;;,,,,;;ccldxk00K0xl;...;xK0xc;,,,,,,..  .:OWMMMMMMMMMMMMMM
MMMMMMMMMMMMXk;. .',;;;;;;;;;,'....',,;;;;;;;:ldxO00KK0ko:'.    .:x0XX0dc;;;,,... .'cxKNWMMMMMMMMMMM
MMMMMMMMMMNk:. .';;;;;;;;;;;,'.....',,;;;;:ldk0KKXXXKx;...,;.     .'lOXXOo:;;;;,,'.....:xKWMMMMMMMMM
MMMMMMMMWOc. .',;;;;;;;;;;;,'.....'',,;;cdk0KKXXXXXXXOdodOKKOo;.    .;OXNXOxol::;;;;,'....l0WMMMMMMM
MMMMMMMWx.  .,;;;;;;;;;;;;,'.....'',;;cdO0KXX0koodk0NNNNNNNNNNKOo:'..;xXNNNNXK0Oxoc;;;;,.. 'xNMMMMMM
MMMMMMW0'  .,;;;;;;;;;;;;;,'.....',;cdOKKK0xc'. .lk0NNNNNNNNNNNNXK0OO0XNNNNNNNNNNXKkl;;;;,. .dNMMMMM
MMMMWXx;. .;;;;;;;;;;;;;;;,'...'',:oOKK0kl,.    .,coOXNNNNNNNNNNNNNNNNNNNNNNNNNNNNNX0o:;;;,. .xNMMMM
MMMXx,...,;:;;;;;;;;;;;;;;;;,'',;lx00Oo;.  .        'lOXNNNNNNNNNNNNNNNNNNNNNNNNNNNNX0o;;;;'. ;0WMMM
MWKc. .,:::;,'',;;;;;,,;;;;;;;;:lkKOl'. .,okd;.       'dKNNNNNNNNNNNXK0KKKKKKXXNNNNNNXOl;;;,' .oNMMM
WKc..'::::;,...;:;;;,,',;;;;;;;lk00d;.'cxKNNXKx;.     .c0NNNNNNNNNNXk;.',,,,;o0XNNNNNNKx:;;;,. :KMMM
Xo..';:;;;,'. ,OKkl;,'',;;;;;;;:cllclx0XNNNNNNXKxc;,,;oOXNNNNNNNNNNXo..:dddddkKNNNNNNNXkc;,,'. cXMMM
k' .,;;;;;,.  :XMWKd;',;;;;;;;;;;;;;;ckKNNNNNNNNNXKKKKXNNNNNNNNNNNNKl..xNNNNNNNNNNNNNXXOl,,'. .oNMMM
l..';;;;;;'.  :XMMMNOl;;;;;;;;;;;;;;;;lkOOOkOOKXNNNNNNXNNNNNNNNNNNNKl.'kNNNNNNNNNNNNXKKOc,''. .dNMMM
c..';;;;;;'.  :XMMMMWXxc;;;;;;;;;;;;;;;:::;;;:cokKXXNNNNNNNNNNNNNNNKl.:ONNNNNNNNNNXXKKKkc'''. 'kWMMM
:..',;;;;,.   :XMMMMMMW0o:;;;;;;;;;;;;;;;;;;;;;;:dk0NNNNNNNNNNNNNNNX0k0XNNNNNNNNNXXKKKKd;''.. :KWNNX
c...,,;;;,.   :XMMMMMMMMNOo:,,,,,;;;;;;;;;;;;;;;;:cd00OkkkOKXNNNNNNNNNNNNNNNNNNNXXKKKKOl,'.. .;c:;''
l. .',;;;,.   :XMMMMMMMMMWXkc;,',,,,,;;;;;;;;;;;;;;:c:;;;;:lkKNNNNNNNNNNNNNNNNXXKKKKK0x;...         
l. .',;;;'.   :XMMMMMMMMMMMWKxc;;,,,,,,,,,;;;;;;;;;;;;;;;;;;cxXNNNNNNNNNNXXXXKKKKKKK0x;..           
, .'',;;;'.   cNMMMMMMMMMMMMMWXK0kxol:;,,,,,,;;;;;;;;;;;;;;;;l0XXNNNXXXXKKKKKKKKKKKOo'              
. .',;;;;'.   :XMMMMMMMMMMMMMMMMMMMWNKOxo:;,,,,,;;;;;;;;;;;;;:ldxkOKKKKKKKKKKKKKKOo;.               
 .',;;;;,.  .,xNMMMMMMMMMMMMMWKkddxkKNWWNXOxl;,,,,;;;;;;;;;;;;;;;;cdOKKKKKKKKKKK0o.                 
oc;;;;,''.':kXWMMMMMMMMMMMMMMXl.   ..;dKWMMWN0d:,,,,;;;,,,,,;;;;;;;;lx0KKKKKKKKKKOl.                
WXkl;,';oOKNMMMMMMMMMMMMMMMMMWO;.      ,xNMMMMW0d;,,'......',;;;;;;;;ckKKKKKKKKKKKOc.......         
MMWXxlo0WMMMMMMMMMMMMMMMMMMMMMWXx:..    ;0WMMNKkc'........',;;;;;;;;;:d0KKKK0OOkdo:. ..',,'..       
MMMMWNWMMMMMMMMMMMMMMMMMMMMMMMMMMNKkxoloONWXx:'',cll:,',,;;;,,,',;;;;:d0kdl:;'...      ......       
MMMMMMMMMMMMMMXkddx0NMMMMMMMMMMMMMMMMWWWMMNklldOXWWW0l,,,,'......,;;;:lc.                           
MMMMMMMMMMMMMNo.   .:kXMMMMMMMMMMMMNOoo0WMWWWWMMMMMWXx,...  ...',,,,,'.                             
MMMMMMMMMMMMMXc.     .:0WMMMMMMMMNO:';dXWMMMMMMMN0kd:'.....',,,,,'''.                               
MMMMMMMMMMMMMW0c.      ,OMMMMMMWO:',dXWMMMMMMMNkc'..;lxd:,,,,'''''..                                
MMMMMMMMMMMMMMMNk:.    'kWMMMMMXd:dXWMMMMMMMMW0oldk0XWMXo,''''''..                                  
MMMMMMMMMMMMMMMMMN0dl:ckNMMMMMMMWWWMMMMMMMMMMMWWWMMMMMMNx;'''''.                                    
MMMMMMMMMMMMMMMMMMMMWWWMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWO;'''..                               .,;,. 
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWO:''.                                .:lll:.
MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMWKo,.                                 ,lllll;
MMMMMMMMMMMMMMMMMMMMMWNK00KNMMMMMMMMMMMMMMMMMMMMMMMMMMMWKc.                                 .,cllllc
MMMMMMMMMMMMMMMMMWN0dc,'';xXMMMMMMMMMMMMMMMMMMMMMMMMMMMXl.                                  .'clllll
MMMMMMMMMMMMMMMNOo;..,cxOXNKOONMMMMMMMMMMMMMMMMMMMMMMMXl.                                    .:lllll
0WMMMMMMMMMMWKd;..:d0NWWN0l''oXMMMMMMMMMMMMMMMMMMMMWNO:.                    ';;;,..          .'cllll
.xWMMMMMMMMNx,.;d0NMMMW0c..;kNMMMMMMMMMMMMMMMMMMMX0x:..                   .oKNWWNKOdc;'..     .':ccc
..oKWMMMMMMW0k0NMMMMWKo..,xXMMMMMMMMMMMMMMMMMMMMWKko;;;,'..              .dNMMMMMMMMWNX0ko;.   .,::c
o..'l0NMMMMMMMMMMMMW0:..lKWMMMMMMMMMMMMMMMMMMMMMWNXXKKKK0Oxc'           ,kNMMMMMMMMMMMMMMWN0d,.  ...
WKo'..;d0NMMMMMMMMWO;.,xNMMMMMMMMMMMMMMMMMMMMMWWNNNNNNNNNNNX0l.        ;0WMMMMMMMMMMMMMMMMMMWXOkl:,.
MMWKd'  .lOWMMMMMMWx';OWMMMMMMMMMMMMMMMMMMMMMMNNXNNNNNNNNNNNNKl.      ,OWMMMMMMMMMMMMMMMMMMMMMMMWWXO
*/