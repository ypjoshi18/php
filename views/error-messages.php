<?php

if (isset($_GET['error']) && '1' === $_GET['error']) {
?>
<div class="alert alert-danger">
<p>Sorry, provided login credentials didn't worked! Try again!!!</p>
</div>
<?php
}
?>