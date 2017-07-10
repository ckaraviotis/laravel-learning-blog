<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
<script type="text/javascript" src="/js/slugify.js"></script>

<script type="text/javascript">
    $( document ).ready(function() {
        $(".dropdown-button").dropdown();
        console.log("doc ready");
    });

    $('#title').keyup(function() {
        $('#slug').val(slugify($(this).val()));
        $('#slug').click();
    });
</script>