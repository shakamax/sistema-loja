<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- LIB para máscara de preço do jquery price -->
<script type="text/javascript" src="addons/jquery.priceformat.min.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"/></script>

<script type="text/javascript">
	// JavaScript
$('.price').priceFormat({
    prefix: '',
    centsSeparator: ',',
    thousandsSeparator: '.'
});
</script>


<script type="text/javascript">
	setTimeout(function(){
	$('.esconde').fadeOut(2500);
	}, 5000);
</script>

<!-- MÁSCARA PARA DATA(INUTIL) VEJA O COMENTÁRIO PRA SABER A FUNÇÃO DE JAVA SCRIPT -->
<script type="text/javascript">
	/* Máscaras ER */
	function mascara(o,f){
	    v_obj=o
	    v_fun=f
	    setTimeout("execmascara()",1)
	}
	function execmascara(){
	    v_obj.value=v_fun(v_obj.value)
	}
	function mcep(v){
	    v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
	    v=v.replace(/^(\d{5})(\d)/,"$1-$2")         //Esse é tão fácil que não merece explicações
	    return v
	}
	/*MÁSCARA DATA*/
	function mdata(v){
	    v=v.replace(/\D/g,"");                    //Remove tudo o que não é dígito
	    v=v.replace(/(\d{2})(\d)/,"$1/$2");       
	    v=v.replace(/(\d{2})(\d)/,"$1/$2");       
	                                             
	    v=v.replace(/(\d{2})(\d{2})$/,"$1$2");
	    return v;
	}
	function mrg(v){
		v=v.replace(/\D/g,'');
		v=v.replace(/^(\d{2})(\d)/g,"$1.$2");
		v=v.replace(/(\d{3})(\d)/g,"$1.$2");
		v=v.replace(/(\d{3})(\d)/g,"$1-$2");
		return v;
	}
	function mvalor(v){
	    v=v.replace(/\D/g,"");//Remove tudo o que não é dígito
	    v=v.replace(/(\d)(\d{8})$/,"$1.$2");//coloca o ponto dos milhões
	    v=v.replace(/(\d)(\d{5})$/,"$1.$2");//coloca o ponto dos milhares
	        
	    v=v.replace(/(\d)(\d{2})$/,"$1,$2");//coloca a virgula antes dos 2 últimos dígitos
	    return v;
	}
	function id( el ){
		return document.getElementById( el );
	}
	function next( el, next )
	{
		if( el.value.length >= el.maxLength ) 
			id( next ).focus(); 
	}
</script>

<!-- MÁSCARA TELEFONE -->
<script type="text/javascript">
$(".telefone").mask("(00) 00000-0000");
</script>
<!-- MÁSCARA CPF -->
<script>
    $(document).ready(function () { 
        var $seuCampoCpf = $(".CPF");
        $seuCampoCpf.mask('000.000.000-00', {reverse: true});
    });
</script>

<!-- MÁSCARA DATA JQUERY MIL VEZES MELHOR -->
<script type="text/javascript">
	$(".data").mask("99/99/9999");
</script>
<script type="text/javascript">
	$(".matri").mask("9999.9999.999");
</script>


</body>
</html>