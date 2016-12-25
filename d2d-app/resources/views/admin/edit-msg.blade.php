<script>
  $('.popovers').popover();
window.setTimeout(function() {
$(".alert").fadeTo(2000, 500).slideUp(500, function(){
$(this).remove(); 
});
// 500 : Time will remain on the screen
}, 500);
</script>
<style>
  .popupunder{
    width: 300px;
  position:fixed;
  top: 10px;
  right: 10px;
  z-index: 9999999999999999999999999999999999999;
  border: 0;
  padding: 20px;
}
.popupunder.alert-success{
    border: 1px solid #198b49;
  background:#27AE60;
  color:#fff;
}
.popupunder .close{
  font-size: 10px;
  position:absolute !important;
  right: 2px;
  top: 3px;
}
</style>
<div class="container">
  <div class="row">
    <div class="popupunder alert alert-success fade in"><button type="button" class="close close-sm" data-dismiss="alert"><i class="glyphicon glyphicon-remove"></i></button><strong>Success : </strong> The update process has been completed successfull!</div>
  </div>
</div>