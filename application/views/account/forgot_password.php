<div class="col-sm-12">
    <div class="page-header"><h1><?php echo lang('forgot_password_page_name'); ?></h1></div>
    
    <?php echo form_open(uri_string(), array('class' => 'form-horizontal', 'role' => 'form')); ?>
	<div class="well"><?php echo lang('forgot_password_instructions'); ?></div>
    
	<div class="form-group <?php echo (form_error('forgot_password_username_email') OR isset($forgot_password_username_email_error)) ? 'error' : ''; ?>">
	    <?php echo form_label(lang('forgot_password_username_email'), 'forgot_password_username_email', array('class' => 'control-label col-sm-2'));?>
	    <div class="col-sm-10">
	    <?php
		$value = set_value('forgot_password_username_email') ? set_value('forgot_password_username_email') : (isset($account) ? $account->username : '');
		$value = str_replace(array('\'', '"'), ' ', $value);
		echo form_input(array(
		    'name' => 'forgot_password_username_email',
		    'id' => 'forgot_password_username_email',
		    'value' => $value,
		    'maxlength' => '80',
		    'class' => 'form-control'
		));
	    if (form_error('forgot_password_username_email') || isset($forgot_password_username_email_error)): ?>
		<span class="alert alert-danger">
		    <?php
			echo form_error('forgot_password_username_email');
			echo isset($forgot_password_username_email_error) ? $forgot_password_username_email_error : '';
		    ?>
		</span>
	    <?php endif; ?>
	    </div>
	</div>
    <div class="col-sm-offset-2">
	<?php if (isset($recaptcha)) : ?>
	    <?php if (isset($forgot_password_recaptcha_error)) : ?>
		<span class="alert alert-danger"><?php echo $forgot_password_recaptcha_error; ?></span>
	    <?php endif; ?>
	    <?php echo $recaptcha; ?>
	<?php endif; ?>
    </div>
    <div class="clearfix">
	<?php echo form_button(array(
	'type' => 'submit',
	'class' => 'btn btn-large btn-warning col-sm-offset-2',
	'content' => lang('forgot_password_send_instructions')
	)); ?>
    </div>
    <?php echo form_close(); ?>
</div>