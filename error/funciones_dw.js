<!--

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function MM_showHideLayers() { //v6.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) if ((obj=MM_findObj(args[i]))!=null) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}

//-->

<!--

// Funciones Generales

/**
 * La idea de esta funcion es abrir paginas de tridiom.
 */
function winOpen(url){
	window.open(url,"aviso","width=467,height=400,left=100,top=10,scrollbars=yes,toolbar=no,status=no,menubar=no,location=no,resizable=yes");
}

function winOpenBase(url, parametros){
	var propiedades = "";
	if (parametros){
		propiedades = parametros;
	}else{
		propiedades = "width=467,height=400,left=100,top=10,scrollbars=yes,toolbar=no,status=no,menubar=no,location=no,resizable=yes";
	}

    if (isUrlAbsoluta(url)) {   
		window.open(url, "aviso", propiedades);
	} else {
		var base = goUrlBase();
		var url  = base + url;
		window.open(url, "aviso", propiedades);
	}
}

/**
 * Va a una URL contemplando, la posibilidad que sea una URL absoluta del tipo /fnet/mod/.. 
 * y tambien contempla la existencia del tag base.
 */
function goToUrl(target){
   
   if (isUrlAbsoluta(target)) {   
   	   location.href = target;   
   } else {
	   var base = goUrlBase();
	   var url  = base + target;          // alert(url + "\nbase: "+ base + "\ntarget: " + target);
	   location.href = base + target;   
   }
}

/**
 * En caso que la pagina tenga el TAG HTML Base, lo retorna. sino devuelve blanco.
 */
function goUrlBase() {
	
	var base = "";
	
	try {
	   base = document.getElementsByTagName('base')[0].href
	} catch (e) {
	   base = "";
	}	
	return base;	
}

/**
 * Retorna TRUE si respeta las reglas de direccionamiento absoluto
 */
function isUrlAbsoluta(target) {

	if (target.substring(0,6) == "/fnet/") {
		return true;
	} else {
		return false;
	}
}

/**
 * Para referenciar a un ancla dentro de la misma pagina.
 */
function goToAncla(ancla){
	
	var url = location.href;
	var idx = url.indexOf('#');
	
	if (idx > 0) {
		url = url.substring(0, idx);
	}
	
	location.href = url + ancla;
}

function winTicket(){
	window.open('/fnet/ticket.do?imprcomp=S','Ticket','width=610,height=460,left=300,top=150,resizable=no,scrollbars=no,status=yes');
}

function winTickets(){
	window.open('/fnet/mod/comprobantes/tickets.jsp','Ticket','width=610,height=550,left=300,top=100,resizable=no,scrollbars=no,status=yes');
}

function winTicketBasico(){
	window.open('/fnet/ticketBasico.do?','Ticket Basico','width=610,height=460,left=300,top=150,resizable=no,scrollbars=no,status=yes');
}

function exportPDF(){
	goToUrl('/fnet/mod/comprobantes/ticket-verPDF.jsp'); 
}

function exportPDF2(ticketSO){
	goToUrl('/fnet/mod/comprobantes/ticket-verPDF.jsp?ticketSO='+ticketSO); 
		
}
function exportVinculadas(nroprestamo,base,fecha){
	//alert('/fnet/mod/comprobantes/ticket-verVinculadas.jsp?nroprestamo='+nroprestamo+'&fecha='+fecha); 
	goToUrl('/fnet/mod/comprobantes/ticket-verVinculadas.jsp?nroprestamo='+nroprestamo+'&base='+base+'&fecha='+fecha); 
}



//-->