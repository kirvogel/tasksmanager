
<div class="container">
    <h2>User Account</h2>
    <?php $user = $this->session->userdata('user');?>
    <!h3>Welcome <?php echo $user['firstname'] . ' ' . $user['surname']; ?>!</h3>
    <div class="account-info">
        <p><b>Name: </b><?php echo $user['firstname'] . ' ' . $user['surname']; ?></p>
        <p><b>Login: </b><?php echo $user['login']; ?></p>
    </div>
</div>
