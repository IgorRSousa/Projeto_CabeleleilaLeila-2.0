<form id="form" action="../../editarAgenda" method="post">
    <input type="hidden" name="id" value="<?php print $_REQUEST["id"]?>">
</form>

<script>
  function submitForm() {
    document.getElementById("form").submit();
  }
  submitForm();
</script>