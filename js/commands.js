(function($, Drupal, undefined) {
  /**
   * Add new command for reading a message.
   */
  Drupal.AjaxCommands.prototype.dsnz2017Command = function(ajax, response, status) {
    console.log(response);
    $('.event__date').html(response.date);
    $('.event__place').html(response.place);
    $('.event__audience').html(response.audience);
  };
})(jQuery, Drupal);
