<p class="has-text-right pt-2 pb-4">
		<a href="#" class="button is-link is-rounded btn-back"><- Regresar atrás</a>
</p>
<script type="text/javascript">
    let btn_back = document.querySelector(".btn-back");

    btn_back.addEventListener('click', function(e){
        e.preventDefault();
        window.history.back();
    });
</script>