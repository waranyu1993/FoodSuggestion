<h1>Facebook stuff</h1>
<form name="login_form" id="login_form" class="form-inline" role="form" action="<?= base_url('login/setdb') ?>" method="post">
<?php if (@$user_profile): 
    redirect('login/setdb');
else: ?>
    <h2>Welcome, please login below</h2>
    <a href="<?= $login_url ?>">Login</a>
<?php endif; ?>
</form>