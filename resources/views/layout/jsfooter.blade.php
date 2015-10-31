<!-- jQuery 2.1.4 -->
<script src="{{ url('assets/plugins/jQuery/jQuery-2.1.4.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ url('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="{{ url('assets/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<!-- FastClick -->
<script src="{{ url('assets/plugins/fastclick/fastclick.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ url('assets/dist/js/app.min.js') }}" type="text/javascript"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>

<script src="{{ url('assets/plugins/jquery-validation/dist/jquery.validate.js') }}" type="text/javascript"></script>
<script src="{{ url('assets/plugins/jquery-validation/dist/additional-methods.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo url('assets/plugins/bootstrap-datetimepicker/build/js/moment.js')?>"></script>
<script type="text/javascript" src="<?php echo url('assets/plugins/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')?>"></script>

<!--<script src="{{ url('assets/plugins/datepicker/bootstrap-datepicker.js') }}" type="text/javascript"></script>-->

<script>
$.validator.setDefaults({
//        onkeyup: false,
//        errorClass: 'has-error',
//        validClass: 'has-success',
//        ignore: "",

    highlight: function (element, errorClass, validClass) {
        $(element).closest('.form-group').addClass('has-error');
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).closest('.form-group').removeClass('has-error');
        $(element).closest('.form-group').find('.help-block').text('');
    },
    errorPlacement: function (error, element) {
        $(element).closest('.form-group').find('.help-block').text(error.text());
    },
});
</script>