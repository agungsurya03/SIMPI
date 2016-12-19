<div class="col-md-10">
<div class="container">

<div class="col-md-12">
<?php echo form_open('c_loginwalimurid/tambahIdLogin'); ?>
<ul>
    <li>
        <label>Username<span class="required">*</span></label>
        <input type="text" value="<?php echo $this->session->flashdata('username') ?>" name="username" required>
    </li>
    <li>
        <label>Password<span class="required">*</span></label>
        <input type="password" name="password" required>
    </li>
    <div>
        <button id="" name="send" type="submit" class=""><span>Daftar</span></button>
    </div>
</ul>
<?php echo form_close(); ?>
</body>
</html>