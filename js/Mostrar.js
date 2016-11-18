var click = 'click';

function mostrar(){
	if(click==1){
	document.getElementById("dos").style=			"transition: 0.1s; transform:translateX(0px)";
    document.getElementById("MenuSuperior").style=	"opacity:  0; transition: 0.1s; ";
   click = click + 1;

   } else{
   	document.getElementById("dos").style=			"transition: 0.1s; transform:translateX(5px)";
    document.getElementById("MenuSuperior").style=  "opacity:  1; transition:  0.1s";      
    click = 1;
   }   
}