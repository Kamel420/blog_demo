<!-- Bootstrap core JavaScript -->
<script src="{{asset('/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>

<!-- delete post -->
<script>
function delete_post()
{
    var result = confirm('Are you sure you wish to delete this ?');
    if( result ){
        event.preventDefault();
        document.getElementById('delete-form').submit();
    }
}

function goBack() {
  window.history.back();
}
                        
</script>