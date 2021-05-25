"use strict";

jQuery(function () {
    //
    // validate
    //
    var validation = function () {
        function resetForm(form) {
            form.find('select').val('').trigger('change');
            form.find('input, textarea').removeClass('input_error input_valid');
            form.find('[type=file]').val('').trigger('change');
            form[0].reset();
        }

        ;

        function clearForm(form) {
            form.find('input, textarea').removeClass('input_error input_valid');
        }

        ;

        function verificationFields(thisForm) {
            var isValid = false;
            thisForm.find('input, select, textarea').each(function (i) {
                var $this = jQuery(this);
                var thisVal = $this.val();

                if ($this.prop('required')) {
                    if ($this.prop('multiple') && thisVal.length == 0) {
                        showErrors($this);
                        return true;
                    } else if (!$this.prop('multiple') && !thisVal.trim()) {
                        showErrors($this);
                        return true;
                    } else {
                        if ($this.is('input[type="email"]')) return inputValidateWithReq($this, thisVal, validateEmail);
                        if ($this.is('input[type="checkbox"]')) return inputValidateWithReq($this, thisVal, validateCheckbox);
                        if ($this.is('input[data-mask="tel"')) return inputValidateWithReq($this, thisVal, validateMaskedTel);
                        hideErrors($this);
                    }

                    ;
                }

                ;
            });
            isValid = !thisForm.find('input, select, textarea').hasClass('input_error');
            return isValid;
        }

        ;

        function inputValidateWithReq(input, val, func) {
            if (func(val, input)) {
                hideErrors(input);
            } else {
                showErrors(input);
            }

            ;
            return true;
        }

        ;

        function validateEmail(email) {
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            return re.test(email);
        }

        ;

        function validateMaskedTel(val, elem) {
            return elem.inputmask("isComplete");
        }

        ;

        function validateCheckbox(val, checkbox) {
            return checkbox.prop('checked');
        }

        ;

        function showErrors(elem) {
            elem.addClass('input_error').removeClass('input_valid');
            jQuery('.modal-form').find('.input_error').first().focus();
            elem.parent().find('.modal-input-error-msg').show();
            elem.parent().find('.modal-input-icon').addClass('error');
        }

        ;

        function hideErrors(elem) {
            elem.removeClass('input_error').addClass('input_valid');
            elem.parent().find('.modal-input-error-msg').hide();
            elem.parent().find('.modal-input-icon').removeClass('error');
        }

        ;
        return {
            verificationFields: verificationFields,
            resetForm: resetForm,
            clearForm: clearForm
        };
    }();

    window.validation = validation;
    jQuery('body').on('keyup', '.js--input-keyup-validate', function (e) {
        var $t = jQuery(this);
        validation.verificationFields($t.closest('.input-wrap'));
    });
    jQuery('.js--form-validate').on('submit', function (e) {
        e.preventDefault();
        var $this = jQuery(this);
        var action = $('input[name="action"]').val();
        console.log('here');
        console.log(action);

        if (!action) {
            console.log('У формы отсутствует атрибут action, не знаю куда посылать данные');
            return false;
        }

        ;

        if (validation.verificationFields($this)) {
            console.log('form well done.');

            jQuery.ajax({
                url: action,
                type: 'POST',
                dataType: 'json',
                processData: false,
                contentType: false,
                data: data,
                success: function (data) {
                    console.log(data);

                    validation.resetForm($this);
                },
                error: function (error) {
                    console.log('error' + error);
                },
            });
        }

        ;
        return false;
    }); //
    // validate ... end;
    //
});