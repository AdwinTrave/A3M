<div class="page-header">
    <h1><?php echo lang('reset_password_page_name'); ?></h1>
</div>

<div class="alert alert-danger"><?php echo lang('reset_password_unsuccessful'); ?></div>

<p><?php echo anchor('user/forgot_password', lang('reset_password_resend'), array('class' => 'btn btn-default')); ?></p>