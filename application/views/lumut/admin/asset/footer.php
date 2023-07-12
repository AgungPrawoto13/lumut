<script src="/blog/web/assets/9bed5bb5/jquery.js"></script>
<script src="/blog/web/assets/7d957afa/yii.js"></script>
<script src="/blog/web/assets/7d957afa/yii.validation.js"></script>
<script src="/blog/web/assets/7d957afa/yii.activeForm.js"></script>
<script src="/blog/web/assets/aa56085/js/bootstrap.js"></script>
<script type="text/javascript">jQuery(function ($) {
jQuery('#login-form').yiiActiveForm([{"id":"loginform-username","name":"username","container":".field-loginform-username","input":"#loginform-username","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Username tidak boleh kosong."});}},{"id":"loginform-password","name":"password","container":".field-loginform-password","input":"#loginform-password","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.required(value, messages, {"message":"Password tidak boleh kosong."});}},{"id":"loginform-rememberme","name":"rememberMe","container":".field-loginform-rememberme","input":"#loginform-rememberme","error":".help-block.help-block-error","validate":function (attribute, value, messages, deferred, $form) {yii.validation.boolean(value, messages, {"trueValue":"1","falseValue":"0","message":"Remember Me harus berupa \"1\" atau \"0\".","skipOnEmpty":1});}}], []);
});</script></body>
</html>