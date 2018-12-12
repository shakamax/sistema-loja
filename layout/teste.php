<html>
<head>
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
function mtel(v){
    v=v.replace(/D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(d{2})(d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(d)(d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
    return document.getElementById( el );
}
window.onload = function(){
    class('.telefone').onkeypress = function(){
        mascara( this, mtel );
    }
}
</script>
</head>
<body>
	Real: <input type="text" name="valor" onkeypress="mascara( this, mvalor ); next( this, 'cep' );" maxlength="14" />
	<br />
	CEP: <input type="text" name="cep" id="cep" onkeypress="mascara(this, mcep); next( this, 'rg' );" size="10" maxlength="9" value="" />
	<br />
	RG: <input type="text" name="rg" id="rg" onkeypress="mascara(this, mrg); next( this, 'data' );" size="14" maxlength="12" value="" />
	<br />
	Data: <input type="text" name="data" id="data" onkeypress="mascara(this, mdata);" size="14" maxlength="10" value="" />
        <input type="text" name="telefone" class="telefone" id="telefone" maxlength="15" />
</body>
</html>