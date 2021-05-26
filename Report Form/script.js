$(function() {
  var $form = $('#form_1');
  var $formy = $('#form_2');
  var $formSub = $('#submit-button');
  var $formySub = $('#submit-buttony');
  $reset = $('#demo-reset');
  $resety = $('#demo-resety');

  $formSub.click(function() {
    $form.addClass('submitted').delay(3500).queue(function(next) {
      $form.removeClass('submitted').addClass('success').dequeue();
    });
  });
  $reset.click(function() {
    $form.removeClass('success');
  });

  $formySub.click(function() {
    $formy.addClass('submitted').delay(3500).queue(function(next) {
      $formy.removeClass('submitted').addClass('success').dequeue();
    });
  });
  $resety.click(function() {
    $formy.removeClass('success');
  });
});