<div class="page-header">
	<h1><?php echo lang('connect_create_account'); ?></h1>
</div>
<div class="form-horizontal">
	<?php echo form_open(uri_string(), array('class' => 'form-horizontal', 'id' => 'connect_form')); ?>
	<?php echo form_fieldset(); ?>
    <h3><?php echo lang('connect_create_heading'); ?></h3>
	<?php if (isset($connect_create_error)) : ?>
		<div class="form_error"><?php echo $connect_create_error; ?></div>
	<?php endif; ?>
    <div class="form-group">
	<?php echo form_label(lang('connect_create_username'), 'connect_create_username', array('class' => 'control-label col-lg-2')); ?>
	<div class="col-lg-10">
		<?php echo form_input(array('name' => 'connect_create_username', 'id' => 'connect_create_username', 'class' => 'form-control', 'value' => set_value('connect_create_username', $connect_create['displayName']), 'maxlength' => '16')); ?>
		<?php echo form_error('connect_create_username'); ?>
		<?php if (isset($connect_create_username_error)) : ?>
			<span class="alert alert-danger"><?php echo $connect_create_username_error; ?></span>
		<?php endif; ?>
	</div>
    </div>
    <div class="form-group">
	<?php echo form_label(lang('connect_create_email'), 'connect_create_email', array('class' => 'control-label col-lg-2')); ?>
	<div class="col-lg-10">
		<?php echo form_input(array('name' => 'connect_create_email', 'id' => 'connect_create_email', 'class' => 'form-control', 'value' => set_value('connect_create_email', $connect_create['emailVerified']), 'maxlength' => '160')); ?>
		<?php echo form_error('connect_create_email'); ?>
		<?php if (isset($connect_create_email_error)) : ?>
		    <span class="alert alert-danger"><?php echo $connect_create_email_error; ?></span>
		<?php endif; ?>
	</div>
    </div>
    
    <?php echo form_fieldset_close() . form_fieldset(lang('connect_password_explained')); ?>
    
    <div class="form-group">
	<?php echo form_label(lang('connect_password'), 'connect_password', array('class' => 'control-label col-lg-2')); ?>
	<div class="col-lg-10">
		<?php echo form_input(array('name' => 'connect_password', 'id' => 'connect_password', 'class' => 'form-control')); ?>
		<?php echo form_error('connect_password'); ?>
	</div>
    </div>
    
    <div class="form-group">
	<?php echo form_label(lang('connect_confirm_password'), 'connect_confirm_password', array('class' => 'control-label col-lg-2')); ?>
	<div class="col-lg-10">
		<?php echo form_input(array('name' => 'connect_confirm_password', 'id' => 'connect_confirm_password', 'class' => 'form-control')); ?>
		<?php echo form_error('connect_confirm_password'); ?>
	</div>
    </div>
    
    <div class="col-lg-offset-2 col-lg-10">
	<?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-primary', 'content' => lang('connect_create_button'))); ?>
    </div>
	<?php echo form_fieldset_close(); ?>
	<?php echo form_close(); ?>
</div>
<script>
    $(document).ready(function() {
        $('#connect_form').bootstrapValidator({
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                connect_create_username: {
                    threshold: 3,
                    validators: {
                        notEmpty: {
                                message: '<?php echo lang('connect_not_empty'); ?>'
                            },
                    }
                },
                connect_create_email: {
                    threshold: 3,
                    validators: {
                    notEmpty: {
                                message: '<?php echo lang('connect_not_empty'); ?>'
                            },
                        
                    }
                },
                connect_password: {
                    threshold: 3,
                    validators: {
                        notEmpty: {
                                    message: '<?php echo lang('connect_not_empty'); ?>'
                                },
                                stringLength: {
                                    min: <?php echo $this->config->item('sign_up_password_min_length'); ?>,
                                    message: '<?php echo sprintf(lang('connect_password_short'), $this->config->item('sign_up_password_min_length')); ?>'
                                }
                    }
                },
                connect_confirm_password: {
                    threshold: 3,
                    validators: {
                        notEmpty: {
                                    message: '<?php echo lang('connect_not_empty'); ?>'
                                },
                        identical:{
                                    message: '<?php echo lang('connect_password_not_match'); ?>',
                                    field: 'connect_password'
                                }
                    }
                }
            }
        });
        
    });
</script>
