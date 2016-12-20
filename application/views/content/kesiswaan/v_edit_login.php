<div class="col-md-10">
<div class="container">

<div class="col-md-12">
<?php echo form_open('c_loginwalimurid/perbaruiIdLogin'); ?>
<ul>
    <li>
        <label>Username<span class="required">*</span></label>
        <input type="text" value="<?php echo $Username ?>" name="username" required>
    </li>
    <li>
        <label>Password<span class="required">*</span></label>
        <input type="password" name="password" required>
    </li>
    <div>
    	<input type="hidden" name="id_login" value="<?php echo $id_login ?>">
        <button id="" name="send" type="submit" class=""><span>Daftar</span></button>
    </div>
</ul>
<?php echo form_close(); ?>
</body>
</html>