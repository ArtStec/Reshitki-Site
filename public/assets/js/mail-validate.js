jQuery(function($) {
    $(document).ready(function () {
        $(".phone-mask").inputmask('+380999999999', {
            clearIncomplete: true,
            showMaskOnHover: false
        });
        $('.php-email-form').submit(function (event) {
            event.preventDefault();

            let thisForm = $(this);
            let action = thisForm.attr('action');
            let formData = new FormData(thisForm[0]);

            $.ajax({
                type: 'POST',
                url: action,
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    thisForm.find('.loading').addClass('d-block');
                    thisForm.find('.error-message').removeClass('d-block');
                    thisForm.find('.sent-message').removeClass('d-block');

                    // Отслеживание успешного события
                    gtagSendEvent();
                },
                success: function (response) {
                    displaySuccess(thisForm, response);
                },
                error: function (error) {
                    displayError(thisForm, error);
                    
                    // Отслеживание ошибки
                    gtagSendEvent();
                }
            });
        });

        function displaySuccess(thisForm, error) {
            thisForm.find('.loading').removeClass('d-block');
            thisForm.find('.sent-message').text(error).addClass('d-block');
        }

        function displayError(thisForm, error) {
            thisForm.find('.loading').removeClass('d-block');
            thisForm.find('.error-message').text(error).addClass('d-block');
        }
    });
});