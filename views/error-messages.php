<?php
session_start();

if (isset($_SESSION['error']) && 'invalid_credentials' === $_SESSION['error']) {
    unset($_SESSION['error']);
?>
<div class="alert alert-danger">
<p>Sorry, provided login credentials didn't worked! Try again!!!</p>
</div>
<?php
}