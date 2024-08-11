
jQuery(function($) {
    $(document).ready(function () {
        $('button#orderBtn').click(function (event) {
            var productTitle = $(this).closest('div').find('h3').text();

            if (!productTitle) {
                productTitle = $(this).closest('div.portfolio-description').find('h1').text();
            }

            $('#orderModal').find('#productAlert span b').text(productTitle);
            $('#orderModal').find('input[name="product"]').val(productTitle);
            $('#orderModal').modal('show');
            gtagClickEvent();
        });

        $('a#closeModal').click(function (event) {
            $('#orderModal').modal('hide');
            $('#alertModal').removeClass('d-block').addClass('d-none');
        });
    
        $('#orderModal').on('hidden.bs.modal', function(e) {
            $(this).find('form')[0].reset();
        });

        $('#submitModal').click(function (event) {
            event.preventDefault();
    
            let thisForm = $('#orderModal').find('.php-email-form'),
                action   = thisForm.attr('action'),
                formData = new FormData(thisForm[0]),
                allFieldsFilled = true,
                unfilledFields  = [];

            thisForm.find('input[type="text"]').each(function() {
                if ($(this).val().trim() === '') {
                    unfilledFields.push($(this).attr('placeholder'));
                }
            });

            if (unfilledFields.length > 0) {
                let alertText = 'Будь ласка заповніть такі поля: ';
                alertText += unfilledFields.join(', ');
                
                $('#alertModal').children().text(alertText);
                $('#alertModal').removeClass('d-none').addClass('d-block');
                return;
            }

            $.ajax({
                type: 'POST',
                url: action,
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    thisForm.find('#customLoader').removeClass('d-none').addClass('d-block');
                },
                success: function (response) {
                    thisForm.find('#customLoader').removeClass('d-block').addClass('d-none');
                    
                    // Отслеживание успешного события
                    gtagSendEvent();

                    $('#orderModal').modal('hide');
                    $('#orderModal').on('hidden.bs.modal', function(e) {
                        $(this).find('form')[0].reset();
                    });
                },
                error: function (error) {
                    thisForm.find('#customLoader').removeClass('d-block').addClass('d-none');
                    
                    // Отслеживание ошибки
                    gtagSendEvent();
                }
            });
        });

        $('#orderModal').on('change', function (e) {
            if ($('#alertModal').hasClass('d-none')) {
                return;
            }
        
            $('#alertModal').removeClass('d-block').addClass('d-none');
        });
    });
});