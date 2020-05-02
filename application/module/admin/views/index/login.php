<?php
 $linkAction = URL::createLink('admin', 'index', 'login');
 $message  = Session::get('message');
 Session::delete('message');
 $strMessage = Helper::cmsMessage($message);
?>
<div id="loginbox"> 
<?php echo $strMessage; ?>           
    <form method="post" id="loginform" class="form-vertical" action="<?php echo $linkAction ?>">
        <input name="form[token]" type="hidden" value="<?php echo time();?>" />
         <div class="control-group normal_text"> <h3><img src="<?php echo $this->_dir; ?>/img/logo.png" alt="Logo" /></h3></div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"> </i></span><input name="form[username]" type="text" placeholder="Username" />
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span><input name="form[password]" type="password" placeholder="Password" />
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-right"><input type="submit" value=" Login" class="btn btn-success"></span>
        </div>
    </form>
</div>