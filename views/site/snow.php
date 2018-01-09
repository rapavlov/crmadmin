<!--Snow-->
		
<script type="text/javascript">
var imgsrc="/../images/snow/snow.gif";
var ie4=(document.all)?1:0;
var ns6=(document.getElementById&&!document.all)?1:0;
var height=(document.layers)?window.innerHeight:window.document.body.scrollHeight;
if (height<window.document.body.clientHeight) height=window.document.body.clientHeight;
var width=(document.layers)?window.innerWidth:window.document.body.clientWidth;
var col=Math.round(height/15);    //количество снежинок

amp=new Array();
x_pos=new Array();
y_pos=new Array();
stx=new Array();
sty=new Array();
deltax=new Array();
obj=new Array();

for (i=0; i<col; ++i) {
 razmer=Math.random()*2; 
 amp[i]=Math.random()*19;
 x_pos[i]=Math.random()*(width-amp[i]-29);
 y_pos[i]=Math.random()*height;
 stx[i]=0.03+Math.random()*0.25;
 sty[i]=2+Math.random();
 deltax[i]=0;
 if (ie4||ns6) {
    document.write("<img id=\"sn"+ i +"\" style=\"position:absolute;" +
    "z-index: "+ (i+90) +"; visibility:visible; top:-50px; left:-50px; width:"+razmer+"%;\"" +
    "src='"+imgsrc+"' border=0>");
 }
 obj[i] = document.getElementById("sn"+i);
}

function flake() {
 for (i=0; i<col; ++i) {
    y_pos[i]+=sty[i];
    if (y_pos[i]>height-49) {
        x_pos[i]=Math.random()*(width-amp[i]-29);
        y_pos[i]=0;
    }
    deltax[i]+=stx[i];
    obj[i].style.top=y_pos[i]+"px";
    obj[i].style.left=x_pos[i]+amp[i]*Math.sin(deltax[i])+"px";
 }
setTimeout("flake()", 40);
}
flake();
</script>
		
		<!--/Snow-->
		<!--DedMoroz-->
	
<script type="text/javascript">
	var imgsrcdm="/../images/snow/santa-klaus.gif";
var ie4=(document.all)?1:0;
var ns6=(document.getElementById&&!document.all)?1:0;
var height=(document.layers)?window.innerHeight:window.document.body.scrollHeight;
if (height<window.document.body.clientHeight) height=window.document.body.clientHeight;
var width=(document.layers)?window.innerWidth:window.document.body.clientWidth;

ampdm=new Array();
x_posdm=new Array();
y_posdm=new Array();
stxdm=new Array();
stydm=new Array();
deltaxdm=new Array();
objdm=new Array();
	idm=1
 ampdm[idm]=Math.random()*3;
x_posdm[idm]=(width+10);
y_posdm[idm]=450;
 stydm[idm]=2+Math.random();
	stxdm[idm]=1.5+Math.random();
 deltaxdm[idm]=0;
 if (ie4||ns6) {
    document.write("<img id=\"sndm"+ idm +"\" style=\"position:absolute;" +
    "z-index: 100; visibility:visible; top:-50px; left:-50px;\"" +
    "src='"+imgsrcdm+"' border=0>");
 }
 objdm[idm] = document.getElementById("sndm"+idm);

function flakedm() {
	x_posdm[idm]-=stxdm[idm]
 if (x_posdm[idm]<-470) {
        x_posdm[idm]=(width+10);
    }
    deltaxdm[idm]+=stxdm[idm];
	y_posdm[idm]=550;///450
objdm[idm].style.top=y_posdm[idm]+ampdm[idm]*Math.sin(deltaxdm[idm])+"px";
	 objdm[idm].style.left=x_posdm[idm]+"px";
setTimeout("flakedm()", 40);
}
flakedm();
</script>
		
		<!--/DedMoroz-->
		<!--Elka-->
		
<script type="text/javascript">
	var imgsrcel="/../images/snow/girlyanda2.png";
	var imgsrcgir="/../images/snow/girlyanda.png";
	var imgsrcnovgod="/../images/snow/snovgodom.png";
	var width=(document.layers)?window.innerWidth:window.document.body.clientWidth;
var ie4=(document.all)?1:0;
var ns6=(document.getElementById&&!document.all)?1:0;
	//for (t=0; t<5; ++t) {
	//if (ie4||ns6) {
	// document.write("<img id=\"snel" + "\" style=\"position:absolute;" +
	// "z-index: 10; visibility:visible; top:"+(t*120)+"px; left:"+(width-130)+"px; height:130px;\"" +
	// "src='"+imgsrcel+"' border=0>");
	//				}
	//	}
for (k=0; k<((width/(765*0.15))+1); ++k) {
if (ie4||ns6) {
    document.write("<img id=\"sngir" + "\" style=\"position:absolute;" +
    "z-index: 2000; visibility:visible; top:0px; left:"+k*765*0.15+"px; width:150px;\"" +
    "src='"+imgsrcgir+"' border=0>");
 }
}
/*	for (k=0; k<((width/(765*0.15))+1); ++k) {
if (ie4||ns6) {
    document.write("<img id=\"sngir" + "\" style=\"position:absolute;" +
    "z-index: 200; visibility:visible; top:750px; left:"+k*765*0.15+"px; width:150px;\"" +
    "src='"+imgsrcgir+"' border=0>");
 }
}*/
/*if (ie4||ns6) {
    document.write("<img id=\"snnovgod" + "\" style=\"position:absolute;" +
	"z-index: 100; visibility:visible; top:700px; left:"+(width/(1280/500))+"px; width:200px;\"" +				   
    "src='"+imgsrcnovgod+"' border=0>");
 }*/
</script>
		
		<!--/Elka-->