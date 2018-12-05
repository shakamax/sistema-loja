<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- LIB para máscara de preço do jquery price -->
<script type="text/javascript" src="addons/jquery.priceformat.min.js"></script>

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

</body>
</html>