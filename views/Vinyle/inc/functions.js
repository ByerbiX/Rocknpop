$('.upload-btn input').on('change', function(){
    $(this).parent().find('span').html($(this).val());
  });